
$(document).ready(function() {
    $('.occupation-select').change(function() {
        var selectedOccupation = $(this).val();
        if (selectedOccupation) { // Check if an option is selected
            $('.other-occupation-group').show(); // Show the input field
        } else {
            $('.other-occupation-group').hide(); // Hide the input field if no option is selected
            $('.other-occupation').val(''); // Clear the input field value
        }
    });
});
    $(document).ready(function() {
    $('.husband-qualification').change(function() {
      var selectedQualification = $(this).val();
      if (selectedQualification === 'Other') {
        $('.other-qualification-group').show(); // Show the input field
      } else {
        $('.other-qualification-group').hide(); // Hide the input field
        $('.other-qualification').val(''); // Clear the input field value
      }
    });
  });

  $(document).ready(function() {
  let childCount = 1;
  const maxChildren = 10;
  
  function toggleSection(sectionId, toggleIconId) {
      const section = document.getElementById(sectionId);
      const toggleIcon = document.getElementById(toggleIconId);
      if (section.style.display === "none") {
          section.style.display = "block";
          toggleIcon.textContent = "-";
      } else {
          section.style.display = "none";
          toggleIcon.textContent = "+";
      }
  }
  
  function addChild() {
      if (childCount >= maxChildren) {
          alert("You can only add up to 10 children.");
          return;
      }
      childCount++;
      const childrenEntries = document.getElementById('children-entries');
      const addChildButton = document.querySelector('#children-section button.btn-info'); // Select the "Add Child" button
      const newChildEntry = document.createElement('div');
      newChildEntry.className = 'child-entry mb-3';
      newChildEntry.id = `child-${childCount}`;
      newChildEntry.innerHTML = `
          <h5>Child ${childCount}</h5>
          <div class="row">
              <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                      <label for="child${childCount}-name">Name</label>
                      <input type="text" class="form-control" id="child${childCount}-name">
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                      <label for="child${childCount}-age">Age</label>
                      <input type="number" class="form-control" id="child${childCount}-age">
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                      <label for="child${childCount}-dob">Date of Birth</label>
                      <input type="date" class="form-control" id="child${childCount}-dob">
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                      <label for="child${childCount}-mobile">Mobile Number</label>
                      <input type="tel" class="form-control" id="child${childCount}-mobile">
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                      <label for="child${childCount}-relation">Relation with Head of Family</label>
                      <select class="form-control" id="child${childCount}-relation">
                          <option selected disabled value>Select Relation</option>
                          <option>Son</option>
                          <option>Daughter</option>
                      </select>
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                      <label for="child${childCount}-qualification">Qualification</label>
                      <select class="form-control" id="child${childCount}-qualification">
                          <option selected disabled value>Select Qualification</option>
                          <option value="Primary">Primary</option>
                          <option value="Secondary">Secondary</option>
                          <option value="Higher Secondary">Higher Secondary</option>
                          <option value="Graduate">Graduate</option>
                          <option value="Post Graduate">Post Graduate</option>
                          <option value="Bachelor of Arts (B.A.)">Bachelor of Arts (B.A.)</option>
                          <option value="Bachelor of Science (B.Sc.)">Bachelor of Science (B.Sc.)</option>
                          <option value="Bachelor of Commerce (B.Com.)">Bachelor of Commerce (B.Com.)</option>
                          <option value="Bachelor of Engineering (B.E.)">Bachelor of Engineering (B.E.)</option>
                          <option value="Bachelor of Technology (B.Tech.)">Bachelor of Technology (B.Tech.)</option>
                          <option value="Bachelor of Medicine, Bachelor of Surgery (MBBS)">Bachelor of Medicine, Bachelor of Surgery (MBBS)</option>
                          <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
                          <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
                          <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
                          <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                          <option value="Bachelor of Computer Applications (BCA)">Bachelor of Computer Applications (BCA)</option>
                          <option value="Bachelor of Laws (LLB)">Bachelor of Laws (LLB)</option>
                          <option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
                          <option value="Bachelor of Fine Arts (BFA)">Bachelor of Fine Arts (BFA)</option>
                          <option value="Bachelor of Social Work (BSW)">Bachelor of Social Work (BSW)</option>
                          <option value="Bachelor of Hotel Management (BHM)">Bachelor of Hotel Management (BHM)</option>
                          <option value="Bachelor of Physiotherapy (BPT)">Bachelor of Physiotherapy (BPT)</option>
                          <option value="Bachelor of Veterinary Science (BVSc)">Bachelor of Veterinary Science (BVSc)</option>
                          <option value="Bachelor of Design (B.Des)">Bachelor of Design (B.Des)</option>
                          <option value="Master of Arts (M.A.)">Master of Arts (M.A.)</option>
                          <option value="Master of Science (M.Sc.)">Master of Science (M.Sc.)</option>
                          <option value="Master of Commerce (M.Com.)">Master of Commerce (M.Com.)</option>
                          <option value="Master of Engineering (M.E.)">Master of Engineering (M.E.)</option>
                          <option value="Master of Technology (M.Tech.)">Master of Technology (M.Tech.)</option>
                          <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
                          <option value="Master of Computer Applications (MCA)">Master of Computer Applications (MCA)</option>
                          <option value="Master of Laws (LLM)">Master of Laws (LLM)</option>
                          <option value="Master of Education (M.Ed)">Master of Education (M.Ed)</option>
                          <option value="Master of Fine Arts (MFA)">Master of Fine Arts (MFA)</option>
                          <option value="Master of Social Work (MSW)">Master of Social Work (MSW)</option>
                          <option value="Master of Hospital Administration (MHA)">Master of Hospital Administration (MHA)</option>
                          <option value="Master of Public Health (MPH)">Master of Public Health (MPH)</option>
                          <option value="Master of Pharmacy (M.Pharm)">Master of Pharmacy (M.Pharm)</option>
                          <option value="Master of Design (M.Des)">Master of Design (M.Des)</option>
                          <option value="Master of Veterinary Science (MVSc)">Master of Veterinary Science (MVSc)</option>
                          <option value="Master of Physiotherapy (MPT)">Master of Physiotherapy (MPT)</option>
                          <option value="Doctor of Philosophy (Ph.D.)">Doctor of Philosophy (Ph.D.)</option>
                          <option value="Doctor of Medicine (MD)">Doctor of Medicine (MD)</option>
                          <option value="Doctor of Dental Surgery (DDS)">Doctor of Dental Surgery (DDS)</option>
                          <option value="Doctor of Veterinary Medicine (DVM)">Doctor of Veterinary Medicine (DVM)</option>
                          <option value="Diploma in Engineering">Diploma in Engineering</option>
                          <option value="Diploma in Pharmacy">Diploma in Pharmacy</option>
                          <option value="Diploma in Education (D.Ed)">Diploma in Education (D.Ed)</option>
                          <option value="Postgraduate Diploma in Management (PGDM)">Postgraduate Diploma in Management (PGDM)</option>
                          <option value="Certificate in Digital Marketing">Certificate in Digital Marketing</option>
                          <option value="Certificate in Data Science">Certificate in Data Science</option>
                          <option value="Certificate in Graphic Design">Certificate in Graphic Design</option>
                          <option value="Other">Other</option>
                      </select>
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> 
                  <div class="form-group">
                      <label for="childother${childCount}-qualification">Other Qualification</label>
                      <input type="text" class="form-control other-qualification" id="childother${childCount}-qualification" placeholder="Enter your qualification">
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                      <label for="child${childCount}-marriage-stage">Marriage Stage</label>
                      <select class="form-control" id="child${childCount}-marriage-stage">
                          <option selected disabled value>Select Marriage Stage</option>
                          <option>Unmarried</option>
                          <option>Tika</option>
                          <option>Engaged</option>
                      </select>
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                      <label for="child${childCount}-blood-group">Blood Group</label>
                      <select class="form-control" id="child${childCount}-blood-group">
                          <option selected disabled value>Select Blood Group</option>
                          <option>A+</option>
                          <option>A-</option>
                          <option>B+</option>
                          <option>B-</option>
                          <option>AB+</option>
                          <option>AB-</option>
                          <option>O+</option>
                          <option>O-</option>
                      </select>
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                      <label for="child${childCount}-occupation">Occupation</label>
                      <select class="form-control" id="child${childCount}-occupation">
                          <option selected disabled value>Select Occupation</option>
                          <option>Business</option>
                          <option>Government job</option>
                          <option>Pension</option>
                          <option>Farming</option>
                          <option>Private Job</option>
                          <option>Ferry</option>
                          <option>Labour</option>
                          <option>Student</option>
                      </select>
                  </div>
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;"> 
                  <div class="form-group">
                      <label for="childother${childCount}-occupation">Other Occupation</label>
                      <input type="text" class="form-control other-occupation" id="childother${childCount}-occupation" placeholder="Enter your occupation">
                  </div>
              </div>
          </div>
          <div class="col-12 text-center">
              <div class="profile-pic-wrapper">
                  <div class="pic-holder">
                      <img id="child${childCount}-profilePic" class="pic" src="http://localhost:8080/census_project/assets/images/camera-image.jpg">
                      <input class="uploadProfileInput" type="file" name="profile_pic" id="child${childCount}-newProfilePhoto" accept="image/*" style="opacity: 0;" />
                      <label for="child${childCount}-newProfilePhoto" class="upload-file-block">
                          <div class="text-center">
                              <div class="mb-2">
                                  <i class="fa fa-camera fa-2x"></i>
                              </div>
                              <div class="text-uppercase">
                                  Update <br /> Image
                              </div>
                          </div>
                      </label>
                  </div>
              </div>
          </div>
      `;
      childrenEntries.insertBefore(newChildEntry, addChildButton); 
  
      const qualificationSelect = newChildEntry.querySelector(`#child${childCount}-qualification`);
      qualificationSelect.addEventListener('change', function() {
          const otherQualificationGroup = newChildEntry.querySelector('.other-qualification-group');
          if (qualificationSelect.value === 'Other') {
              otherQualificationGroup.style.display = 'block';
          } else {
              otherQualificationGroup.style.display = 'none';
          }
      });
      const occupationSelect = newChildEntry.querySelector(`#child${childCount}-occupation`);
  const otherOccupationGroup = newChildEntry.querySelector('.other-occupation-group');
  
  occupationSelect.addEventListener('change', function() {
      otherOccupationGroup.style.display = 'block';
  });
  
  }
});

