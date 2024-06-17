
$(document).ready(function(){
    $('#malechief_submit').click(store);
    $('#femalechief_submit').click(store1);
    // $('#child_subm').click(store2);
    // getInitialFamily();
});


   
// function getParameterByName(name, url) {
//     if (!url) url = window.location.href;
//     name = name.replace(/[\[\]]/g, "\\$&");
//     var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
//         results = regex.exec(url);
//     if (!results) return null;
//     if (!results[2]) return '';
//     return decodeURIComponent(results[2].replace(/\+/g, " "));
// }

function getInitialFamily() {
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
        success: function(data) {
            if (data.data && data.data.length > 0) {
                firstChildIdNumber = data.data[0].id;
                firstChildFamilyId = data.data[0].fk_family_id;

                // Populate initial fields
                document.getElementById('numner_id').value = firstChildIdNumber;
                document.getElementById('family_id').value = firstChildFamilyId;
                document.getElementById('female_numner_id').value = firstChildIdNumber;
                document.getElementById('female_family_id').value = firstChildFamilyId;
                document.getElementById('child-numner-id').value = firstChildIdNumber;
                document.getElementById('child-family-id').value = firstChildFamilyId
                // document.getElementById('married-child-numner-id').value = firstChildIdNumber;
                document.getElementById('married-child-family-id').value = firstChildFamilyId

                // addChild();
           
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}
getInitialFamily();

function store(event) {
    event.preventDefault();

    var image_names = document.getElementById('f_file').files;
    var family_id = $('#family_id').val();
    var husband_name = $('#husband_name').val();
    var husband_mother_name = $('#husband_mother_name').val();
    var husband_father_name = $('#husband_father_name').val();
    var husband_father_surname = $('#husband_father_surname').val();
    var husband_father_id = $('#husband_father_id').val();
    var family_member_id = 1;
    var husband_age = $('#husband_age').val();
    var husband_dob = formatDate($('#husband_dob').val()); // Format date here
    var husband_mobile = $('#husband_mobile').val();
    var husband_relation = $('#husband_relation').val();
    var husband_qualification = $('#husband_qualification').val();
    var husband_other_qualification = $('#husband_other_qualification').val();
    var husband_marriage_type = $('#husband_marriage_type').val();
    var husband_marital_status = $('#husband_marital_status').val();
    var husband_blood_group = $('#husband_blood_group').val();
    var husband_total_kids = $('#husband_total_kids').val();
    var husband_sons = $('#husband_sons').val();
    var husband_daughters = $('#husband_daughters').val();
    var husband_occupation = $('#husband_occupation').val();
    var husband_occupation_type = $('#husband_occupation_type').val();
    var Cast = $('input[name="role"]:checked').val(); 
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    var data = new FormData();
 // Append each image to the FormData object
 for (var x = 0; x < image_names.length; x++) {
    data.append("self_image", image_names[x]);
    console.log("multiple image", image_names[x]);
}
    // data.append('self_image', image_file); // Append the file directly, not the FileList

    data.append('family_id', family_id);
    data.append('name', husband_name);
    data.append('mother_name', husband_mother_name);
    data.append('father_name', husband_father_name);
    data.append('father_surname', husband_father_surname);
    data.append('father_id', husband_father_id);
    data.append('family_member_id', family_member_id);
    data.append('age', husband_age);
    data.append('dob', husband_dob);
    data.append('mobile_number', husband_mobile);
    data.append('relation', husband_relation);
    data.append('qualification', husband_qualification);
    data.append('other_qualification', husband_other_qualification);
    data.append('marriage_type', husband_marriage_type);
    data.append('marital_status', husband_marital_status);
    data.append('blood_group', husband_blood_group);
    data.append('total_kids', husband_total_kids);
    data.append('sons', husband_sons);
    data.append('daughters', husband_daughters);
    data.append('occupation', husband_occupation);
    data.append('occupation_type', husband_occupation_type);
    data.append('cast_certificate', Cast);


    $.ajax({
        url: "http://192.168.1.10:8000/api/family-details/",
        type: "POST",
        data: data,
        headers: headers,
        processData: false,  // Don't process the data
        contentType: false,  // Don't set content type
        success: function (result) {
            console.log('Success:', result);
            alert('Successfully inserted!');
        },
        error: function (error) {
            console.error('Error:', error);
            alert('Error inserting data. See console for details.');
        }
    });
}

function formatDate(date) {
    // Convert date to yyyy-mm-dd format
    var parts = date.split('-');
    if (parts.length === 3) {
        return parts[0] + '-' + parts[1].padStart(2, '0') + '-' + parts[2].padStart(2, '0');
    }
    return date; // Return as is if not in expected format
}

function store1(event) {
    event.preventDefault();
  
    var image_names = document.getElementById('wife_f_file').files;

    var family_id = $('#female_family_id').val();
    var wife_name = $('#wife_name').val();
    var wife_mother_name = $('#wife_mother_name').val();
    var wife_father_name = $('#wife_father_name').val();
    var wife_father_surname = $('#wife_father_surname').val();
    var wife_father_id = $('#wife_father_id').val();
    var family_member_id = 2;
    var wife_age = $('#wife_age').val();
    var wife_dob = formatDate($('#wife_dob').val()); // Format date here
    var wife_mobile = $('#wife_mobile').val();
    var wife_relation = $('#wife_relation').val();
    var wife_qualification = $('#wife_qualification').val();
    var wife_other_qualification = $('#wife_other_qualification').val();
    var wife_marriage_type = $('#wife_marriage_type').val();
    var wife_marital_status = $('#wife_marital_status').val();
    var wife_blood_group = $('#wife_blood_group').val();
    var wife_total_kids = $('#wife_total_kids').val();
    var wife_sons = $('#wife_sons').val();
    var wife_daughters = $('#wife_daughters').val();
    var wife_occupation = $('#wife_occupation').val();
    var wife_occupation_type = $('#wife_occupation_type').val();
    var Cast = $('input[name="role"]:checked').val(); 
    var token = localStorage.getItem('token');
  console.log('token',token);
    var headers = {
        'Authorization': 'Bearer ' + token
    };
  
    var data = new FormData();
  
    for (var x = 0; x < image_names.length; x++) {
        data.append("self_image", image_names[x]);
        console.log("multiple image", image_names[x]);
    }
    data.append('family_id', family_id);
    data.append('name', wife_name);
    data.append('mother_name', wife_mother_name);
    data.append('father_name', wife_father_name);
    data.append('father_surname', wife_father_surname);
    data.append('father_id', wife_father_id);
    data.append('family_member_id', family_member_id);
    data.append('age', wife_age);
    data.append('dob', wife_dob);
    data.append('mobile_number', wife_mobile);
    data.append('relation', wife_relation);
    data.append('qualification', wife_qualification);
    data.append('other_qualification', wife_other_qualification);
    data.append('marriage_type', wife_marriage_type);
    data.append('marital_status', wife_marital_status);
    data.append('blood_group', wife_blood_group);
    data.append('total_kids', wife_total_kids);
    data.append('sons', wife_sons);
    data.append('daughters', wife_daughters);
    data.append('occupation', wife_occupation);
    data.append('occupation_type', wife_occupation_type);
    data.append('cast_certificate', Cast);
    $.ajax({
        url: "http://192.168.1.10:8000/api/family-details/",
        type: "POST",
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log('Success:', result);
            alert('Successfully inserted!');
        },
        error: function (error) {
            console.error('Error:', error);
            // alert('Error inserting data. See console for details.');
        }
    });
}

function store2(event) {
    event.preventDefault();

    const token = localStorage.getItem('token');
    const headers = {
        'Authorization': 'Bearer ' + token
    };

    const childrenEntries = document.querySelectorAll('.child-entry');
    childrenEntries.forEach((entry, index) => {
        const data = new FormData();

        const family_id_initial = $('#child-family-id').val();
        const child_qualification_initial = $('#child-qualification').val();
        const child_other_qualification_initial = $('#childother-qualification').val();
        const child_occupation_initial = $('#child-occupation').val();
        const child_other_occupation_initial = $('#childother-occupation-type').val();
        const castCertificate_initial = $('input[name="role"]:checked').val(); 
        // const castCertificate_initial = $('#child-occupation').val();
        const family_id = entry.querySelector(`#child${index + 1}-family-id`)?.value || family_id_initial || '';
        const family_member_id = 3; // Replace with dynamic value if needed
        const child_name = entry.querySelector(`#child${index + 1}-name`)?.value || '';
        const child_age = entry.querySelector(`#child${index + 1}-age`)?.value || '';
        const child_dob = entry.querySelector(`#child${index + 1}-dob`)?.value || '';
        const child_mobile = entry.querySelector(`#child${index + 1}-mobile`)?.value || '';
        const child_relation = entry.querySelector(`#child${index + 1}-relation`)?.value || '';
        const child_qualification = entry.querySelector(`#child${index + 1}-qualification`)?.value || child_qualification_initial || '';
        const child_other_qualification = entry.querySelector(`#childother${index + 1}-qualification`)?.value || child_other_qualification_initial || '';
        const child_marriage_stage = entry.querySelector(`#child${index + 1}-marriage-stage`)?.value || '';
        const child_blood_group = entry.querySelector(`#child${index + 1}-blood-group`)?.value || '';
        const child_occupation = entry.querySelector(`#child${index + 1}-occupation`)?.value || child_occupation_initial || '';
        const child_other_occupation = entry.querySelector(`#childother${index + 1}-occupation`)?.value || child_other_occupation_initial || '';
        const castCertificate = entry.querySelector(`input[name="role${index + 1}"]:checked`)?.value || castCertificate_initial || '';
        // Collect all images from the entry
        const imageInput = entry.querySelector('.upload__inputfile');
        if (imageInput && imageInput.files.length > 0) {
            for (let i = 0; i < imageInput.files.length; i++) {
                data.append('self_image', imageInput.files[i]);
            }
        }

        data.append('family_id', family_id);
        data.append('family_member_id', family_member_id);
        data.append('name', child_name);
        data.append('age', child_age);
        data.append('dob', child_dob);
        data.append('mobile_number', child_mobile);
        data.append('relation', child_relation);
        data.append('qualification', child_qualification);
        data.append('other_qualification', child_other_qualification);
        data.append('marriage_stage', child_marriage_stage);
        data.append('blood_group', child_blood_group);
        data.append('occupation', child_occupation);
        data.append('occupation_type', child_other_occupation);
        data.append('cast_certificate', castCertificate); 
        $.ajax({
            url: "http://192.168.1.10:8000/api/family-details/",
            type: "POST",
            data: data,
            headers: headers,
            processData: false,
            contentType: false,
            success: function(result) {
                console.log('Success:', result);
                if (index === childrenEntries.length - 1) {
                    alert('Successfully inserted all entries!');
                }
            },
            error: function(error) {
                console.error('Error:', error);
                alert('Error inserting data. See console for details.');
            }
        });
    });
}

function store3(event) {
    event.preventDefault();

    const token = localStorage.getItem('token');
    const headers = {
        'Authorization': 'Bearer ' + token
    };

    const childrenEntries = document.querySelectorAll('.Married_child-entry');
    childrenEntries.forEach((entry, index) => {
        const data = new FormData();
        const family_id_initial = $('#married-child-family-id').val();
        // Fetch the values from the form inputs
        const family_id = entry.querySelector(`#married-child-family-id-${index + 1}`)?.value || family_id_initial || '';
        const child_name = entry.querySelector(`#married_child${index + 1}-name`)?.value || '';
        const family_member_id = 4; 

        // Collect all images from the entry
        
        const imageInput = entry.querySelector('.upload__inputfile');
        if (imageInput && imageInput.files.length > 0) {
            for (let i = 0; i < imageInput.files.length; i++) {
                data.append('self_image', imageInput.files[i]);
            }
        }
        data.append('family_id', family_id);
        data.append('family_member_id', family_member_id);
        data.append('name', child_name);

        // Send the data via AJAX
        $.ajax({
            url: "http://192.168.1.10:8000/api/family-details/",
            type: "POST",
            data: data,
            headers: headers,
            processData: false,
            contentType: false,
            success: function(result) {
                console.log('Success:', result);
                if (index === childrenEntries.length - 1) {
                    alert('Successfully inserted all entries!');
                }
            },
            error: function(error) {
                console.error('Error:', error);
                alert('Error inserting data. See console for details.');
            }
        });
    });
}

// Image Upload DIv
jQuery(document).ready(function () {
    ImgUpload();
});

function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];

    $('.upload__inputfile').each(function () {
        $(this).on('change', function (e) {
        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {

            if (!f.type.match('image.*')) {
                return;
            }

            if (imgArray.length > maxLength) {
                return false
            }
            else
            {
                var len = 0;
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i] !== undefined) {
                        len++;
                    }
                }
                if (len > maxLength) {
                    return false;
                }
                else {
                    imgArray.push(f);

                    var reader = new FileReader();
                    reader.onload = function (e) {
                    var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                    imgWrap.append(html);
                    iterator++;
                    }
                    reader.readAsDataURL(f);
                }
            }
        });
    });
});

