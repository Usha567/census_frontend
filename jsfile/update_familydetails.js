
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
                family.familymemberdetails.forEach((member, index)  => {
                    if (member.family_member_id === 1) {
                        
                        // Male Chief Data
                        $('#numner_id').val(member.id);
                        $('#family_id').val(member.family_id);
                        $('#family_member_id').val(member.family_member_id);
                        $('#husband_name').val(member.name);
                        $('#husband_mother_name').val(member.mother_name);
                        $('#husband_father_name').val(member.father_name);
                        $('#husband_father_surname').val(member.father_surname);
                        $('#husband_father_id').val(member.father_id);
                        $('#husband_age').val(member.age);
                        $('#husband_dob').val(member.dob);
                        $('#husband_mobile').val(member.mobile_number);
                        $('#husband_relation').val(member.relation);
                        $('#husband_qualification').val(member.qualification);
                        $('#husband_marriage_type').val(member.marriage_type);
                        $('#husband_marital_status').val(member.marital_status);
                        $('#husband_blood_group').val(member.blood_group);
                        $('#husband_total_kids').val(member.total_kids);
                        $('#husband_sons').val(member.sons);
                        $('#husband_daughters').val(member.daughters);
                        $('#husband_occupation').val(member.occupation);
                        $('.other-occupation-group').show();
                        // if (member.occupation === 'Other') {
                        //     $('#husband_occupation_type').val(member.occupation_type);
                        // } else {
                        //     $('#husband_occupation_type').val('');
                        // }
                        if (member.cast_certificate === 'yes') {
                            $('#Yes').prop('checked', true);
                            $('#No').prop('checked', false);
                        } else {
                            $('#Yes').prop('checked', false);
                            $('#No').prop('checked', true);
                        }
                        if (member.qualification === 'Other') {
                            $('.other-qualification-group').show();
                            $('#husband_other_qualification').val(member.other_qualification);
                        } else {
                            $('.other-qualification-group').hide();
                        }
                        $("#selectedImagesContainer").empty();
                            if (member.self_image) {
                                var imageUrl = 'http://192.168.1.10:8000/uploads/family_member_image/' + member.self_image.trim();
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
                                $("#selectedImagesContainer").append(newCard);
                            }
                        }else if (member.family_member_id === 2) {
                        $('#female_family_member_id').val(member.family_member_id);
                        $('#wife_name').val(member.name);
                        $('#wife_mother_name').val(member.mother_name);
                        $('#wife_father_name').val(member.father_name);
                        $('#wife_father_surname').val(member.father_surname);
                        $('#wife_father_id').val(member.father_id);
                        $('#wife_age').val(member.age);
                        $('#wife_dob').val(member.dob);
                        $('#wife_mobile').val(member.mobile_number);
                        $('#wife_relation').val(member.relation);
                        $('#wife_qualification').val(member.qualification);
                        $('#wife_marriage_type').val(member.marriage_type);
                        $('#wife_marital_status').val(member.marital_status);
                        $('#wife_blood_group').val(member.blood_group);
                        $('#wife_total_kids').val(member.total_kids);
                        $('#wife_sons').val(member.sons);
                        $('#wife_daughters').val(member.daughters);
                        $('#wife_occupation').val(member.occupation);
                        if (member.cast_certificate === 'yes') {
                            $('#Yes_wife').prop('checked', true);
                            $('#No_wife').prop('checked', false);
                        } else {
                            $('#Yes_wife').prop('checked', false);
                            $('#No_wife').prop('checked', true);
                        }
                        if (member.qualification === 'Other') {
                            $('.other-qualification-group').show();
                            $('#wife_other_qualification').val(member.other_qualification);
                        } else {
                            $('.other-qualification-group').hide();
                        }
                        if (member.occupation === 'Other') {
                            $('.other-occupation-group').show();
                            $('#wife_occupation_type').val(member.occupation_type);
                        } else {
                            $('.other-occupation-group').hide();
                        }
                        $("#FemaleChiefImage").empty();
                            if (member.self_image) {
                                var imageUrl = 'http://192.168.1.10:8000/uploads/family_member_image/' + member.self_image.trim();
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
                                $("#FemaleChiefImage").append(newCard);
                            }
                    }else if (member.family_member_id === 3 && index === 0) {
                        populateFirstChild(member); 
                    } else if (member.family_member_id === 3 && index > 0) {
                        addNewChild(member); 
                    }
                    else if (member.family_member_id === 4 && index === 0) {
                        // Populate Initial Married Child Data
                        populateInitialMarriedChild(member);
                    } else if (member.family_member_id === 4 && index > 0) {
                        // Add New Married Child Data
                        addNewMarriedChild(member);
                    }
                });

                // After populating all data, show the #children-section
                $('#children-section').show();
                $('#married_children-section').show();
            } else {
                console.error('No family data found.');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}