document.addEventListener("change", function (event) {
    if (event.target.classList.contains("uploadProfileInput")) {
        const triggerInput = event.target;
        const picHolder = triggerInput.closest(".pic-holder");
        const currentImg = picHolder.querySelector(".pic").src;
        const wrapper = triggerInput.closest(".profile-pic-wrapper");

        const alerts = wrapper.querySelectorAll('[role="alert"]');
        alerts.forEach(function (alert) {
            alert.remove();
        });

        triggerInput.blur();
        const files = triggerInput.files || [];
        if (!files.length || !window.FileReader) {
            return;
        }

        if (/^image/.test(files[0].type)) {
            const reader = new FileReader();
            reader.readAsDataURL(files[0]);

            reader.onloadend = function () {
                picHolder.classList.add("uploadInProgress");
                picHolder.querySelector(".pic").src = this.result;

                const loader = document.createElement("div");
                loader.classList.add("upload-loader");
                loader.innerHTML =
                    '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>';
                picHolder.appendChild(loader);

                setTimeout(function () {
                    picHolder.classList.remove("uploadInProgress");
                    loader.remove();

                    const random = Math.random();
                    if (random < 0.9) {
                        wrapper.innerHTML +=
                            '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>';
                        triggerInput.value = "";
                        setTimeout(function () {
                            wrapper.querySelector('[role="alert"]').remove();
                        }, 3000);
                    } else {
                        picHolder.querySelector(".pic").src = currentImg;
                        wrapper.innerHTML +=
                            '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>';
                        triggerInput.value = "";
                        setTimeout(function () {
                            wrapper.querySelector('[role="alert"]').remove();
                        }, 3000);
                    }
                }, 1500);
            };
        } else {
            wrapper.innerHTML +=
                '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose a valid image.</div>';
            setTimeout(function () {
                const invalidAlert = wrapper.querySelector('[role="alert"]');
                if (invalidAlert) {
                    invalidAlert.remove();
                }
            }, 3000);
        }
    }
});


