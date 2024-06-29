$(document).ready(function() {
    $('#search').click(searchdata);
});

function searchdata() {
    var Name = $('#Name').val();
    var number = $('#number').val();
    var minAge = $('#minAge').val();
    var maxAge = $('#maxAge').val();
    var State = $('#State').val(); 
    var OtherState = $('#OtherState').val(); 
    var District = $('#District').val(); 
    var OtherDistrict = $('#OtherDistrict').val(); 
    var Qualification = $('#Qualification').val();
    var Status = $('#Status').val();
    var Occupation = $('#Occupation').val();

    // Value must be an integer
    var ageRegex = /^\d+$/; // Regular expression to match only digits (0-9)

    if (minAge && !ageRegex.test(minAge)) {
        alert('Please enter a valid integer for minimum age.');
        return;
    }

    if (maxAge && !ageRegex.test(maxAge)) {
        alert('Please enter a valid integer for maximum age.');
        return;
    }

    // Convert age inputs to numbers for validation
    var minAgeNum = parseFloat(minAge);
    var maxAgeNum = parseFloat(maxAge);

    // Check if any age values are negative
    if (minAgeNum < 0 || maxAgeNum < 0) {
        alert('Age values cannot be negative.');
        return;
    }

    // Check if minAge is greater than maxAge
    if (minAgeNum > maxAgeNum) {
        alert('Minimum age cannot be greater than maximum age.');
        return;
    }

    // Check if all fields are empty
    var allFieldsEmpty = !Name && !number && !minAge && !maxAge && !State && !District && !Qualification && !Status && !Occupation;

    if (allFieldsEmpty) {
        alert('Please enter at least one search criteria.');
        var paraArr = {
            'flag': 'nosearchparam'
        };
    } else {
        var ageRange = minAge && maxAge ? minAge + '-' + maxAge : '';

        var paraArr = {
            'name': Name,
            'mobile': number,
            'agerange': ageRange,
            'state': State, 
            'other_state': OtherState,
            'district': District,
            'other_dist': OtherDistrict,
            'qualification': Qualification,
            'maritalstatus': Status,
            'occupation': Occupation
        };
    }

    var url = 'http://192.168.1.10:8000/api/search_family_details/';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(response) {
            console.log(response, "Search results");
            updateTable(response.data); // Call the function to update the table with the search results
        },
        error: function(xhr, status, error) {
            if (xhr.status === 404) {
                // Handle 404 error here
                const tableBody = $('#data-table');
                tableBody.html('<tr><td colspan="11">No matching data available</td></tr>');
                // Clear the DataTable
                $('#example').DataTable().clear().draw();
            } else {
                console.error('Error searching for data:', error);
            }
        }
    });
}
function updateTable(data) {
    var tableBody = $('#data-table');
    tableBody.empty(); // Clear any existing data

    var showOtherCity = false;
    var showOtherState = false;
    var showOtherDistrict = false;

    data.forEach(function(item) {
        if (item.marriage_type !== "अंतर्जातीय") {
            return; // Skip if marriage_type is not "Same Caste"
        }

        var otherCity = item.initfamilydetails[0].other_city || '';
        var otherState = item.initfamilydetails[0].other_state || '';
        var otherDistrict = item.initfamilydetails[0].other_district || '';

        if (otherCity) showOtherCity = true;
        if (otherState) showOtherState = true;
        if (otherDistrict) showOtherDistrict = true;

        var row = '<tr>' +
            '<td><a href="view-detail-page.php?family_id=' + item.family_id + '&family_member_id=' + item.family_member_id + '">' + item.name + '</a></td>' +
            '<td>' + item.mobile_number + '</td>' +
            '<td>' + item.age + '</td>' +
            '<td>' + (item.initfamilydetails[0].state_details ? item.initfamilydetails[0].state_details.state_name : '') + '</td>' +
            '<td class="other_state" style="display:none;">' + otherState + '</td>' +
            '<td>' + (item.initfamilydetails[0].district_details ? item.initfamilydetails[0].district_details.district_name : '') + '</td>' +
            '<td class="other_district" style="display:none;">' + otherDistrict + '</td>' +
            '<td>' + (item.initfamilydetails[0].city_details ? item.initfamilydetails[0].city_details.city_name : '') + '</td>' +
            '<td class="other_city" style="display:none;">' + otherCity + '</td>' +
            '<td>' + item.qualification + '</td>' +
            '<td>' + (item.marital_status || '') + '</td>' +
            '<td>' + item.occupation + '</td>' +
            '<td>' + item.marriage_type + '</td>' +
        '</tr>';
        tableBody.append(row);
    });

    // Show or hide the columns based on the data
    $('#example th[data-key="other_city"]').toggle(showOtherCity);
    $('#example th[data-key="other_state"]').toggle(showOtherState);
    $('#example th[data-key="other_district"]').toggle(showOtherDistrict);

    // Show or hide the cells based on the data
    $('#example tbody tr').each(function() {
        $(this).find('td.other_city').toggle(showOtherCity);
        $(this).find('td.other_state').toggle(showOtherState);
        $(this).find('td.other_district').toggle(showOtherDistrict);
    });

    // Re-initialize the DataTable if needed
    if ($.fn.DataTable.isDataTable('#example')) {
        $('#example').DataTable().clear().destroy();
    }
    $('#example').DataTable();
}