function removeImage(element) {
    $(element).closest('.col-12').remove();
}
function populateFirstChild(member) {
    $('#child1-name').val(member.name);

}

// Function to add a new child dynamically
function addNewChild(member) {
    const childEntry = document.createElement('div');
    childEntry.className = 'child-entry mb-3';
    childEntry.id = `child-${member.id}`; // Assuming member.id can uniquely identify each child

    childEntry.innerHTML = `
        <h5>Child ${member.name}</h5>
        <div class="row">
           
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child$${member.id}-family-id">Family ID</label>
                    <input type="text" class="form-control" id="child$${member.id}-family-id" value="${member.family_id}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child$${member.id}-family-member-id">Family Member ID</label>
                    <select class="form-control" id="child$${member.id}-family-member-id" value="${member.family_member_id}">
                        <option selected disabled value>Select Marital Status</option>
                        <option value="1" disabled>1-Male Chief</option>
                        <option value="2" disabled>2-Female Chief</option>
                        <option value="3">3-Unmarried Children</option>
                        <option value="4" disabled>4-Married Children</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-name">Name</label>
                    <input type="text" class="form-control" id="child${member.id}-name" value="${member.name}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-age">Age</label>
                    <input type="number" class="form-control" id="child${member.id}-age" value="${member.age}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-dob">Date of Birth</label>
                    <input type="date" class="form-control" id="child${member.id}-dob" value="${member.dob}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-mobile">Mobile Number</label>
                    <input type="tel" class="form-control" id="child${member.id}-mobile" value="${member.mobile_number}">
                </div>
            </div>
             <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-relation">Relation with Head of Family</label>
                     <select class="form-control" id="child${member.id}-relation">
                        <option value="" disabled>Select Relation</option>
                        <option value="Son" ${member.relation === 'Son' ? 'selected' : ''}>Son</option>
                        <option value="Daughter" ${member.relation === 'Daughter' ? 'selected' : ''}>Daughter</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-qualification">Qualification</label>
                    <select class="form-control" id="child${member.id}-qualification">
                        <option value="" disabled>Select Qualification</option>
                        <option value="Primary" ${member.qualification === 'Primary' ? 'selected' : ''}>Primary</option>
                        <option value="Secondary" ${member.qualification === 'Secondary' ? 'selected' : ''}>Secondary</option>
                        <option value="Higher Secondary" ${member.qualification === 'Higher Secondary' ? 'selected' : ''}>Higher Secondary</option>
                        <option value="Graduate" ${member.qualification === 'Graduate' ? 'selected' : ''}>Graduate</option>
                        <option value="Post Graduate" ${member.qualification === 'Post Graduate' ? 'selected' : ''}>Post Graduate</option>
                        <option value="Bachelor of Arts (B.A.)" ${member.qualification === 'Bachelor of Arts (B.A.)' ? 'selected' : ''}>Bachelor of Arts (B.A.)</option>
                        <option value="Bachelor of Science (B.Sc.)" ${member.qualification === 'Bachelor of Science (B.Sc.)' ? 'selected' : ''}>Bachelor of Science (B.Sc.)</option>
                        <option value="Bachelor of Commerce (B.Com.)" ${member.qualification === 'Bachelor of Commerce (B.Com.)' ? 'selected' : ''}>Bachelor of Commerce (B.Com.)</option>
                        <option value="Bachelor of Engineering (B.E.)" ${member.qualification === 'Bachelor of Engineering (B.E.)' ? 'selected' : ''}>Bachelor of Engineering (B.E.)</option>
                        <option value="Bachelor of Technology (B.Tech.)" ${member.qualification === 'Bachelor of Technology (B.Tech.)' ? 'selected' : ''}>Bachelor of Technology (B.Tech.)</option>
                        <option value="Bachelor of Medicine, Bachelor of Surgery (MBBS)" ${member.qualification === 'Bachelor of Medicine, Bachelor of Surgery (MBBS)' ? 'selected' : ''}>Bachelor of Medicine, Bachelor of Surgery (MBBS)</option>
                        <option value="Bachelor of Dental Surgery (BDS)" ${member.qualification === 'Bachelor of Dental Surgery (BDS)' ? 'selected' : ''}>Bachelor of Dental Surgery (BDS)</option>
                        <option value="Bachelor of Pharmacy (B.Pharm)" ${member.qualification === 'Bachelor of Pharmacy (B.Pharm)' ? 'selected' : ''}>Bachelor of Pharmacy (B.Pharm)</option>
                        <option value="Bachelor of Architecture (B.Arch)" ${member.qualification === 'Bachelor of Architecture (B.Arch)' ? 'selected' : ''}>Bachelor of Architecture (B.Arch)</option>
                        <option value="Bachelor of Business Administration (BBA)" ${member.qualification === 'Bachelor of Business Administration (BBA)' ? 'selected' : ''}>Bachelor of Business Administration (BBA)</option>
                        <option value="Bachelor of Computer Applications (BCA)" ${member.qualification === 'Bachelor of Computer Applications (BCA)' ? 'selected' : ''}>Bachelor of Computer Applications (BCA)</option>
                        <option value="Bachelor of Laws (LLB)" ${member.qualification === 'Bachelor of Laws (LLB)' ? 'selected' : ''}>Bachelor of Laws (LLB)</option>
                        <option value="Bachelor of Education (B.Ed)" ${member.qualification === 'Bachelor of Education (B.Ed)' ? 'selected' : ''}>Bachelor of Education (B.Ed)</option>
                        <option value="Bachelor of Fine Arts (BFA)" ${member.qualification === 'Bachelor of Fine Arts (BFA)' ? 'selected' : ''}>Bachelor of Fine Arts (BFA)</option>
                        <option value="Bachelor of Social Work (BSW)" ${member.qualification === 'Bachelor of Social Work (BSW)' ? 'selected' : ''}>Bachelor of Social Work (BSW)</option>
                        <option value="Bachelor of Hotel Management (BHM)" ${member.qualification === 'Bachelor of Hotel Management (BHM)' ? 'selected' : ''}>Bachelor of Hotel Management (BHM)</option>
                        <option value="Bachelor of Physiotherapy (BPT)" ${member.qualification === 'Bachelor of Physiotherapy (BPT)' ? 'selected' : ''}>Bachelor of Physiotherapy (BPT)</option>
                        <option value="Bachelor of Veterinary Science (BVSc)" ${member.qualification === 'Bachelor of Veterinary Science (BVSc)' ? 'selected' : ''}>Bachelor of Veterinary Science (BVSc)</option>
                        <option value="Bachelor of Design (B.Des)" ${member.qualification === 'Bachelor of Design (B.Des)' ? 'selected' : ''}>Bachelor of Design (B.Des)</option>
                        <option value="Master of Arts (M.A.)" ${member.qualification === 'Master of Arts (M.A.)' ? 'selected' : ''}>Master of Arts (M.A.)</option>
                        <option value="Master of Science (M.Sc.)" ${member.qualification === 'Master of Science (M.Sc.)' ? 'selected' : ''}>Master of Science (M.Sc.)</option>
                        <option value="Master of Commerce (M.Com.)" ${member.qualification === 'Master of Commerce (M.Com.)' ? 'selected' : ''}>Master of Commerce (M.Com.)</option>
                        <option value="Master of Engineering (M.E.)" ${member.qualification === 'Master of Engineering (M.E.)' ? 'selected' : ''}>Master of Engineering (M.E.)</option>
                        <option value="Master of Technology (M.Tech.)" ${member.qualification === 'Master of Technology (M.Tech.)' ? 'selected' : ''}>Master of Technology (M.Tech.)</option>
                        <option value="Master of Business Administration (MBA)" ${member.qualification === 'Master of Business Administration (MBA)' ? 'selected' : ''}>Master of Business Administration (MBA)</option>
                        <option value="Master of Computer Applications (MCA)" ${member.qualification === 'Master of Computer Applications (MCA)' ? 'selected' : ''}>Master of Computer Applications (MCA)</option>
                        <option value="Master of Laws (LLM)" ${member.qualification === 'Master of Laws (LLM)' ? 'selected' : ''}>Master of Laws (LLM)</option>
                        <option value="Master of Education (M.Ed)" ${member.qualification === 'Master of Education (M.Ed)' ? 'selected' : ''}>Master of Education (M.Ed)</option>
                        <option value="Master of Fine Arts (MFA)" ${member.qualification === 'Master of Fine Arts (MFA)' ? 'selected' : ''}>Master of Fine Arts (MFA)</option>
                        <option value="Master of Social Work (MSW)" ${member.qualification === 'Master of Social Work (MSW)' ? 'selected' : ''}>Master of Social Work (MSW)</option>
                        <option value="Master of Hospital Administration (MHA)" ${member.qualification === 'Master of Hospital Administration (MHA)' ? 'selected' : ''}>Master of Hospital Administration (MHA)</option>
                        <option value="Master of Public Health (MPH)" ${member.qualification === 'Master of Public Health (MPH)' ? 'selected' : ''}>Master of Public Health (MPH)</option>
                        <option value="Master of Pharmacy (M.Pharm)" ${member.qualification === 'Master of Pharmacy (M.Pharm)' ? 'selected' : ''}>Master of Pharmacy (M.Pharm)</option>
                        <option value="Master of Design (M.Des)" ${member.qualification === 'Master of Design (M.Des)' ? 'selected' : ''} >Master of Design (M.Des)</option>
                        <option value="Master of Veterinary Science (MVSc)" ${member.qualification === 'Master of Veterinary Science (MVSc)' ? 'selected' : ''}>Master of Veterinary Science (MVSc)</option>
                        <option value="Master of Physiotherapy (MPT)" ${member.qualification === 'Master of Physiotherapy (MPT)' ? 'selected' : ''}>Master of Physiotherapy (MPT)</option>
                        <option value="Doctor of Philosophy (Ph.D.)" ${member.qualification === 'Doctor of Philosophy (Ph.D.)' ? 'selected' : ''}>Doctor of Philosophy (Ph.D.)</option>
                        <option value="Doctor of Medicine (MD)" ${member.qualification === 'Doctor of Medicine (MD)' ? 'selected' : ''}>Doctor of Medicine (MD)</option>
                        <option value="Doctor of Dental Surgery (DDS)" ${member.qualification === 'Doctor of Dental Surgery (DDS)' ? 'selected' : ''}>Doctor of Dental Surgery (DDS)</option>
                        <option value="Doctor of Veterinary Medicine (DVM)" ${member.qualification === 'Doctor of Veterinary Medicine (DVM)' ? 'selected' : ''}>Doctor of Veterinary Medicine (DVM)</option>
                        <option value="Diploma in Engineering" ${member.qualification === 'Diploma in Engineering' ? 'selected' : ''}>Diploma in Engineering</option>
                        <option value="Diploma in Pharmacy" ${member.qualification === 'Diploma in Pharmacy' ? 'selected' : ''}>Diploma in Pharmacy</option>
                        <option value="Diploma in Education (D.Ed)" ${member.qualification === 'Diploma in Education (D.Ed)' ? 'selected' : ''}>Diploma in Education (D.Ed)</option>
                        <option value="Postgraduate Diploma in Management (PGDM)" ${member.qualification === 'Postgraduate Diploma in Management (PGDM)' ? 'selected' : ''}>Postgraduate Diploma in Management (PGDM)</option>
                        <option value="Certificate in Digital Marketing" ${member.qualification === 'Certificate in Digital Marketing' ? 'selected' : ''}>Certificate in Digital Marketing</option>
                        <option value="Certificate in Data Science" ${member.qualification === 'Certificate in Data Science' ? 'selected' : ''}>Certificate in Data Science</option>
                        <option value="Certificate in Graphic Design" ${member.qualification === 'Certificate in Graphic Design' ? 'selected' : ''}>Certificate in Graphic Design</option>
                        <option value="Other" ${member.qualification === 'Other' ? 'selected' : ''}>Other</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> 
                <div class="form-group">
                    <label for="childother${member.id}-qualification">Other Qualification</label>
                    <input type="text" class="form-control other-qualification" id="childother${member.id}-qualification" placeholder="Enter your qualification" value="${member.other_qualification}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-marriage-stage">Marriage Stage</label>
                    <select class="form-control" id="child${member.id}-marriage-stage">
                        <option value="" disabled>Select Marriage Stage</option>
                        <option value="Unmarried" ${member.marriage_stage === 'Unmarried' ? 'selected' : ''}>Unmarried</option>
                        <option value="Tika" ${member.marriage_stage === 'Tika' ? 'selected' : ''}>Tika</option>
                        <option value="Engaged" ${member.marriage_stage === 'Engaged' ? 'selected' : ''}>Engaged</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-blood-group">Blood Group</label>
                   <select class="form-control" id="child${member.id}-blood-group">
                        <option value="" disabled>Select Blood Group</option>
                        <option value="A+" ${member.blood_group === 'A+' ? 'selected' : ''}>A+</option>
                        <option value="A-" ${member.blood_group === 'A-' ? 'selected' : ''}>A-</option>
                        <option value="B+" ${member.blood_group === 'B+' ? 'selected' : ''}>B+</option>
                        <option value="B-" ${member.blood_group === 'B-' ? 'selected' : ''}>B-</option>
                        <option value="AB+" ${member.blood_group === 'AB+' ? 'selected' : ''}>AB+</option>
                        <option value="AB-" ${member.blood_group === 'AB-' ? 'selected' : ''}>AB-</option>
                        <option value="O+" ${member.blood_group === 'O-' ? 'selected' : ''}>O+</option>
                        <option value="O-" ${member.blood_group === 'O-' ? 'selected' : ''}>O-</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-occupation">Occupation</label>
                     <select class="form-control" id="child${member.id}-occupation">
                        <option value="" disabled>Select Occupation</option>
                        <option value="Business" ${member.occupation === 'Business' ? 'selected' : ''}>Business</option>
                        <option value="Government Job" ${member.occupation === 'Government Job' ? 'selected' : ''}>Government Job</option>
                        <option value="Pension" ${member.occupation === 'Pension' ? 'selected' : ''}>Pension</option>
                        <option value="Farming" ${member.occupation === 'Farming' ? 'selected' : ''}>Farming</option>
                        <option value="Private Job" ${member.occupation === 'Private Job' ? 'selected' : ''}>Private Job</option>
                        <option value="Ferry" ${member.occupation === 'Ferry' ? 'selected' : ''}>Ferry</option>
                        <option value="Labour" ${member.occupation === 'Labour' ? 'selected' : ''}>Labour</option>
                        <option value="Student" ${member.occupation === 'Student' ? 'selected' : ''}>Student</option>
                        <option value="Other" ${member.occupation === 'Other' ? 'selected' : ''}>Other</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;"> 
                <div class="form-group">
                    <label for="childother${member.id}-occupation">Other Occupation</label>
                    <input type="text" class="form-control other-occupation" id="childother${member.id}-occupation" placeholder="Enter your occupation"value="${member.occupation_type}">
                </div>
            </div>
           <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <label for="">Cast Certificate</label>
                <div class="input-group role-group mt-1">
                    <div class="form-check">
                        <input type="radio" id="Yes${member.id}" name="role${member.id}" value="yes" class="form-check-input" ${member.cast_certificate === 'Yes' ? 'checked' : ''}>
                        <label for="Yes${member.id}" class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="No${member.id}" name="role${member.id}" value="no" class="form-check-input" ${member.cast_certificate === 'No' ? 'checked' : ''}>
                        <label for="No${member.id}" class="form-check-label">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label>
                            <p class="upload__btn bg-info w-25">Upload images</p>
                            <input type="file" multiple data-max_length="3" class="uploadProfileInput upload__inputfile" id="child${member.id}-file" name="_file">
                        </label>
                    </div>
                    <div class="col-sm-12">
                        <div class="upload__img-wrap" id="child${member.id}-image" style="display:flex; flex-wrap:wrap;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    $('#children-entries').append(childEntry);
    ImgUpload();
    $(`#child${member.id}-image`).empty();
        if (member.self_image) {
            var imageUrl = 'http://192.168.1.10:8000/uploads/family_member_image/' + member.self_image.trim();
            console.log(imageUrl,'rsdtrytuyiuoi');
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
            $(`#child${member.id}-image`).append(newCard);
        }
                       
                           
}



