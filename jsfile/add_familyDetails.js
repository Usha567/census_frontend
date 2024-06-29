var EditIdmain_ = "";
var family_id= false;
var update_family_id = null
$(document).ready(function(){
    $('#malechief_submit').click(store);
    $('#femalechief_submit').click(store1);
});
function getInitialFamily() {
    const urlParams = new URLSearchParams(window.location.search);
    const user_id = urlParams.get('family_id');
    update_family_id = user_id
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


function detectLanguage(text) {
    if (!text || text.trim() === '') {
        return 'Null Value';
      }
    // Regular expression for Devanagari script (Hindi)
    var hindiRegex = /^[\u0900-\u097F\s]+$/;
    // Regular expression for Latin script (English) excluding numbers
    var englishRegex = /^[A-Za-z\s]+$/;

    if (hindiRegex.test(text)) {
      return 'Hindi';
    } else if (englishRegex.test(text)) {
      return 'English';
    } else {
      return 'Number included';
    }
  }
function store(event) {
    event.preventDefault();
    var image_names = document.getElementById('f_file').files;
    var family_id = $('#family_id').val();
    var updateOrInsert = $('#updateOrInsert').val();
    var husband_name = $('#husband_name').val(); 
    var husband_mother_name = $('#husband_mother_name').val();
    var husband_father_name = $('#husband_father_name').val();
    var husband_wife_name = $('#husband_wife_name').val();
    var husband_father_surname = $('#husband_father_surname').val();
    var husband_father_id = $('#husband_father_id').val();
    var family_member_id = '1';
    var husband_age = $('#husband_age').val();
    var husband_dob = formatDate($('#husband_dob').val()); // Format date here
    var husband_mobile = $('#husband_mobile').val();
    var husband_relation = $('#husband_relation').val();
    var husband_qualification = $('#husband_qualification').val();
    var husband_other_qualification = $('#husband_other_qualification').val();
    var husband_marriage = $('#husband_marriage').val();
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
console.log(husband_name,'husband_name');
    var fieldsToCheck = [
        husband_name, husband_mother_name, husband_father_name, husband_wife_name, husband_father_surname,
        family_member_id, husband_dob, husband_mobile, husband_relation, husband_qualification, 
        husband_other_qualification, husband_marriage, husband_marriage_type, husband_marital_status,
        husband_blood_group, husband_total_kids, husband_sons, husband_daughters, husband_occupation, 
        husband_occupation_type, Cast
    ];
    console.log(fieldsToCheck,'fieldsToCheck');
   var arr = []
   var fieldarr =[]
    for (var field of fieldsToCheck) {
        console.log(field,'field');
        var language = detectLanguage(field);
        console.log(language,'language');
        arr.push(language);
        fieldarr.push(field);
       
    }
    console.log(fieldarr,'fieldarr');
    console.log( arr,'arr');
    if(arr.includes('English')){
            alert('You Should Fill The Form In Hindi');
            return;
        }

    var data = new FormData();
    if (updateOrInsert !== '' && updateOrInsert == 'update') {
        console.log('suman');
        // Update mode
        // _method = 'put';
        var url ='http://192.168.1.10:8000/api/family-details/' + family_id;
        method = 'POST'; 
        data.append('_method', 'put');
    } else {
        console.log('prachi');
        var url = 'http://192.168.1.10:8000/api/family-details/';
        method = 'POST';
    }
  
    // Append each image to the FormData object
    for (var x = 0; x < image_names.length; x++) {
        data.append("self_image", image_names[x]);
    }

    data.append('family_id', family_id);
    data.append('name', husband_name);
    data.append('mother_name', husband_mother_name);
    data.append('father_name', husband_father_name);
    data.append('wife_name  ', husband_wife_name);
    data.append('father_surname', husband_father_surname);
    data.append('father_id', husband_father_id);
    data.append('family_member_id', Number(family_member_id));
    data.append('age', husband_age);
    data.append('dob', husband_dob);
    data.append('mobile_number', husband_mobile);
    data.append('relation', husband_relation);
    data.append('qualification', husband_qualification);
    data.append('other_qualification', husband_other_qualification);
    data.append('marrieged', husband_marriage);
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
        url: url,
        type: method,
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log('Success:', result);
            alert('Successfully inserted!');
            window.location.reload();
        },
        error: function (error) {
            console.error('Error:', error);
            alert('Successfully inserted!');
            // window.location.reload();
        }
    });
}