$('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
                imgArray.splice(i, 1);
                break;
            }
        }
        $(this).parent().parent().remove();
    });
}


// function fetchAndPopulateData() {
//     var token = localStorage.getItem('token');
//     var headers = {
//         'Authorization': 'Bearer ' + token
//     };

//     $.ajax({
//         url: "http://192.168.1.10:8000/api/family-details/2/",
//         type: "GET",
//         headers: headers,
//         success: function(result) {
//             console.log('Fetched Data:', result);
//             $('#family_id').val(result.family_id);
//             $('#husband_name').val(result.name);
//             $('#husband_mother_name').val(result.mother_name);
//             $('#husband_father_name').val(result.father_name);
//             $('#husband_father_surname').val(result.father_surname);
//             $('#husband_father_id').val(result.father_id);
//             $('#family_member_id').val(result.family_member_id);
//             $('#husband_age').val(result.age);
//             $('#husband_dob').val(result.dob);
//             $('#husband_mobile').val(result.mobile_number);
//             $('#husband_relation').val(result.relation);
//             $('#husband_qualification').val(result.qualification);
//             $('#husband_marriage_type').val(result.marriage_type);
//             $('#husband_marital_status').val(result.marital_status);
//             $('#husband_blood_group').val(result.blood_group);
//             $('#husband_total_kids').val(result.total_kids);
//             $('#husband_sons').val(result.sons);
//             $('#husband_daughters').val(result.daughters);
//             $('#husband_occupation').val(result.occupation);

//             // Change button to update
//             $('#submitBtn').text('Update').off('click').on('click', updateData);
//         },
//         error: function(error) {
//             console.error('Error fetching data:', error);
//             alert('Error fetching data. See console for details.');
//         }
//     });
// }