// Event listener for reset button
$('#resetButton').on('click', function() {
    $('#Name').val('');
    $('#number').val('');
    $('#minAge').val('');
    $('#maxAge').val('');
    $('#State').val('');
    $('#District').val('');
    $('#Qualification').val('');
    $('#Status').val('');
    $('#Occupation').val('');

    // Clear the table
    $('#data-table').empty();
    // Optionally, you can fetch the initial data again or just leave the table empty
});


function getState() {
    var url = "http://192.168.1.10:8000/api/states/";
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const stateSelect = document.getElementById('State');
            stateSelect.innerHTML = '<option selected disabled value="">Select State</option>';

            if (data.data && data.data.length > 0) {
                data.data.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.state_name;
                    option.value = row.id;
                    stateSelect.appendChild(option);
                });

                stateSelect.addEventListener('change', function() {
                    const selectedStateName = this.options[this.selectedIndex].text;
                    if (selectedStateName === 'Other') {
                        document.getElementById('otherStateInput').style.display = 'block';
                        fetchOtherStates(); // Call to fetch Other States data
                    } else {
                        document.getElementById('otherStateInput').style.display = 'none';
                    }
                });
            } else {
                stateSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching state data:', error);
        }
    });
}

function fetchOtherStates() {
    var url = 'http://192.168.1.10:8000/api/other_states/37/'; // Adjust the URL and state_id as per your API
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const otherStateSelect = document.getElementById('OtherState');
            otherStateSelect.innerHTML = '<option selected disabled value="">Select Other State</option>';

            if (data.data && data.data.length > 0) {
                data.data.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.other_state;
                    option.value = row.other_state;
                    otherStateSelect.appendChild(option);
                });
            } else {
                otherStateSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching other state data:', error);
        }
    });
}

// Initial call to populate the State dropdown
getState();
function getDistrict() {
    var url = "http://192.168.1.10:8000/api/districts/";
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const districtSelect = document.getElementById('District');
            districtSelect.innerHTML = '<option selected disabled value="">Select District</option>';

            if (data.data && data.data.length > 0) {
                data.data.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.district_name;
                    option.value = row.id;
                    districtSelect.appendChild(option);
                });

                districtSelect.addEventListener('change', function() {
                    const selectedDistrictName = this.options[this.selectedIndex].text;
                    if (selectedDistrictName === 'Other District') {
                        document.getElementById('otherDistrictInput').style.display = 'block';
                        fetchOtherDistricts(); // Call to fetch Other Districts data
                    } else {
                        document.getElementById('otherDistrictInput').style.display = 'none';
                    }
                });
            } else {
                districtSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching district data:', error);
        }
    });
}

function fetchOtherDistricts() {
    var url = 'http://192.168.1.10:8000/api/other_districts/770/'; // Adjust the URL and district_id as per your API
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const otherDistrictSelect = document.getElementById('OtherDistrict');
            otherDistrictSelect.innerHTML = '<option selected disabled value="">Select Other District</option>';

            if (data.data && data.data.length > 0) {
                data.data.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.other_district;
                    option.value = row.other_district;
                    otherDistrictSelect.appendChild(option);
                });
            } else {
                otherDistrictSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching other district data:', error);
        }
    });
}

// Initial call to populate the District dropdown
getDistrict();


function getcensusdata() {
    var url = 'http://192.168.1.10:8000/api/family-details/'; // Adjust the URL and state_id as per your API
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const censusSelect = document.getElementById('total_census_data');
            censusSelect.innerHTML = ''; // Clear the existing options

            if (data.success && data.data) {
                const censusData = data.data;

                // Create and append the initial option for Total Count
                const initialOption = document.createElement('option');
                initialOption.textContent = `Total Census Data Count: ${censusData.taotal_count}`;
                initialOption.value = 'total_count';
              
                censusSelect.appendChild(initialOption);

                // Create options for other counts and append them
                const options = [
                    { text: `Chhattisgarh : ${censusData.cg_state_count}`, value: 'cg_state_count' },
                    { text: `Madhyapradesh : ${censusData.mp_state_count}`, value: 'mp_state_count' },
                    { text: `Maharastra : ${censusData.mh_state_count}`, value: 'mh_state_count' },
                    { text: `Rest India & Foreign : ${censusData.otherstate_state_count}`, value: 'otherstate_state_count' }
                ];

                options.forEach(optionData => {
                    const option = document.createElement('option');
                    option.textContent = optionData.text;
                    option.value = optionData.value;
                    option.disabled = true;  // Disable the option
                    censusSelect.appendChild(option);
                });
            } else {
                // Handle case when no valid data is available
                const noDataOption = document.createElement('option');
                noDataOption.textContent = 'No valid data available';
                noDataOption.disabled = true;
                noDataOption.selected = true;
                censusSelect.appendChild(noDataOption);
            }
        },
        error: function (error) {
            console.error('Error fetching census data:', error);
        }
    });
}
getcensusdata();