function formatDate(date) {
    // Check if the input date is in the correct format yyyy-mm-dd
    if (/^\d{4}-\d{2}-\d{2}$/.test(date)) {
        // Date is already in correct format
        return date;
    }

    // Check if the input date is in the format yyyy-m-d or yyyy-mm-d or yyyy-m-dd
    var parts = date.split('-');
    if (parts.length === 3) {
        var year = parts[0];
        var month = parts[1].padStart(2, '0');
        var day = parts[2].padStart(2, '0');

        // Check if the year is a valid number
        if (isNaN(year) || year.length !== 4) {
            throw new Error("Invalid year format");
        }

        // Check if the month and day are valid numbers
        if (isNaN(month) || isNaN(day) || month > 12 || day > 31) {
            throw new Error("Invalid month or day format");
        }

        return `${year}-${month}-${day}`;
    }

    throw new Error("Invalid date format");
}

function store1(event) {
    event.preventDefault();
  
    var image_names = document.getElementById('wife_f_file').files;
    var updateOrInsert = $('#updateOrInsert').val();
    var family_id = $('#female_family_id').val();
    var wife_name = $('#wife_name').val();
    var wife_mother_name = $('#wife_mother_name').val();
    var wife_father_name = $('#wife_father_name').val();
    var wife_husband_name = $('#wife_husband_name').val();
    var wife_father_surname = $('#wife_father_surname').val();
    var wife_father_id = $('#wife_father_id').val();
    var family_member_id = 2;
    var wife_age = $('#wife_age').val();
    var wife_dob = formatDate($('#wife_dob').val()); // Format date here
    var wife_mobile = $('#wife_mobile').val();
    var wife_relation = $('#wife_relation').val();
    var wife_qualification = $('#wife_qualification').val();
    var wife_other_qualification = $('#wife_other_qualification').val();
    var wife_marriage = $('#wife_marriage').val();
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

    var fieldsToCheck = [
        wife_name, wife_mother_name, wife_father_name, wife_husband_name, wife_father_surname,
        wife_father_id, wife_age, wife_mobile, wife_relation, wife_qualification, 
        wife_other_qualification, wife_marriage, wife_marriage_type, wife_marital_status,
        wife_blood_group, wife_total_kids, wife_sons, wife_daughters, wife_occupation, 
        wife_occupation_type, Cast
    ];
   var arr = []
   var fieldarr =[]
    for (var field of fieldsToCheck) {
        var language = detectLanguage(field);
        console.log(language,'language');
        arr.push(language);
        fieldarr.push(field);
       
    }
    console.log(fieldarr,'fieldarr');
    console.log( arr,'arr');
    if(arr.includes('English')){
            alert('You Should Fill The Form In Hindi');
            return;
        }
    var data = new FormData();

    if (updateOrInsert !== '' && updateOrInsert == 'update') {
        console.log('suman');
        // Update mode
        // _method = 'put';
        var url ='http://192.168.1.10:8000/api/family-details/' + family_id;
        method = 'POST'; 
        data.append('_method', 'put');
    } else {
        console.log('prachi');
        var url = 'http://192.168.1.10:8000/api/family-details/';
        method = 'POST';
    }
  
    for (var x = 0; x < image_names.length; x++) {
        data.append("self_image", image_names[x]);
        console.log("multiple image", image_names[x]);
    }
    data.append('family_id', family_id);
    data.append('name', wife_name);
    data.append('mother_name', wife_mother_name);
    data.append('father_name', wife_father_name);
    data.append('husband_name', wife_husband_name);
    data.append('father_surname', wife_father_surname);
    data.append('father_id', wife_father_id);
    data.append('family_member_id', family_member_id);
    data.append('age', wife_age);
    data.append('dob', wife_dob);
    data.append('mobile_number', wife_mobile);
    data.append('relation', wife_relation);
    data.append('qualification', wife_qualification);
    data.append('other_qualification', wife_other_qualification);
    data.append('marrieged', wife_marriage);
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
        url: url,
        type: method,
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log('Success:', result);
            alert('Successfully inserted!');
            window.location.reload();
        },
        error: function (error) {
            console.error('Error:', error);
            alert('Successfully inserted!');
            // window.location.reload();
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
        const family_id = entry.querySelector(`#child${index + 1}-family-id`)?.value || family_id_initial || '';
        console.log(`child${index + 1}-family-id`,'child${index + 1}-family-id ');
        console.log(family_id,'family_id child unmarried');
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
       
        var fieldsToCheck = [
            child_name, child_age, child_dob, child_mobile, child_relation, child_qualification, 
            child_other_qualification, child_marriage_stage, child_blood_group, child_occupation, 
            child_other_occupation, castCertificate
        ];
        console.log(fieldsToCheck,'fieldsToCheck');
       var arr = []
       var fieldarr =[]
        for (var field of fieldsToCheck) {
            console.log(field,'field');
            var language = detectLanguage(field);
            console.log(language,'language');
            arr.push(language);
            fieldarr.push(field);
           
        }
        console.log(fieldarr,'fieldarr');
        console.log( arr,'arr');
        if(arr.includes('English')){
                alert('You Should Fill The Form In Hindi');
                return;
            }
       var url = 'http://192.168.1.10:8000/api/family-details/';
     
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
        data.append('marrieged', '0'); 
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            headers: headers,
            processData: false,
            contentType: false,
            success: function(result) {
                console.log('Success:', result);
                if (index === childrenEntries.length - 1) {
                    alert('Successfully inserted!');
                }
            },
            error: function(error) {
                console.error('Error:', error);
                alert('Successfully inserted!');
                // window.location.reload();
            }
        });
    });
}
function update(event) {
    const childId = event.target.dataset.childId;
    console.log('Child ID:', childId);
    
    const familyId = $(`#child${childId}-family-id`).val();
    console.log('Family ID:', familyId);
    
    const familyMemberId = $(`#child${childId}-family-member-id`).val();
    console.log('Family Member ID:', familyMemberId);

    if (!childId || !familyId || !familyMemberId) {
        console.error('Child ID, Family ID, or Family Member ID is undefined.');
        return;
    }

    const url = `http://192.168.1.10:8000/api/family-details/${familyId}`;
    console.log('URL:', url);
    var token = localStorage.getItem('token');
    console.log('token',token);
      var headers = {
          'Authorization': 'Bearer ' + token
      };
    // Create a FormData object
    var formData = new FormData();
    formData.append('child_id', childId); // Child ID
    formData.append('family_id', familyId); // Family ID
    formData.append('family_member_id', familyMemberId); // Family Member ID
    formData.append('name', $(`#child${childId}-name`).val());
    formData.append('age', $(`#child${childId}-age`).val());
    formData.append('dob', $(`#child${childId}-dob`).val());
    formData.append('mobile_number', $(`#child${childId}-mobile`).val());
    formData.append('relation', $(`#child${childId}-relation`).val());
    formData.append('qualification', $(`#child${childId}-qualification`).val());
    formData.append('other_qualification', $(`#childother${childId}-qualification`).val());
    formData.append('marriage_stage', $(`#child${childId}-marriage-stage`).val());
    formData.append('blood_group', $(`#child${childId}-blood-group`).val());
    formData.append('occupation', $(`#child${childId}-occupation`).val());
    formData.append('occupation_type', $(`#childother${childId}-occupation`).val());
    formData.append('cast_certificate', $(`input[name='role${childId}']:checked`).val());
    formData.append('_method', 'put');
    formData.append('marrieged', '0'); 
    const imageInput = $(`#child${childId}-file`)[0];
    if (imageInput && imageInput.files.length > 0) {
        for (let i = 0; i < imageInput.files.length; i++) {
            formData.append('self_image', imageInput.files[i]);
        }
    }

    // Send POST request using AJAX with FormData
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        headers: headers,
        contentType: false,  // Not setting contentType: 'application/json'
        processData: false,  // Not processing data
        success: function(data) {
            console.log('Update successful:', data);
            updateImageDisplay(childId, data.self_image);
            alert('Successfully Updated..!')
        },
        error: function(xhr, status, error) {
            console.error('Error updating data:', error);
            alert('Successfully Updated..!')
            window.location.reload();
        }
    });
}

