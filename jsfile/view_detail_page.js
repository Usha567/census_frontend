
$(document).ready(function(){
    $('#suggesstion_submit').click(store);
  
});

function getFamilyDetail() {
    const urlParams = new URLSearchParams(window.location.search);
    const user_id = urlParams.get('family_id');
    const url = "http://192.168.1.10:8000/api/get_initial_family_details_byId/" + user_id;
    const token = localStorage.getItem('token');

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + token
        },
        success: function(response) {
            if (response.data && response.data.length > 0) {
                const family = response.data[0];
                document.getElementById('fid').value = family.fk_family_id;
                // $('#fid').text(family.fk_family_id);
                $('#native_Address').text(family.native_address || ' ');
                $('#ID_NO').text(family.fk_family_id || ' ');
                $('#city_villege').text(family.city || ' ');
                $('#district').text(family.district || ' ');
                $('#state').text(family.state || ' ');
                // Hide both tables initially
                $('#male_chief_table').closest('tr').hide();
                $('#female_chief_table').closest('tr').hide();

                let maleChief, femaleChief;

                family.familymemberdetails.forEach(member => {
                    if (member.family_member_id === 1) {
                        maleChief = member;
                    } else if (member.family_member_id === 2) {
                        femaleChief = member;
                    }
                });
                
                // Insert the male and female chief sections
                if (maleChief) {
                    const maleBgClass = femaleChief ? 'bg-light-blue' : 'bg-white';
                    const maleChiefRow = `
                        <tr class="${maleBgClass}">
                            <td rowspan="5" class="text-center align-middle">पुरुष मुखिया</td>
                            <td colspan="2">नाम: ${maleChief.name || ' '}</td>
                            <td colspan="2">जन्म की तारीख: ${maleChief.dob || ' '}, आयु: ${maleChief.age || ' '}</td>
                            <td colspan="2">विवाहित: ${maleChief.marrieged == 1 ? 'हाँ' : maleChief.marrieged == 0 ? 'नहीं' : ' '} ${maleChief.marriage_type || ' '}</td>
                            <td rowspan="2" class="align-middle">
                                <div>बच्चों की संख्या: ${maleChief.total_kids || ' '}</div>
                                <div>पुत्र: ${maleChief.sons || ' '}</div>
                                <div>पुत्री: ${maleChief.daughters || ' '}</div>
                            </td>
                            <td rowspan="5" class="align-middle">
                                <div>
                                    <img src="http://192.168.1.10:8000/uploads/family_member_image/${maleChief.self_image || ' '}" class="img-fluid img-fixed-size" alt="Image">
                                    <label>पुरुष मुखिया</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="${maleBgClass}">
                            <td colspan="2">पत्नी: ${maleChief.wife_name || ' '}</td>
                            <td colspan="2">मोबाइल नंबर: ${maleChief.mobile_number || ' '}</td>
                            <td colspan="2">स्थिति: ${maleChief.marital_status || ' '}</td>
                        </tr>
                        <tr class="${maleBgClass}">
                            <td colspan="2">माता: ${maleChief.mother_name || ' '}</td>
                            <td colspan="2">परिवार के मुखिया के साथ संबंध: ${maleChief.relation || ' '}</td>
                            <td colspan="2">ब्लड ग्रुप: ${maleChief.blood_group || ' '}</td>
                            <td rowspan="3" class="align-middle">
                                <div>कार्य: ${maleChief.occupation || ' '}</div>
                                <div class="mt-2">${maleChief.occupation_type || ' '}</div>
                            </td>
                        </tr>
                        <tr class="${maleBgClass}">
                            <td colspan="2">पिता: ${maleChief.father_name || ' '}, ID: ${maleChief.father_id || ' '}</td>
                            <td colspan="2" rowspan="2">शिक्षा: ${maleChief.qualification || ' '}</td>
                             <td colspan="2" rowspan="2">जाति प्रमाण पत्र: ${maleChief.cast_certificate == 1 ? 'हाँ' : maleChief.cast_certificate == 0 ? 'नहीं' : ' '}</td>
                        </tr>
                        <tr class="${maleBgClass}">
                            <td colspan="2">मूल सरनेम: ${maleChief.father_surname || ' '}</td>
                        </tr>
                    `;
                    $('#male-chief-placeholder').after(maleChiefRow);
                }
                
                if (femaleChief) {
                    const femaleChiefRow = `
                        <tr class="">
                            <td rowspan="5" class="text-center align-middle">महिला मुखिया</td>
                            <td colspan="2">नाम: ${femaleChief.name || ' '}</td>
                            <td colspan="2">जन्म की तारीख: ${femaleChief.dob || ' '}, आयु: ${femaleChief.age || ' '}</td>
                            <td colspan="2">विवाहित: ${femaleChief.marrieged == 1 ? 'हाँ' : femaleChief.marrieged == 0 ? 'नहीं' : ' '} ${femaleChief.marriage_type || ' '}</td>
                            <td rowspan="2" class="align-middle">
                                <div>बच्चों की संख्या: ${femaleChief.total_kids || ' '}</div>
                                <div>पुत्र: ${femaleChief.sons || ' '}</div>
                                <div>पुत्री: ${femaleChief.daughters || ' '}</div>
                            </td>
                            <td rowspan="5" class="align-middle">
                                <div>
                                    <img src="http://192.168.1.10:8000/uploads/family_member_image/${femaleChief.self_image || ''}" class="img-fluid img-fixed-size" alt="Image">
                                    <label>महिला मुखिया</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">पति: ${femaleChief.husband_name || ' '}</td>
                            <td colspan="2">मोबाइल नंबर: ${femaleChief.mobile_number || ' '}</td>
                            <td colspan="2">स्थिति: ${femaleChief.marital_status || ' '}</td>
                        </tr>
                        <tr>
                            <td colspan="2">माता: ${femaleChief.mother_name || ' '}</td>
                            <td colspan="2">परिवार के मुखिया के साथ संबंध: ${femaleChief.relation || ' '}</td>
                            <td colspan="2">ब्लड ग्रुप: ${femaleChief.blood_group || ' '}</td>
                            <td rowspan="3" class="align-middle">
                                <div>कार्य: ${femaleChief.occupation || ' '}</div>
                                <div class="mt-2">${femaleChief.occupation_type || ' '}</div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">पिता (निवासी): ${femaleChief.father_name || ' '},${femaleChief.father_name || ' '}</td>
                            <td colspan="2" rowspan="2">शिक्षा: ${femaleChief.qualification || ' '}</td>
                            <td colspan="2" rowspan="2">जाति प्रमाण पत्र: ${femaleChief.cast_certificate == 1 ? 'हाँ' : femaleChief.cast_certificate == 0 ? 'नहीं' : ' '}</td>
                        </tr>
                        <tr>
                            <td colspan="2">मूल सरनेम: ${femaleChief.father_surname || ' '}</td>
                        </tr>`;
                    $('#female-chief-placeholder').after(femaleChiefRow);
                }
                let childCount = 0;

                family.familymemberdetails.forEach(member => {
                    if (member.family_member_id === 3) {
                        childCount++;
                        const bgClass = childCount % 2 === 0 ? 'bg-white' : 'bg-light-blue';
                
                        const childRow = `
                            <tr class="${bgClass}">
                                <td rowspan="3" class="text-center align-middle">Unmarried Child</td>
                                <td colspan="2">नाम: ${member.name || ' '}</td>
                                <td colspan="2">परिवार के मुखिया के साथ संबंध: ${member.relation || ' '}</td>
                                <td colspan="2">अविवाहित: ${member.marriage_stage || ' '}</td>
                                <td rowspan="3" class="align-middle">
                                    <div>कार्य: ${member.occupation || ' '}</div>
                                    <div class="mt-2">${member.occupation_type || ' '}</div>
                                </td>
                                <td rowspan="3" class="align-middle">
                                    <div>
                                        <img src="http://192.168.1.10:8000/uploads/family_member_image/${member.self_image || ''}" alt="" class="img-fluid">
                                    </div>
                                </td>
                            </tr>
                            <tr class="${bgClass}">
                                <td colspan="2">जन्म की तारीख: ${member.dob || ' '}, आयु: ${member.age || ' '}</td>
                                <td colspan="2" rowspan="2">शिक्षा: ${member.qualification || ' '}</td>
                                <td colspan="2">ब्लड ग्रुप: ${member.blood_group || ' '}</td>
                            </tr>
                            <tr class="${bgClass}">
                                <td colspan="2">मोबाइल नंबर: ${member.mobile_number || ' '}</td>
                                 <td colspan="2" >जाति प्रमाण पत्र: ${member.cast_certificate == 1 ? 'हाँ' : member.cast_certificate == 0 ? 'नहीं' : ' '}</td>
                            </tr>
                        `;
                        $('#unmarried-children-placeholder').before(childRow);
                    }
                });
                     family.familymemberdetails.forEach(member => {
                        if (member.family_member_id === 4) {
                            const marriedChildRow = `
                                <tr>
                                    <td><a href="view-detail-page.php?family_id=${member.married_child_id}" class="married-child-link" data-married-child-id="${member.married_child_id}">${member.name || ' '}</a></td>
                                    <td>${member.married_child_address || ' '}</td>
                                </tr>
                            `;
                            $('#marriedChildrenTable tbody').append(marriedChildRow);
                        }
                    });
                    
                    // Show the married children table if there are entries
                    if (family.familymemberdetails.some(member => member.family_member_id === 4)) {
                        $('#marriedChildrenTable').show();
                    }
                } else {
                    console.error('Error: Unable to retrieve family details.');
                }
            },
            error: function(xhr, status, error) {
                if (xhr.status === 404) {
                    // Clear the DataTable if needed
                    $('#marriedChildrenTable tbody').empty(); // Example of clearing the DataTable
            
                    // Show alert message
                    alert('No matching data available');
            
                    // Redirect to customer_panel.php after clicking OK
                    window.location.href = 'customer_panel.php';
                } else {
                    console.error('Error searching for data:', error);
                }
            }
        });
    }
    
    // Call the function to fetch and display family details
    getFamilyDetail();


    function store(event) {
    event.preventDefault();
    var family_id = $('#fid').val();
    var user_name = $('#user_name').val();
    var mobile = $('#user_mobnumber').val();
    var massage = $('#massage').val();

    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    var data = new FormData();
    // data.append('self_image', image_file); // Append the file directly, not the FileList
    data.append('family_id', family_id);
    data.append('name', user_name);
    data.append('mobile_number', mobile);
    data.append('suggestion', massage);



    $.ajax({
        url: "http://192.168.1.10:8000/api/add_suggestion/",
        type: "POST",
        data: data,
        headers: headers,
        processData: false,  // Don't process the data
        contentType: false,  // Don't set content type
        success: function (result) {
            console.log('Success:', result);
            alert('Successfully Submitted!');
            $('#staticBackdrop').modal('hide'); 
            $('#saggesstion_form')[0].reset();
        },
        error: function (error) {
            console.error('Error:', error);
            alert('Error inserting data. See console for details.');
        }
    });
}

