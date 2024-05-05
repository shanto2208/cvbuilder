<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CV Builder</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <style>
        .red_star{
          color: red;
        }
        hr.solid {
          border-top: 3px solid #000000;
        }
      </style>
    </head>
    <body>
        <x-nav/>

      <div class="container">
          <div class="card text-dark" >
              <div class="card-header d-flex justify-content-between">
                  <div><h3> Enter your information </h3></div>
                  <div><a href="{{ route('demo.index') }}" class="btn btn-success">Demo</a></div>
              </div>
            <div class="card-body">
              <form action="">

                <h4 for="">Personal information</h4>
                <hr class="solid">
                <div class="row ">
                  <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                    <label for="">Photo <span class="red_star">*</span></label>
                    <input type="file" name="photo" class="form-control">
                  </div>
                </div>
                

                <div class="row">
                  <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                    <label for="">Name <span class="red_star">*</span></label>
                    <input type="text" name="name" class="form-control">
                  </div>
                  
                  <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                    <label for="">Email <span class="red_star">*</span></label>
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                    <label for="">Phone <span class="red_star">*</span></label>
                    <input type="text" name="phone" class="form-control">
                  </div>
                  
                  <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                    <label for="">Designation <span class="red_star">*</span></label>
                    <input type="text" name="designation" class="form-control">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 mb-3">
                    <label for="">Address <span class="red_star">*</span></label>
                    <textarea name="address" id=""  cols="3" rows="1" class="form-control"></textarea>
                  </div>
                </div>

                
                <h4 class="mt-3">Education</h4>
                <hr class="solid">
                <div class="container">
                  <div id="education_rows">
                    <div class="row">
                      <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                        <label for="education_institution1">Institution<span class="red_star">*</span></label>
                        <input type="text" name="education_institution1" class="form-control">
                      </div>
                      <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                        <label for="education_degree1">Degree<span class="red_star">*</span></label>
                        <input type="text" name="education_degree1" class="form-control">
                      </div>
                      <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                        <label for="education_start_date1">Start Date<span class="red_star">*</span></label>
                        <input type="date" name="education_start_date1" class="form-control">
                      </div>
                      <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                        <label for="education_end_date1">End Date<span class="red_star">*</span></label>
                        <input type="date" name="education_end_date1" class="form-control">  
                        <input class="form-check-input" type="checkbox" name="education_continue1" value="1" id="education_flexCheckDefault1">
                        <label class="form-check-label" for="education_flexCheckDefault1" checked>
                          Continue
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between">
                    <div>
                        <span id="education_addRowBtn" style="color:green;cursor:pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                          </svg>Add Row
                        </span>
                    </div>
                    <div>
                      <span id="education_removeRowBtn" style="color:rgb(255, 0, 0);cursor:pointer">- Remove Row</span>
                    </div>
                  </div>
                </div>

                <h4 class="mt-3">Experience</h4>
                <hr class="solid">
                  <div class="container">
                    <div id="company_rows">
                      <div class="row">
                        <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                          <label for="company_name">Company Name<span class="red_star">*</span></label>
                          <input type="text" name="company_name1" class="form-control">
                        </div>
                        <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                          <label for="company_position">Position<span class="red_star">*</span></label>
                          <input type="text" name="company_position1" class="form-control">
                        </div>
                        <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                          <label for="company_start_date">Start Date<span class="red_star">*</span></label>
                          <input type="date" name="company_start_date1" class="form-control">
                        </div>
                        <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                          <label for="company_end_date">End Date<span class="red_star">*</span></label>
                          <input type="date" name="company_end_date1" class="form-control">  
                          <input class="form-check-input" type="checkbox" name="company_continue1" value="1" id="company_flexCheckDefault">
                          <label class="form-check-label" for="company_flexCheckDefault" checked>
                            Continue
                          </label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                          <label for="company_description">Description <span class="red_star">*</span></label>
                          <textarea name="company_description" id="company_description1" cols="1" rows="2" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div id="company_additionalRows"></div>
                    <div class="d-flex justify-content-between">
                      <div>
                        <span id="company_addRowBtn" style="color:green;cursor:pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                          </svg>Add Row
                        </span>
                      </div>
                      <div>
                        <span id="company_removeRowBtn" style="color:rgb(255, 0, 0);cursor:pointer">- Remove Row</span>
                      </div>
                    </div>
                  </div>


                <h4 class="mt-3">Skills</h4>
                <hr class="solid">

                <div class="container">
                  <div id="skill_rows">
                    <div class="row" id="skill_row_1">
                      <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                        <label for="skillType1">Skill Type<span class="red_star">*</span></label>
                        <input type="text" name="skillType1" class="form-control">
                      </div>
                      <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                        <label for="skillName1">Skill Name</label>
                        <input type="text" name="skillName1" class="form-control">
                      </div>
                      <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                        <label for="skillName1">Skill Name</label>
                        <input type="text" name="skillName1" class="form-control">
                      </div>
                      <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                        <label for="skillName1">Skill Name</label>
                        <input type="text" name="skillName1" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div id="skill_additionalRows"></div>

                  <div class="d-flex justify-content-between">
                    <div>
                      <span id="skill_addRowBtn" style="color:green;cursor:pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>Add Row
                      </span>
                    </div>
                    <div>
                      <span id="skill_removeRowBtn" style="color:rgb(255, 0, 0);cursor:pointer">- Remove Row</span>
                    </div>
                  </div>
                </div>

                <div class="d-flex justify-content-end">
                  <button class="btn btn-success mt-3 mb-3" type="submit">Generate CV</button>
                </div>
              </form>
            </div>
          </div>
      </div>


      <script>

        var companyRowCount = 1;
        var maxRows = 5; // Maximum number of rows

        document.getElementById('company_addRowBtn').addEventListener('click', function() {
          if (companyRowCount < maxRows) {
            var companyRows = document.getElementById('company_rows');
            var newRow = document.createElement('div');
            newRow.classList.add('row');
            newRow.innerHTML = `
              <div class="row">
                  <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                    <label for="company_name${companyRowCount + 1}">Company Name<span class="red_star">*</span></label>
                    <input type="text" name="company_name${companyRowCount + 1}" class="form-control">
                  </div>
                  <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                    <label for="company_position${companyRowCount + 1}">Position<span class="red_star">*</span></label>
                    <input type="text" name="company_position${companyRowCount + 1}" class="form-control">
                  </div>
                  <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                    <label for="company_start_date${companyRowCount + 1}">Start Date<span class="red_star">*</span></label>
                    <input type="date" name="company_start_date${companyRowCount + 1}" class="form-control">
                  </div>
                  <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                    <label for="company_end_date${companyRowCount + 1}">End Date<span class="red_star">*</span></label>
                    <input type="date" name="company_end_date${companyRowCount + 1}" class="form-control">  
                    <input class="form-check-input" type="checkbox" name="company_continue${companyRowCount + 1}" value="1" id="company_flexCheckDefault${companyRowCount + 1}">
                    <label class="form-check-label" for="company_flexCheckDefault${companyRowCount + 1}" checked>
                      Continue
                    </label>
                  </div>
                </div>

              <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                  <label for="company_description">Description <span class="red_star">*</span></label>
                  <textarea name="company_description${companyRowCount + 1}" id="company_description" cols="1" rows="2" class="form-control"></textarea>
                </div>
              </div>
            `;
            companyRows.appendChild(newRow);
            companyRowCount++;
          } else {
            alert('You can add a maximum of ' + maxRows + ' rows.');
          }
        });

        document.getElementById('company_removeRowBtn').addEventListener('click', function() {
          var companyRows = document.getElementById('company_rows');
          if (companyRowCount > 1) {
            companyRows.removeChild(companyRows.lastElementChild);
            companyRowCount--;
          } else {
            alert('Cannot remove further rows');
          }
        });


        var educationRowCount = 1;
        var educationmaxRows = 4; // Maximum number of rows

        document.getElementById('education_addRowBtn').addEventListener('click', function() {
          if (educationRowCount < educationmaxRows) {
            var educationRows = document.getElementById('education_rows');
            var newRow = document.createElement('div');
            newRow.classList.add('row');
            newRow.innerHTML = `
              <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                <label for="education_institution${educationRowCount + 1}">Institution<span class="red_star">*</span></label>
                <input type="text" name="education_institution${educationRowCount + 1}" class="form-control">
              </div>
              <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                <label for="education_degree${educationRowCount + 1}">Degree<span class="red_star">*</span></label>
                <input type="text" name="education_degree${educationRowCount + 1}" class="form-control">
              </div>
              <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                <label for="education_start_date${educationRowCount + 1}">Start Date<span class="red_star">*</span></label>
                <input type="date" name="education_start_date${educationRowCount + 1}" class="form-control">
              </div>
              <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                <label for="education_end_date${educationRowCount + 1}">End Date<span class="red_star">*</span></label>
                <input type="date" name="education_end_date${educationRowCount + 1}" class="form-control">  
                <input class="form-check-input" type="checkbox" name="education_continue${educationRowCount + 1}" value="1" id="education_flexCheckDefault${educationRowCount + 1}">
                <label class="form-check-label" for="education_flexCheckDefault${educationRowCount + 1}" checked>
                  Continue
                </label>
              </div>
            `;
            educationRows.appendChild(newRow);
            educationRowCount++;
          } else {
            alert('You can add a maximum of ' + educationmaxRows + ' rows.');
          }
        });

        document.getElementById('education_removeRowBtn').addEventListener('click', function() {
          var educationRows = document.getElementById('education_rows');
          if (educationRowCount > 1) {
            educationRows.removeChild(educationRows.lastElementChild);
            educationRowCount--;
          } else {
            alert('Cannot remove further rows');
          }
        });




          var skillRowCount = 1;
          var skillmaxRows = 5; // Maximum number of rows

          document.getElementById('skill_addRowBtn').addEventListener('click', function() {
            if (skillRowCount < skillmaxRows) {
              skillRowCount++;
              var skillRows = document.getElementById('skill_rows');
              var newRow = document.createElement('div');
              newRow.classList.add('row');
              newRow.id = 'skill_row_' + skillRowCount;
              newRow.innerHTML = `
                <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                  <label for="skillType${skillRowCount}">Skill Type<span class="red_star">*</span></label>
                  <input type="text" name="skillType${skillRowCount}" class="form-control">
                </div>
                <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                  <label for="skillName${skillRowCount}">Skill Name</label>
                  <input type="text" name="skillName${skillRowCount}" class="form-control">
                </div>
                <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                  <label for="skillName${skillRowCount}">Skill Name</label>
                  <input type="text" name="skillName${skillRowCount}" class="form-control">
                </div>
                <div class="col-xl-3 col-md-12 col-sm-12 mb-3">
                  <label for="skillName${skillRowCount}">Skill Name</label>
                  <input type="text" name="skillName${skillRowCount}" class="form-control">
                </div>
              `;
              skillRows.appendChild(newRow);
            } else {
              alert('You can add a maximum of ' + skillmaxRows + ' rows.');
            }
          });

          document.getElementById('skill_removeRowBtn').addEventListener('click', function() {
            if (skillRowCount > 1) {
              var skillRows = document.getElementById('skill_rows');
              var lastRow = document.getElementById('skill_row_' + skillRowCount);
              skillRows.removeChild(lastRow);
              skillRowCount--;
            } else {
              alert('Cannot remove further rows');
            }
          });
      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>                       
{{-- <div class="col-xl-6 col-md-12 col-sm-12">
    <label for="name${rowCount + 1}">Name</label>
   <input type="text" id="name${rowCount + 1}" class="form-control">
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12">
  <label for="email${rowCount + 1}">Email</label>
<input type="text" id="email${rowCount + 1}" class="form-control">
  </div> --}}