function updateImageDisplay(childId, imageUrl) {
    $(`#child${childId}-image`).empty();
    if (imageUrl) {
        var newCard = `
            <div class="col-12 col-md-4 col-lg-4 position-relative" style="left:-10px;">
                <div class="upload__img-close_button" onclick="removeImage(this);"></div>
                <div class="brand-main d-flex box-shadow text-center ">
                    <a class="weblink text-decoration-none text-dark" title="Image" style="display: flex; align-items: center; justify-content: center; height: 100%; width: 100%;">
                        <img class="img-fluid" src="${imageUrl}" alt="Image" style="max-height: 100%; max-width: 100%;">
                    </a>
                </div>
            </div>
        `;
        $(`#child${childId}-image`).append(newCard);
    }
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
        const married_child_nmber_id = $('#married-child-numner-id').val();
        // Fetch the values from the form inputs
        const family_id = entry.querySelector(`#married-child-family-id-${index + 1}`)?.value || family_id_initial || '';
        const child_name = entry.querySelector(`#married_child${index + 1}-name`)?.value || '';
        const child_address = entry.querySelector(`#married_child${index + 1}-address`)?.value || '';
        const child_married_child_nmber_id = entry.querySelector(`#married-child-number-id-${index + 1}`)?.value || married_child_nmber_id || '';
        const family_member_id = 4; 

        var fieldsToCheck = [
             child_name, child_address, child_married_child_nmber_id,
           
        ];
       var arr = []
       var fieldarr =[]
        for (var field of fieldsToCheck) {
            var language = detectLanguage(field);
            console.log(language,'language');
            arr.push(language);
            fieldarr.push(field);
           
        }
        console.log(fieldarr,'fieldarr');
        console.log( arr,'arr');
        if(arr.includes('English')){
                alert('You Should Fill The Form In Hindi');
                return;
            }
        
        const imageInput = entry.querySelector('.upload__inputfile');
        if (imageInput && imageInput.files.length > 0) {
            for (let i = 0; i < imageInput.files.length; i++) {
                data.append('self_image', imageInput.files[i]);
            }
        }
        data.append('family_id', family_id);
        data.append('family_member_id', family_member_id);
        data.append('name', child_name);
        data.append('married_child_address', child_address);
        data.append('married_child_id', child_married_child_nmber_id);
        data.append('marrieged', '1'); 
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

function marriedupdate(event) {
    const marriedChildId = event.target.dataset.marriedChildId;
    console.log('Married Child ID:', marriedChildId);

    if (!marriedChildId) {
        console.error('Married Child ID is undefined.');
        return;
    }

    const familyId = $(`#married_child${marriedChildId}-family-id`).val();
    console.log('Family ID:', familyId);

    const familyMemberId = 4; // Assuming this is always 4 for married children
    console.log('Family Member ID:', familyMemberId);

    if (!familyId || !familyMemberId) {
        console.error('Family ID or Family Member ID is undefined.');
        return;
    }
    const url = `http://192.168.1.10:8000/api/family-details/${familyId}`;
    console.log('URL:', url);

    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };
    var formData = new FormData();
    formData.append('child_id', marriedChildId);
    formData.append('family_id', familyId);
    formData.append('family_member_id', familyMemberId);
    formData.append('name', $(`#married_child${marriedChildId}-name`).val() || '');
    formData.append('married_child_address', $(`#married_child${marriedChildId}-address`).val() || '');
    formData.append('married_child_id', $(`#married_child${marriedChildId}-number-id`).val() || '');
    formData.append('_method', 'put');
    formData.append('marrieged', '1'); 

    const imageInput = $(`#married_child${marriedChildId}-file`)[0];
    if (imageInput && imageInput.files.length > 0) {
        for (let i = 0; i < imageInput.files.length; i++) {
            formData.append('self_image', imageInput.files[i]);
        }
    }
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        headers: headers,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log('Update successful:', data);
            alert('Successfully Updated..!');
            marriedupdateImageDisplay(marriedChildId, data.self_image); // Update image display if applicable
        },
        error: function(xhr, status, error) {
            console.error('Error updating married child:', error);
            alert('Update failed. Please try again.');
            // window.location.reload();
        }
    });
}


