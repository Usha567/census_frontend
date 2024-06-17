document.addEventListener('DOMContentLoaded', function() {
    
});
    var url = 'http://192.168.1.10:8000/api/getall_initial_family_details/';

    // Function to fetch data and populate the table
    function fetchDataAndPopulateTable() {
        fetch(url, {
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        })
        .then(response => response.json())
        .then(data => {
            populateTable(data.data);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
            alert('An error occurred while fetching data. Please try again.');
        });
    }

    // Function to populate table with data
    function populateTable(data) {
        var tableBody = document.getElementById('data-table');
        tableBody.innerHTML = ''; // Clear any existing data

        var showOtherCity = false;
        var showOtherState = false;
        var showOtherDistrict = false;

        data.forEach(function(item, index) {
            if (item.familymemberdetails.length > 0) {
                item.familymemberdetails.forEach(function(member, memberIndex) {
                    var row = '<tr>' +
                        '<td><a href="view-detail-page.php?family_id=' + item.fk_family_id + '&family_member_id=' + member.id + '">' + member.name + '</a></td>' +
                        '<td>' + member.mobile_number + '</td>' +
                        '<td>' + member.age + '</td>' +
                        '<td>' + (item.state_details ? item.state_details.state_name : '') + '</td>' +
                        '<td class="other_state">' + (item.other_state || '') + '</td>' +
                        '<td>' + (item.district_details ? item.district_details.district_name : '') + '</td>' +
                        '<td class="other_district">' + (item.other_district || '') + '</td>' +
                        '<td>' + (item.city_details ? item.city_details.city_name : '') + '</td>' +
                        '<td class="other_city">' + (item.other_city || '') + '</td>' +
                        '<td>' + member.qualification + '</td>' +
                        '<td>' + member.marital_status + '</td>' +
                        '<td>' + member.occupation + '</td>' +
                    '</tr>';
                    tableBody.insertAdjacentHTML('beforeend', row);

                    // Determine if we need to show additional columns
                    if (item.other_city) {
                        showOtherCity = true;
                    }
                    if (item.other_district) {
                        showOtherDistrict = true;
                    }
                    if (item.other_state) {
                        showOtherState = true;
                    }
                });
            }
        });

        // Show or hide additional columns based on data
        var table = document.getElementById('example');
        if (showOtherCity) {
            table.querySelector('th[data-key="other_city"]').style.display = 'table-cell';
            table.querySelector('th[data-key="other_state"]').style.display = 'none';
            table.querySelector('th[data-key="other_district"]').style.display = 'none';
        }
        if (showOtherDistrict) {
            table.querySelector('th[data-key="other_district"]').style.display = 'table-cell';
            table.querySelector('th[data-key="other_state"]').style.display = 'none';
            if (!showOtherCity) {
                table.querySelector('th[data-key="other_city"]').style.display = 'none';
            }
        }
        if (showOtherState) {
            table.querySelector('th[data-key="other_state"]').style.display = 'table-cell';
            if (!showOtherCity) {
                table.querySelector('th[data-key="other_city"]').style.display = 'none';
            }
            if (!showOtherDistrict) {
                table.querySelector('th[data-key="other_district"]').style.display = 'none';
            }
        }
    }

    // Initial population of the table
    fetchDataAndPopulateTable();

    function search_data() {
  var Name = $('#Name').val();
  var paraArr = {
    'name':Name,
  };
  var url = 'http://192.168.1.10:8000/api/search_family_details/';
  ;
  $.ajax({
      url: url, 
      type: 'POST',
      data: paraArr,
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (searchData) {
        updateTable(searchData.newImplements); // Assuming 'newImplements' is the correct key for your data
      },
      error: function (xhr, status, error) {
          if(xhr.status == 404) {
              updateTable([]); // Pass an empty array to updateTable function
          } else {
              console.error('Error searching for brands:', error);
          }
      }
  });
};