function toggleSection(sectionId, toggleIconId) {
    var section = document.getElementById(sectionId);
    var toggleIcon = document.getElementById(toggleIconId);
    if (section.style.display === "none") {
        section.style.display = "block";
        toggleIcon.textContent = "-";
    } else {
        section.style.display = "none";
        toggleIcon.textContent = "+";
    }
}

function toggleSection(sectionId, toggleIconId) {
    var section = document.getElementById(sectionId);
    var toggleIcon = document.getElementById(toggleIconId);
    if (section.style.display === "none") {
        section.style.display = "block";
        toggleIcon.textContent = "-";
    } else {
        section.style.display = "none";
        toggleIcon.textContent = "+";
    }
}

function addMarriedChild() {
    var entries = document.getElementById('married_children-entries');
    var newEntryIndex = entries.children.length + 1;
    var newEntry = document.createElement('div');
    newEntry.className = 'Married_child-entry mb-3';
    newEntry.id = 'married_child-' + newEntryIndex;
    newEntry.innerHTML = `
        <h5>Married Child ${newEntryIndex}</h5>
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="married_child${newEntryIndex}-name">Name</label>
                    <input type="text" class="form-control" id="married_child${newEntryIndex}-name">
                </div>
            </div>
        </div>
    `;
    entries.appendChild(newEntry);
}