function marriedupdateImageDisplay(marriedChild, imageUrl) {
    $(`#marriedchild${marriedChild.id}`).empty();
    if (imageUrl) {
        var newCard = `
            <div class="col-12 col-md-4 col-lg-4 position-relative" style="left:-10px;">
                <div class="upload__img-close_button" onclick="removeImage(this);"></div>
                <div class="brand-main d-flex box-shadow text-center ">
                    <a class="weblink text-decoration-none text-dark" title="Image" style="display: flex; align-items: center; justify-content: center; height: 100%; width: 100%;">
                        <img class="img-fluid" src="${imageUrl}" alt="Image" style="max-height: 100%; max-width: 100%;">
                    </a>
                </div>
            </div>
        `;
        $(`#marriedchild${marriedChild.id}`).append(newCard);
    }
} 
// Image Upload DIv
jQuery(document).ready(function () {
    ImgUpload();
});

function ImgUpload() {
    $('.upload__inputfile').each(function () {
        var imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var imgPreview = imgWrap.find('.upload__img-box'); // Existing image preview container

        $(this).on('change', function (e) {
            var files = e.target.files;
            var file = files[0]; // Only consider the first selected file

            if (!file.type.match('image.*')) {
                return; // Ignore non-image files
            }

            // Clear previous image preview if exists
            imgPreview.remove();

            var reader = new FileReader();
            reader.onload = function (e) {
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-file='" + file.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.html(html); // Replace existing content with new image preview
            };
            reader.readAsDataURL(file);
        });
    });

    // Handle removing uploaded image
    $('body').on('click', ".upload__img-close", function (e) {
        var file = $(this).parent().data("file");
        $(this).closest('.upload__img-box').remove(); // Remove the image preview container

        // Reset the file input field (optional)
        var input = $(this).closest('.upload__box').find('.upload__inputfile');
        input.val(''); // Clear the file input value to allow selecting the same file again (if needed)
    });
}