function populateInitialMarriedChild(marriedChild) {
    $('#married_child1-name').val(marriedChild.name);
    $('#married-child-number-id').val(marriedChild.id_number);
    $('#married-child-family-id').val(marriedChild.family_id);
    // Populate additional fields for initial married child as needed
}

function addNewMarriedChild(marriedChild) {
    const marriedChildEntry = document.createElement('div');
    marriedChildEntry.className = 'married-child-entry mb-3';
    marriedChildEntry.id = `married_child-${marriedChild.id}`; // Assuming marriedChild.id can uniquely identify each married child

    marriedChildEntry.innerHTML = `
        <h5>Married Child ${marriedChild.name}</h5>
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child$${marriedChild.id}-family-id">Family ID</label>
                    <input type="text" class="form-control" id="child$${marriedChild.id}-family-id" value="${marriedChild.family_id}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child$${marriedChild.id}-family-member-id">Family Member ID</label>
                    <select class="form-control" id="child$${marriedChild.id}-family-member-id" value="${marriedChild.family_member_id}">
                        <option selected disabled value>Select Marital Status</option>
                        <option value="1" disabled>1-Male Chief</option>
                        <option value="2" disabled>2-Female Chief</option>
                        <option value="3" disabled>3-Unmarried Children</option>
                        <option value="4">4-Married Children</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="married_child${marriedChild.id}-name">Name</label>
                    <input type="text" class="form-control" id="married_child${marriedChild.id}-name" value="${marriedChild.name}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="married-child${marriedChild.id}-number-id">ID Number</label>
                    <input type="text" class="form-control" id="married-child${marriedChild.id}-number-id" value="${marriedChild.married_child_id}" >
                </div>
                <div class="form-group" hidden>
                    <label for="married-child${marriedChild.id}-family-id">Family ID</label>
                    <input type="text" class="form-control" id="married-child${marriedChild.id}-family-id" value="${marriedChild.family_id}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label>
                            <p class="upload__btn bg-info w-25">Upload images</p>
                            <input type="file" multiple data-max_length="1" class="upload__inputfile" id="married-child${marriedChild.id}-file" name="_file">
                        </label>
                    </div>
                    <div class="col-sm-12">
                        <div class="upload__img-wrap" id="marriedchild${marriedChild.id}" style="display:flex; flex-wrap:wrap;"></div>
                    </div>
                </div>
            </div>
        </div>
    `;
    $('#married_children-entries').append(marriedChildEntry);
   
    $(`#marriedchild${marriedChild.id}`).empty();
        if (marriedChild.self_image) {
            var imageUrl = 'http://192.168.1.10:8000/uploads/family_member_image/' + marriedChild.self_image.trim();
            console.log(imageUrl,'rsdtrytuyiuoi');
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
getFamilyDetail();


