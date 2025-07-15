<!DOCTYPE html>
<html lang="eng">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <title>Free Designs Source</title>
    
    <!-- bootstrap.min css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Tagify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.0/tagify.min.css">
    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.min.css">
    <!-- Cropper.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">


</head>


<body data-spy="scroll" data-target=".fixed-top">

<div class="resume-page">
    <!--MAIN BANNER AREA START -->
    <div class="container-fluid header-container bg-blue p-0" id="header">
        <div class="container">
            <div class="header navigation-bar d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.php" class="link d-block">
                        <img src="images/logo.svg" alt="logo" width="130" height="35.8">
                    </a>
                </div>
                <ul class="centered-nav d-flex align-items-center gap-lg-5 gap-md-4 gap-3 mb-0 ps-0 py-1 py-md-0 justify-content-md-center justify-content-around">
                    <li><a href="index.php" class="link">Home</a></li><span class="y-divider d-md-none d-block"></span>
                    <li><a href="#" class="link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Launching soon!">Designs</a></li><li style="display: contents;"><span class="y-divider d-md-none d-block"></span></li>
                    <li><a href="blog.php" class="link">Blog</a></li><li style="display: contents;"><span class="y-divider d-md-none d-block"></span></li>
                    <li><a href="#" class="link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Launching soon!">About</a></li>
                </ul>
                <a href="index.php" class="btn btn-success rounded">Home</a>
            </div>
        </div>
    </div>
    <!--MAIN HEADER AREA END -->

    <div class="container-fluid resume-banner bg-light py-5 px-sm-5 px-1">
        <div class="container">
            <div class="col-lg-7 col-sm-10 col-xs-12 mx-auto">
                <div class="my-sm-5 my-2 pb-sm-5 pb-2 pt-sm-3 pt-1 text-center">
                    <h2 class="mb-2">Resume Design</h2>
                    <p>Blog categories help organize your content, making it easier for readers to find related posts and enhancing the overall user experience on your site.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container create-resume-container">
        <!-- <div class="row justify-content-center">
            <div class="col-lg-7 col-sm-10 col-xs-10">
                <div class="my-5 text-center">
                    <h2 class="mb-2">Get in touch</h2>
                    <p>Have a project on mind,want to make an consultant. Don't hesistate to contact us.Let's have atalk together.Colaborat eyour project to done quickly</p>
                </div>
            </div>
        </div> -->
        <div class="row form-row">
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <form id="resumeForm" class="resume__form d-flex flex-column gap-4" action="generate_pdf.php" method="post">
                    <div class="d-flex flex-column gap-1 gap-md-2 mx-0 card p-4 rounded-lg shadow border-0 personal-info">
                        <h5 class="fw-bold mb-0 border-bottom pb-2 mb-2">Personal information</h5>
                        <div class="profile-img p-relative">
                            <div id="imageContainer1" class="img img-container">
                                <img id="defaultImage1" src="images/profile-basic.jpg" alt="loading...">
                            </div>
                            <div class="edit-btn">
                                <label for="imageInput" class="bg-light shadow rounded-circle d-flex" style="cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="currentColor"><path d="M120-120v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm584-528 56-56-56-56-56 56 56 56Z"/></svg>
                                    <input type="file" accept="image/*" id="imageInput" name="image" style="display: none;" onchange="uploadImage()">
                                    <input type="hidden" id="imageBase64" name="imageBase64">
                                </label>
                            </div>

                            <!-- Cropper Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content rounded-lg">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Crop your Image</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="imageToCrop" style="max-width: 100%;" alt="Image for cropping">
                                            <!-- <button type="button" onclick="cropImage()">Crop Image</button> -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light border rounded" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success" onclick="cropImage()">Crop</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Circular cropped image preview -->
                            <img id="croppedImagePreview" style="width: 100px; height: 100px; border-radius: 50%; display: none;">

                        </div>
                        <div class="col-md-12 form-group mb-1">
                            <label for="name" class="form-label mb-1 font-sm fs-6 required">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="col-md-12 form-group mb-1">
                            <label for="email" class="form-label mb-1 font-sm fs-6 required">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-12 form-group mb-1">
                            <label for="phone" class="form-label mb-1 font-sm fs-6 required">Phone Number</label>
                            <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-12 form-group mb-1">
                            <label for="address" class="form-label mb-1 font-sm fs-6 required">Address</label>
                            <input name="address" type="text" class="form-control" id="address" placeholder="Address" required>
                        </div>
                        <div class="col-md-12 form-group mb-1">
                            <label for="summary" class="form-label mb-1 font-sm fs-6 required">Summary</label>
                            <textarea name="summary" class="form-control" rows="4" id="summary" placeholder="Professional summary" required></textarea>
                        </div>
                    </div>

                    <!--Start Educational info -->
                    <div id="educational-info-container">
                        <!-- The first educational info block -->
                        <div class="d-flex flex-column gap-1 gap-md-2 mx-0 card p-4 rounded-lg shadow border-0 educational-info">
                            <h5 class="fw-bold mb-0 border-bottom pb-2 mb-2">Educational information</h5>
                            <div class="col-md-12 form-group mb-1">
                                <label for="degree_title" class="form-label mb-1 font-sm fs-6 required">Degree title</label>
                                <input name="degree_title" type="text" class="form-control degree-title" id="degree_title1" placeholder="Degree title" required>
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="institution_title" class="form-label mb-1 font-sm fs-6 required">Institution title</label>
                                <input name="institution_title" type="text" class="form-control institution-title" id="institution_title1" placeholder="Institution title" required>
                            </div>
                            <div class="col-md-12 form-group start-date mb-1 d-flex">
                                <div class="start-month col-md-6">
                                    <label for="startMonthPicker1" class="form-label mb-1 font-sm fs-6 d-block required">Start Month</label>
                                    <select id="startMonthPicker1" class="selectpicker start-month" data-live-search="true" required>
                                        <option value="" selected="" disabled="" class="d-none">Select start month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                                <div class="start-year ms-3 col-md-6">
                                    <label for="startYearPicker1" class="form-label mb-1 font-sm fs-6 d-block required">Start Year</label>
                                    <select id="startYearPicker1" class="selectpicker start-year" data-live-search="true" required></select>
                                </div>
                            </div>
                            <div class="col-md-12 form-group start-date mb-1 d-flex">
                                <div class="end-month col-md-6">
                                    <label for="endMonthPicker1" class="form-label mb-1 font-sm fs-6 d-block">End Month</label>
                                    <select id="endMonthPicker1" class="selectpicker end-month" data-live-search="true">
                                        <option value="" selected="" disabled="" class="d-none">Select end month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                                <div class="end-year ms-3 col-md-6">
                                    <label for="endYearPicker1" class="form-label mb-1 font-sm fs-6 d-block">End Year</label>
                                    <select id="endYearPicker1" class="selectpicker end-year" data-live-search="true"></select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hidden Inputs -->
                    <input type="hidden" name="degree_title_hidden" id="degree_title_hidden">
                    <input type="hidden" name="institution_title_hidden" id="institution_title_hidden">
                    <input type="hidden" name="start_month_hidden" id="start_month_hidden">
                    <input type="hidden" name="start_year_hidden" id="start_year_hidden">
                    <input type="hidden" name="end_month_hidden" id="end_month_hidden">
                    <input type="hidden" name="end_year_hidden" id="end_year_hidden">
                    <!--End Educational info -->  


                    <!--Start Professional info -->
                    <div class="d-flex flex-column gap-1 gap-md-2 mx-0 card p-4 rounded-lg shadow border-0 professional-info">
                        <h5 class="fw-bold mb-0 border-bottom pb-2 mb-2">Professional information</h5>
                        <div class="col-md-12 form-group mb-1">
                            <label for="job_title" class="form-label mb-1 font-sm fs-6">Job title</label>
                            <input name="job_title" type="text" class="form-control" id="job_title" placeholder="Job title" required>
                        </div>
                        <!-- Skills -->
                        <div class="col-md-12 form-group mb-1">
                            <label for="tags" class="form-label mb-1 font-sm fs-6">Skills</label>
                            <!-- Input field for tags -->
                            <input id="tag-input" class="form-control" placeholder="Add skill" name="tags" value="">
                        </div>
                        <!-- Languages -->
                        <div class="col-md-12 form-group mb-1">
                            <label for="languages_tags" class="form-label mb-1 font-sm fs-6">Languages</label>
                            <!-- Input field for tags -->
                            <input id="language-input" class="form-control" placeholder="Add language" name="languages_tags" value="">
                        </div>
                    </div>
                    <!--End Professional info -->

                    <!--Start work experience info -->
                    <div id="experience-info-container">
                        <!-- The first experience info block -->
                        <div class="d-flex flex-column gap-1 gap-md-2 mx-0 card p-4 rounded-lg shadow border-0 experience-info">
                            <h5 class="fw-bold mb-0 border-bottom pb-2 mb-2">Experience information</h5>

                            <div class="experience">
                                <h6 class="fw-bold mb-0 pb-2 mb-2">Current experience</h6>
                                <div class="d-flex flex-column gap-1 gap-md-2">
                                    <div class="col-md-12 form-group mb-1">
                                        <label for="exp_job_title" class="form-label mb-1 font-sm fs-6">Job title</label>
                                        <input name="exp_job_title" type="text" class="form-control job-title" id="exp_job_title" placeholder="Job title" required>
                                    </div>
                                    <div class="col-md-12 form-group mb-1">
                                        <label for="company_title" class="form-label mb-1 font-sm fs-6">Company title</label>
                                        <input name="company_title" type="text" class="form-control company-title" id="company_title" placeholder="Company title" required>
                                    </div>
                                    <div class="col-md-12 form-group start-date mb-1 d-flex">
                                        <div class="start-month col-md-6">
                                            <label for="startMonthPicker2" class="form-label mb-1 font-sm fs-6 d-block">Start Month</label>
                                            <select id="startMonthPicker2" class="selectpicker start-month" data-live-search="true">
                                                <option value="" selected="" disabled="" class="d-none">Select start month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="start-year ms-3 col-md-6">
                                            <label for="startYearPicker2" class="form-label mb-1 font-sm fs-6 d-block">Start Year</label>
                                            <select id="startYearPicker2" class="selectpicker start-year" data-live-search="true"></select>
                                        </div>
                                    </div>
                                    <!-- <div class="still-working" id="stillWorking">
                                        <input type="checkbox" id="stillWorkingCheckboxExp">
                                        <label for="stillWorkingCheckboxExp">Still working here?</label>
                                    </div> -->
                                    <!-- <div class="col-md-12 form-group end-date exp1-end-date mb-1 d-flex">
                                        <div class="end-month">
                                            <label for="endMonthPicker2" class="form-label mb-1 font-sm fs-6 d-block">End Month</label>
                                            <select id="endMonthPicker2" class="selectpicker end-month" data-live-search="true">
                                                <option value="Still working here">Still working here</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="end-year ms-2">
                                            <label for="endYearPicker2" class="form-label mb-1 font-sm fs-6 d-block">End Year</label>
                                            <select id="endYearPicker2" class="selectpicker end-year" data-live-search="true"></select>
                                        </div>
                                    </div> -->

                                    <!-- Hidden inputs -->
                                    <input type="hidden" name="exp_job_title_hidden" id="exp_job_title_hidden">
                                    <input type="hidden" name="exp_comapny_title_hidden" id="exp_comapny_title_hidden">
                                    <input type="hidden" name="exp_start_month_hidden" id="exp_start_month_hidden">
                                    <input type="hidden" name="exp_start_year_hidden" id="exp_start_year_hidden">
                                    <input type="hidden" name="exp_end_date_hidden" id="exp_end_date_hidden">
                                    <!-- <input type="hidden" name="exp_end_month_hidden" id="exp_end_month_hidden">
                                    <input type="hidden" name="exp_end_year_hidden" id="exp_end_year_hidden"> -->
                                </div>
                            </div>

                            <div class="experience1">
                                <hr>
                                <h6 class="fw-bold mb-0 pb-2 mb-2">Previous experiences</h6>
                                <div class="d-flex flex-column gap-1 gap-md-2">
                                    <div class="col-md-12 form-group mb-1">
                                        <label for="exp_job_title1" class="form-label mb-1 font-sm fs-6">Job title</label>
                                        <input name="exp_job_title1" type="text" class="form-control job-title" id="exp_job_title1" placeholder="Job title" required>
                                    </div>
                                    <div class="col-md-12 form-group mb-1">
                                        <label for="company_title1" class="form-label mb-1 font-sm fs-6">Company title</label>
                                        <input name="company_title1" type="text" class="form-control company-title" id="company_title1" placeholder="Company title" required>
                                    </div>
                                    <div class="col-md-12 form-group start-date mb-1 d-flex">
                                        <div class="start-month col-md-6">
                                            <label for="startMonthPicker3" class="form-label mb-1 font-sm fs-6 d-block">Start Month</label>
                                            <select id="startMonthPicker3" class="selectpicker start-month" data-live-search="true">
                                                <option value="" selected="" disabled="" class="d-none">Select start month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="start-year ms-3 col-md-6">
                                            <label for="startYearPicker3" class="form-label mb-1 font-sm fs-6 d-block">Start Year</label>
                                            <select id="startYearPicker3" class="selectpicker start-year" data-live-search="true"></select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group start-date mb-1 d-flex">
                                        <div class="end-month col-md-6">
                                            <label for="endMonthPicker3" class="form-label mb-1 font-sm fs-6 d-block">End Month</label>
                                            <select id="endMonthPicker3" class="selectpicker end-month" data-live-search="true">
                                                <option value="" selected="" disabled="" class="d-none">Select end month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="end-year ms-3 col-md-6">
                                            <label for="endYearPicker3" class="form-label mb-1 font-sm fs-6 d-block">End Year</label>
                                            <select id="endYearPicker3" class="selectpicker end-year" data-live-search="true"></select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hidden inputs -->
                                <input type="hidden" name="exp_job_title_hidden1" id="exp_job_title_hidden1">
                                <input type="hidden" name="exp_comapny_title_hidden1" id="exp_comapny_title_hidden1">
                                <input type="hidden" name="exp_start_month_hidden1" id="exp_start_month_hidden1">
                                <input type="hidden" name="exp_start_year_hidden1" id="exp_start_year_hidden1">
                                <input type="hidden" name="exp_end_month_hidden1" id="exp_end_month_hidden1">
                                <input type="hidden" name="exp_end_year_hidden1" id="exp_end_year_hidden1">

                                <button type="button" class="btn btn-danger remove-btn mt-3 btn-sm" id="exp1">Remove Record</button>
                            </div>

                            <hr>
                            <div class="experience2">
                                <div class="d-flex flex-column gap-1 gap-md-2">
                                    <div class="col-md-12 form-group mb-1">
                                        <label for="exp_job_title2" class="form-label mb-1 font-sm fs-6">Job title</label>
                                        <input name="exp_job_title2" type="text" class="form-control job-title" id="exp_job_title2" placeholder="Job title">
                                    </div>
                                    <div class="col-md-12 form-group mb-1">
                                        <label for="company_title2" class="form-label mb-1 font-sm fs-6">Company title</label>
                                        <input name="company_title2" type="text" class="form-control company-title" id="company_title2" placeholder="Company title">
                                    </div>
                                    <div class="col-md-12 form-group start-date mb-1 d-flex">
                                        <div class="start-month col-md-6">
                                            <label for="startMonthPicker4" class="form-label mb-1 font-sm fs-6 d-block">Start Month</label>
                                            <select id="startMonthPicker4" class="selectpicker start-month" data-live-search="true">
                                                <option value="" selected="" disabled="" class="d-none">Select start month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="start-year ms-3 col-md-6">
                                            <label for="startYearPicker4" class="form-label mb-1 font-sm fs-6 d-block">Start Year</label>
                                            <select id="startYearPicker4" class="selectpicker start-year" data-live-search="true"></select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group start-date mb-1 d-flex">
                                        <div class="end-month col-md-6">
                                            <label for="endMonthPicker4" class="form-label mb-1 font-sm fs-6 d-block">End Month</label>
                                            <select id="endMonthPicker4" class="selectpicker end-month" data-live-search="true">
                                                <option value="" selected="" disabled="" class="d-none">Select end month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="end-year ms-3 col-md-6">
                                            <label for="endYearPicker4" class="form-label mb-1 font-sm fs-6 d-block">End Year</label>
                                            <select id="endYearPicker4" class="selectpicker end-year" data-live-search="true"></select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hidden inputs -->
                                <input type="hidden" name="exp_job_title_hidden2" id="exp_job_title_hidden2">
                                <input type="hidden" name="exp_comapny_title_hidden2" id="exp_comapny_title_hidden2">
                                <input type="hidden" name="exp_start_month_hidden2" id="exp_start_month_hidden2">
                                <input type="hidden" name="exp_start_year_hidden2" id="exp_start_year_hidden2">
                                <input type="hidden" name="exp_end_month_hidden2" id="exp_end_month_hidden2">
                                <input type="hidden" name="exp_end_year_hidden2" id="exp_end_year_hidden2">

                                <button type="button" class="btn btn-danger remove-btn mt-3 btn-sm" id="exp2">Remove Record</button>
                            </div>

                        </div>
                    </div>
                    <!-- <button type="button" id="addMoreExperience" class="btn btn-primary mt-2">Add More</button> -->
                    <!--End Experience info -->

                    <!-- Portfolio Input Section -->
                    <div class="d-flex flex-column gap-1 gap-md-2 mx-0 card p-4 rounded-lg shadow border-0 portfolio-info">
                        <h5 class="fw-bold mb-0 border-bottom pb-2 mb-2">Portfolio information</h5>
                        <div class="portfolio">
                            <h6 class="fw-bold mb-0 pb-2 mb-2">Portfolio 1</h6>
                            <div class="d-flex flex-column gap-1 gap-md-2">
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_title" class="form-label mb-1 font-sm fs-6">Portfolio title</label>
                                    <input name="portfolio_title" type="text" class="form-control" id="portfolio_title" placeholder="Portfolio title" required>
                                </div>
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_link" class="form-label mb-1 font-sm fs-6">Portfolio link</label>
                                    <input name="portfolio_link" type="text" class="form-control" id="portfolio_link" placeholder="Portfolio link" required>
                                </div>
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_detail" class="form-label mb-1 font-sm fs-6">Portfolio Detail</label>
                                    <!-- <input name="portfolio_detail" type="text" class="form-control" id="portfolio_detail" placeholder="Portfolio detail" required> -->
                                    <textarea name="portfolio_detail" class="form-control" rows="4" id="portfolio_detail" placeholder="Portfolio detail"></textarea>
                                </div>
                            </div>
                            <!-- Hidden inputs -->
                            <input type="hidden" name="portfolio_title_hidden" id="portfolio_title_hidden">
                            <input type="hidden" name="portfolio_link_text_hidden" id="portfolio_link_text_hidden">
                            <input type="hidden" name="portfolio_link_hidden" id="portfolio_link_hidden">
                            <input type="hidden" name="portfolio_detail_hidden" id="portfolio_detail_hidden">
                        </div>
                        <hr>

                        <!-- Portfolio record 1 -->
                        <div class="portfolio-1">
                            <h6 class="fw-bold mb-0 pb-2 mb-2">Portfolio 2</h6>
                            <div class="d-flex flex-column gap-1 gap-md-2">
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_title1" class="form-label mb-1 font-sm fs-6">Portfolio title</label>
                                    <input name="portfolio_title1" type="text" class="form-control" id="portfolio_title1" placeholder="Portfolio title" required>
                                </div>
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_link1" class="form-label mb-1 font-sm fs-6">Portfolio link</label>
                                    <input name="portfolio_link1" type="text" class="form-control" id="portfolio_link1" placeholder="Portfolio link" required>
                                </div>
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_detail1" class="form-label mb-1 font-sm fs-6">Portfolio Detail</label>
                                    <!-- <input name="portfolio_detail1" type="text" class="form-control" id="portfolio_detail1" placeholder="Portfolio detail" required> -->
                                    <textarea name="portfolio_detail1" class="form-control" rows="4" id="portfolio_detail1" placeholder="Portfolio detail"></textarea>
                                </div>
                            </div>

                            <!-- Hidden inputs -->
                            <input type="hidden" name="portfolio_title_hidden1" id="portfolio_title_hidden1">
                            <input type="hidden" name="portfolio_link_text_hidden1" id="portfolio_link_text_hidden1">
                            <input type="hidden" name="portfolio_link_hidden1" id="portfolio_link_hidden1">
                            <input type="hidden" name="portfolio_detail_hidden1" id="portfolio_detail_hidden1">
                        </div>
                        <hr>

                        <!-- Portfolio record 2 -->
                        <div class="portfolio-2">
                            <h6 class="fw-bold mb-0 pb-2 mb-2">Portfolio 3</h6>
                            <div class="d-flex flex-column gap-1 gap-md-2">
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_title2" class="form-label mb-1 font-sm fs-6">Portfolio title</label>
                                    <input name="portfolio_title2" type="text" class="form-control" id="portfolio_title2" placeholder="Portfolio title" required>
                                </div>
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_link2" class="form-label mb-1 font-sm fs-6">Portfolio link</label>
                                    <input name="portfolio_link2" type="text" class="form-control" id="portfolio_link2" placeholder="Portfolio link" required>
                                </div>
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_detail2" class="form-label mb-1 font-sm fs-6">Portfolio Detail</label>
                                    <!-- <input name="portfolio_detail2" type="text" class="form-control" id="portfolio_detail2" placeholder="Portfolio detail" required> -->
                                    <textarea name="portfolio_detail2" class="form-control" rows="4" id="portfolio_detail2" placeholder="Portfolio detail"></textarea>
                                </div>
                            </div>

                            <!-- Hidden inputs -->
                            <input type="hidden" name="portfolio_title_hidden2" id="portfolio_title_hidden2">
                            <input type="hidden" name="portfolio_link_text_hidden2" id="portfolio_link_text_hidden2">
                            <input type="hidden" name="portfolio_link_hidden2" id="portfolio_link_hidden2">
                            <input type="hidden" name="portfolio_detail_hidden2" id="portfolio_detail_hidden2">
                        </div>
                        <hr>

                        <!-- Portfolio record 3 -->
                        <div class="portfolio-3">
                            <h6 class="fw-bold mb-0 pb-2 mb-2">Portfolio 4</h6>
                            <div class="d-flex flex-column gap-1 gap-md-2">
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_title3" class="form-label mb-1 font-sm fs-6">Portfolio title</label>
                                    <input name="portfolio_title3" type="text" class="form-control" id="portfolio_title3" placeholder="Portfolio title" required>
                                </div>
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_link3" class="form-label mb-1 font-sm fs-6">Portfolio link</label>
                                    <input name="portfolio_link3" type="text" class="form-control" id="portfolio_link3" placeholder="Portfolio link" required>
                                </div>
                                <div class="col-md-12 form-group mb-1">
                                    <label for="portfolio_detail3" class="form-label mb-1 font-sm fs-6">Portfolio Detail</label>
                                    <!-- <input name="portfolio_detail3" type="text" class="form-control" id="portfolio_detail3" placeholder="Portfolio detail" required> -->
                                    <textarea name="portfolio_detail3" class="form-control" rows="4" id="portfolio_detail3" placeholder="Portfolio detail"></textarea>
                                </div>
                            </div>

                            <!-- Hidden inputs -->
                            <input type="hidden" name="portfolio_title_hidden3" id="portfolio_title_hidden3">
                            <input type="hidden" name="portfolio_link_text_hidden3" id="portfolio_link_text_hidden3">
                            <input type="hidden" name="portfolio_link_hidden3" id="portfolio_link_hidden3">
                            <input type="hidden" name="portfolio_detail_hidden3" id="portfolio_detail_hidden3">
                        </div>

                    </div>

                    <div class="col-12 d-flex align-items-center justify-content-start gap-2 gap-md-3">
                        <button type="submit" class="btn btn-success rounded download-btn">Download</button>
                        <button type="button" class="btn btn-light border rounded d-none cv-view-btn" data-bs-toggle="modal" data-bs-target="#cv_preview">View CV</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-8 col-sm-8 col-xs-12 mt-4 mt-lg-0 resume-section">
                <div id="printContent" class="resume-parent card p-0 rounded-lg shadow border-0 overflow-hidden" style="display: flex; flex-direction: row;">
                <div class="container resume-container p-0">
                    <div class="upper-side">
                        <div id="imageContainer" class="img img-container object-fit-contain">
                        <img id="defaultImage" src="images/profile-basic.jpg" alt="profile img" alt="loading...">
                        </div>

                        <!-- Contact section -->
                        <div class="contact-section">
                            <h3 class="my-name" id="name_field" style="color: #333; font-size: 40px;">John Doe</h3>
                            <p id="job_title_field" style="color: #333;">UI / UX Developer</p>
                            <p class="my-email" id="email_field" style="color: #333; word-break: break-word;">email@example.com</p>
                            <p id="phone_field" style="color: #333;">(123) 456-7890</p>
                            <p id="address_field" style="color: #333;">123 Main Street, City, State, Zip</p>
                        </div>

                    </div>
                    <div class="bottom-side">
                        <h3 class="contact border-heading" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Personal summary</h3>
                        <p id="summary_field" style="color: #333;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <!-- <h3 style="color: #333;">Education</h3>
                        <p style="color: #333;">Bachelor of Science in Computer Science</p>
                        <p style="color: #333;">University Name, Graduation Year</p> -->
                        <!-- <h3 style="color: #333;">Experience</h3>
                        <p style="color: #333;">Job Title</p>
                        <p style="color: #333;">Company Name - Location</p>
                        <p style="color: #333;">Month Year - Month Year</p>
                        <p style="color: #333;">Description of responsibilities and achievements...</p>
                        <p style="color: #333;">Job Title</p>
                        <p style="color: #333;">Company Name - Location</p>
                        <p style="color: #333;">Month Year - Month Year</p>
                        <p style="color: #333;">Description of responsibilities and achievements...</p> -->
                    
                        <!-- Skills section -->
                        <div class="skills-section" style="margin-bottom: 30px;" id="pro-skills">
                            <h3 class="contact border-heading" id="skills_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Skills</h3>
                            <!-- Container to show the tag values -->
                            <div id="skills-container" class="skills-div">No skills added</div>
                            <input type="hidden" id="tags-input" name="tags">
                        </div>

                        <!-- Experience section -->
                        <div class="experience-section" style="margin-bottom: 15px;" id="experience-section">
                            <h3 class="contact border-heading" id="experience_head_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Work Experience</h3>
                            <p class="job-title" id="exp_job_title_field" style="color: #333; word-break: break-word;">UI/UX Designer</p>
                            <p id="company_field" style="color: #333;">GCUF Lahore</p>
                            <p id="job_date_field" style="color: #333;">October 2018 - October 2022</p>
                        </div>

                        <div class="experience-section1" style="border-top: 1px solid #333;" id="experience-section1">
                            <p class="job-title" id="exp_job_title_field1" style="color: #333; word-break: break-word; padding-top: 15px;">UI/UX Designer</p>
                            <p id="company_field1" style="color: #333;">GCUF Lahore</p>
                            <p id="job_date_field1" style="color: #333;">October 2018 - October 2022</p>
                        </div>

                        <div class="experience-section2" style="border-top: 1px solid #333;" id="experience-section2">
                            <p class="job-title" id="exp_job_title_field2" style="color: #333; word-break: break-word; padding-top: 15px;">UI/UX Designer</p>
                            <p id="company_field2" style="color: #333;">GCUF Lahore</p>
                            <p id="job_date_field2" style="color: #333;">October 2018 - October 2022</p>
                        </div>

                        <!-- Education section -->
                        <div class="education-section" style="margin-bottom: 30px;" id="education-section">
                            <h3 class="contact border-heading" id="edu_head_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Education</h3>
                            <p class="my-email" id="edu_title_field" style="color: #333; word-break: break-word;">Msc (cs)</p>
                            <p id="edu_institution_field" style="color: #333;">GCUF Lahore</p>
                            <p id="edu_date_field" style="color: #333;">October 2018 - October 2022</p>
                        </div>

                        <!-- Languages section -->
                        <div class="languages-section" style="margin-bottom: 30px;" id="languages">
                            <h3 class="contact border-heading" id="languages_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Languages</h3>
                            <!-- Container to show the tag values -->
                            <div id="languages-container" class="languages-div">No skills added</div>
                            <input type="hidden" id="languages-input" name="languages">
                        </div>

                        <!-- Portfolio section -->
                        <div class="portfolio-section" style="margin-bottom: 15px;" id="portfolio-section">
                            <h3 class="contact border-heading" id="portfolio_head_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Portfolio</h3>
                            <div class="portfolio mb-4">
                                <p class="job-title mb-0" id="portfolio_title_field" style="color: #333; word-break: break-word;">Portfolio</p>
                                <a href="javascript:void(0)" id="portfolio_link_field" style="color: #333;">example.com</a>
                                <p class="job-title mb-0" id="portfolio_detail_field" style="color: #333; word-break: break-word;">Lorem ipsum dolor sit amit.</p>
                            </div>
                            <div class="portfolio-1 mb-4">
                                <p class="job-title mb-0" id="portfolio_title_field1" style="color: #333; word-break: break-word;">Portfolio</p>
                                <a href="javascript:void(0)" id="portfolio_link_field1" target="_blank" style="color: #333;">example.com</a>
                                <p class="job-title mb-0" id="portfolio_detail_field1" style="color: #333; word-break: break-word;">Lorem ipsum dolor sit amit.</p>
                            </div>
                            <div class="portfolio-2 mb-4">
                                <p class="job-title mb-0" id="portfolio_title_field2" style="color: #333; word-break: break-word;">Portfolio</p>
                                <a href="javascript:void(0)" id="portfolio_link_field2" target="_blank" style="color: #333;">example.com</a>
                                <p class="job-title mb-0" id="portfolio_detail_field2" style="color: #333; word-break: break-word;">Lorem ipsum dolor sit amit.</p>
                            </div>
                            <div class="portfolio-3 mb-4">
                                <p class="job-title mb-0" id="portfolio_title_field3" style="color: #333; word-break: break-word;">Portfolio</p>
                                <a href="javascript:void(0)" id="portfolio_link_field3" target="_blank" style="color: #333;">example.com</a>
                                <p class="job-title mb-0" id="portfolio_detail_field3" style="color: #333; word-break: break-word;">Lorem ipsum dolor sit amit.</p>
                            </div>
                        </div>

                    </div>


                </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid sixth-container call-container bg-img px-0">
        <div class="container py-3">
            <div class="row align-items-center py-4 py-md-5 justify-content-center">
                <div class="col-lg-7 col-md-10 col-sm-12 px-4 px-sm-0 captions-col text-center">
                    <h1 class="text-white mb-4">Ready to design your dream CV?</h1>
                    <p class="font-sm text-white mb-4">Unlocking Your Professional Potential: Elevating Careers with Customized CV Solutions. Your Journey to Success Starts Now.</p>
                    <a href="resume.php" class="btn btn-success rounded">Create CV</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid seventh-container footer-container bg-blue px-0">
        <div class="container py-3 py-md-4">
            <div class="d-flex justify-content-center justify-content-md-between gap-3 py-1 flex-wrap flex-md-nowrap">
                <p class="mb-0 text-white">© 2024 MyResume All rights reserved.</p>
                <div class="d-flex gap-4">
                    <a href="#" class="text-white link">Privacy policy</a>
                    <a href="#" class="text-white link">Terms of use</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating icon for cv preview on mobile -->
    <button class="cv-preview-icon" data-bs-toggle="modal" data-bs-target="#cv_preview">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#13005a"><path d="m878-93.46-138-138v118.23h-40V-300h186.77v40H767.54l138 138L878-93.46ZM560-640h160L560-800v160ZM264.62-120q-27.62 0-46.12-18.5Q200-157 200-184.62v-590.76q0-27.62 18.5-46.12Q237-840 264.62-840H580l180 180v280H620v260H264.62Z"/></svg>
    </button>
</div>

<!-- Cv Preview Modal -->
<div class="modal fade cv-preview-modal" id="cv_preview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog container">
        <div class="modal-content rounded-lg">
            <div class="modal-header">
                <h5 class="modal-title">Resume View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-success rounded" id="download_btn">Download</button>
                <button type="button" class="btn btn-light border rounded" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<!-- Cropper.js JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

<script>

// JavaScript to move the resume section
document.addEventListener('DOMContentLoaded', () => {
    const resumeSection = document.querySelector('.resume-section'); // Resume section
    const resumeParent = resumeSection?.parentElement; // Original parent (store on page load)
    const modalBody = document.querySelector('#cv_preview .modal-body'); // Modal body

    // Ensure elements exist
    if (!resumeSection || !resumeParent || !modalBody) {
        console.error("Required elements are missing in the DOM.");
        return;
    }

    function adjustContent() {
        if (window.innerWidth <= 1024) {
            // Move the resume section to the modal body
            if (!modalBody.contains(resumeSection)) {
                modalBody.appendChild(resumeSection);
                console.log("Moved resume section to modal body.");
            }
        } else {
            // Restore the resume section to its original parent
            if (!resumeParent.contains(resumeSection)) {
                resumeParent.appendChild(resumeSection);
                console.log("Restored resume section to original parent.");
            }
        }
    }

    // Event listeners for load, resize, and orientation change
    window.addEventListener('load', adjustContent);
    window.addEventListener('resize', adjustContent);
    window.addEventListener('orientationchange', adjustContent);
});





// Function to save input field values to local storage
function saveInputValues() {
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var address = document.getElementById('address');
    var jobTitle = document.getElementById('job_title');
    var phone = document.getElementById('phone');
    var summary = document.getElementById('summary');
    localStorage.setItem('savedName', nameInput.value);
    localStorage.setItem('savedEmail', emailInput.value);
    localStorage.setItem('savedAddress', address.value);
    localStorage.setItem('savedJobTitle', jobTitle.value);
    localStorage.setItem('savedPhone', phone.value);
    localStorage.setItem('savedSummary', summary.value);
    // localStorage.setItem('savedSummary', summary.value.replace(/<\/?[^>]+(>|$)/g, ""));
    // localStorage.setItem('savedSkills', tag-input.value);
}


// Function to load input field values from local storage
function loadInputValues() {
    var savedName = localStorage.getItem('savedName');
    var savedEmail = localStorage.getItem('savedEmail');
    var savedAddress = localStorage.getItem('savedAddress');
    var savedJobTitle = localStorage.getItem('savedJobTitle');
    var savedPhone = localStorage.getItem('savedPhone');
    var savedSummary = localStorage.getItem('savedSummary');
    // var savedSkills = localStorage.getItem('savedSkills');

    // Check if values retrieved from local storage are null or undefined
    if (savedName == '') {
        savedName = "John Doe";
    } else {
        savedName = localStorage.getItem('savedName');
        document.getElementById('name').value = savedName;
        document.getElementById('name_field').innerText = savedName;
    }

    if (savedEmail == '') {
        savedEmail = "email@example.com";
    } else {
        savedEmail = localStorage.getItem('savedEmail');
        document.getElementById('email').value = savedEmail;
        document.getElementById('email_field').innerText = savedEmail;
    }

    if (savedAddress == '') {
        savedAddress = "your street #6 your town";
    } else {
        savedAddress = localStorage.getItem('savedAddress');
        document.getElementById('address').value = savedAddress;
        document.getElementById('address_field').innerText = savedAddress;
    }

    if (savedJobTitle == '') {
        savedJobTitle = "Software Engineer";
    } else {
        savedJobTitle = localStorage.getItem('savedJobTitle');
        document.getElementById('job_title').value = savedJobTitle;
        document.getElementById('job_title_field').innerText = savedJobTitle;
    }

    if (savedPhone == '') {
        savedPhone = "+928329292344";
    } else {
        savedPhone = localStorage.getItem('savedPhone');
        document.getElementById('phone').value = savedPhone;
        document.getElementById('phone_field').innerText = savedPhone;
    }

    // Summary details
    if (savedSummary == '') {
        savedSummary = "Lorem ipsum dolor sit amit is a dummy text..";
    } else {
        savedSummary = localStorage.getItem('savedSummary');
        document.getElementById('summary').value = savedSummary;
        document.getElementById('summary_field').innerText = savedSummary;
    }


}



// // Image upload functionality
// function uploadImage() {
//     const input = document.getElementById('imageInput');
//     const file = input.files[0];

//     if (file) {
//         const reader = new FileReader();

//         reader.onload = function(e) {
//             const imageBase64 = e.target.result; // Store the base64 result
//             localStorage.setItem('uploadedImage', imageBase64); // Save to localStorage

//             const image = new Image();
//             image.src = imageBase64;
//             image.style.cssText = 'width: 100%; height: 100%; object-fit: cover; object-position: center top; border-radius: 8px;';
//             image.classList.add('uploaded-image');

//             // Update both containers
//             const containers = ['imageContainer', 'imageContainer1'];
//             containers.forEach(containerId => {
//                 const imageContainer = document.getElementById(containerId);
//                 if (imageContainer) {
//                     imageContainer.innerHTML = ''; // Clear previous content
//                     imageContainer.appendChild(image.cloneNode()); // Clone the image
//                 }
//             });

//             // Update the hidden input for base64 image
//             const imageBase64Element = document.getElementById('imageBase64');
//             if (imageBase64Element) {
//                 imageBase64Element.value = imageBase64; // Set the value to the base64 string
//                 console.log('Base64 image saved to hidden input:', imageBase64Element.value);
//             } else {
//                 console.log('Nothing');
//             }
//         };

//         reader.readAsDataURL(file);
//     } else {
//         alert('No file selected!');
//     }
// }


// Cropper for image crop
var cropper; // Declare cropper globally

// Function to upload and display the image in the modal
function uploadImage() {
    const input = document.getElementById('imageInput');
    const file = input.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const imageBase64 = e.target.result;

            // Set the image source in the modal
            const imageToCrop = document.getElementById("imageToCrop");
            imageToCrop.src = imageBase64;

            // Show the modal
            const modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
            modal.show();
        };

        reader.readAsDataURL(file);
    } else {
        alert('No file selected!');
    }
}

// Initialize cropper when the modal is shown
document.getElementById('staticBackdrop').addEventListener('shown.bs.modal', function () {
    const imageToCrop = document.getElementById("imageToCrop");
    cropper = new Cropper(imageToCrop, {
        aspectRatio: 1, // Keep the cropping area square for circular crop
        viewMode: 1,
        background: true, // Allow background to be transparent
        crop(event) {
            // Optional: handle crop event if needed
        },
        ready() {
            const cropBoxData = cropper.getCropBoxData();
            // Adjust the crop box for circular cropping
            cropper.setCropBoxData({
                left: cropBoxData.left,
                top: cropBoxData.top,
                width: Math.min(cropBoxData.width, cropBoxData.height),
                height: Math.min(cropBoxData.width, cropBoxData.height),
            });
        },
    });
});


// Cleanup and destroy cropper when modal is hidden
document.getElementById('staticBackdrop').addEventListener('hidden.bs.modal', function () {
    if (cropper) {
        cropper.destroy();
        cropper = null;
    }
});

// Function to crop the image
function cropImage() {
    if (!cropper) {
        alert("No image loaded for cropping!");
        return;
    }

    // Get the cropped canvas with transparent background
    const croppedCanvas = cropper.getCroppedCanvas({
        width: 300, // Set width to desired size
        height: 300, // Set height to desired size
        fillColor: 'transparent' // Ensure background is transparent
    });

    // Create a canvas with rounded corners
    const roundedCanvas = document.createElement('canvas');
    roundedCanvas.width = 300; // Match the desired output size
    roundedCanvas.height = 300;

    const ctx = roundedCanvas.getContext('2d');

    // Border radius size
    const radius = 15;

    // Draw a rectangle with precise rounded corners
    ctx.beginPath();
    // Top-left corner
    ctx.moveTo(30, 0);
    ctx.lineTo(300 - 30, 0); // Top edge
    ctx.quadraticCurveTo(300, 0, 300, 30); // Top-right corner
    ctx.lineTo(300, 300 - 30); // Right edge
    ctx.quadraticCurveTo(300, 300, 300 - 30, 300); // Bottom-right corner
    ctx.lineTo(30, 300); // Bottom edge
    ctx.quadraticCurveTo(0, 300, 0, 300 - 30); // Bottom-left corner
    ctx.lineTo(0, 30); // Left edge
    ctx.quadraticCurveTo(0, 0, 30, 0); // Top-left corner
    ctx.closePath();

    ctx.clip(); // Clip to the rounded rectangle


    // Draw the cropped image onto the rounded rectangle canvas
    ctx.drawImage(croppedCanvas, 0, 0);

    const base64Image = roundedCanvas.toDataURL("image/png"); // Output as PNG with transparency

    // Save the base64 image to local storage
    localStorage.setItem('uploadedImage', base64Image);

    // Update the hidden input for base64 image
    const imageBase64Element = document.getElementById('imageBase64');
    if (imageBase64Element) {
        imageBase64Element.value = base64Image; // Set the value to the base64 string
        console.log('Base64 image saved to hidden input:', imageBase64Element.value);
    }

    // Update your image display containers with the cropped rounded image
    const image = new Image();
    image.src = base64Image;
    image.style.cssText = 'width: 100%; height: auto; object-fit: cover; border-radius: 15px;'; // Apply border-radius for display
    image.classList.add('uploaded-image');

    const containers = ['imageContainer', 'imageContainer1'];
    containers.forEach(containerId => {
        const imageContainer = document.getElementById(containerId);
        if (imageContainer) {
            imageContainer.innerHTML = ''; // Clear previous content
            imageContainer.appendChild(image.cloneNode()); // Clone the image
        }
    });

    // Optionally close the modal after cropping
    const modal = bootstrap.Modal.getInstance(document.getElementById('staticBackdrop'));
    modal.hide();
}


// Load event listener to check for existing image in local storage
window.addEventListener('load', function() {
    // Check if there is an image in local storage
    const imageData = localStorage.getItem('uploadedImage');
    const imageBase64Element = document.getElementById('imageBase64');

    if (imageData && imageBase64Element) {
        // Set the value of the hidden input to the base64 string
        imageBase64Element.value = imageData;
    }
    // Load other input values if needed
    loadInputValues();
});



window.addEventListener('load', function() {
    // Get the image data from localStorage
    const imageData = localStorage.getItem('uploadedImage');
    if (imageData) {
        // Create a new Image element
        const image = new Image();
        image.src = imageData;

        // Set styles for the image
        image.style.cssText = 'width: 100%; height: 100%; object-fit: cover; object-position: center top; border-radius: 8px;';
        image.classList.add('uploaded-image');

        // Target both image containers
        const imageContainers = ['imageContainer', 'imageContainer1'];
        imageContainers.forEach(containerId => {
            const imageContainer = document.getElementById(containerId);
            if (imageContainer) {
                imageContainer.innerHTML = ''; // Clear the container
                imageContainer.appendChild(image.cloneNode()); // Clone and append the image
            }
        });

        // Hide default images if image is found
        const defaultImages = ['defaultImage', 'defaultImage1'];
        defaultImages.forEach(defaultId => {
            const defaultImage = document.getElementById(defaultId);
            if (defaultImage) {
                defaultImage.style.display = 'none'; // Hide default image
            }
        });

    } else {
        // Show both default images if no image is found in localStorage
        const defaultImages = ['defaultImage', 'defaultImage1'];
        defaultImages.forEach(defaultId => {
            const defaultImage = document.getElementById(defaultId);
            if (defaultImage) {
                defaultImage.style.display = 'block'; // Show default image
            }
        });
    }
});



// Function to update the text of elements with class 'my-name' when the input with id 'name' changes
// Default values for the fields
const defaultValues = {
    name: "John Doe",
    email: "email@example.com",
    address: "123 Main Street, City, State, Zip",
    job_title: "Software Engineer",
    phone: "(123) 456-7890",
    summary: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
};

// Function to update a specific field
function updateField(inputId, fieldId, defaultValue) {
    const inputElement = document.getElementById(inputId);
    const fieldElement = document.getElementById(fieldId);

    if (inputElement.value.length > 0) {
        fieldElement.innerText = inputElement.value;
    } else {
        fieldElement.innerText = defaultValue;
    }
    saveInputValues();
}

// Function to initialize all fields on input and load
function initializeFieldUpdates() {
    Object.keys(defaultValues).forEach(key => {
        const inputId = key;
        const fieldId = `${key}_field`;
        const defaultValue = defaultValues[key];

        // Attach event listener for input changes
        document.getElementById(inputId).addEventListener('input', function () {
            updateField(inputId, fieldId, defaultValue);
        });

        // Update the field on page load
        updateField(inputId, fieldId, defaultValue);
    });
}

// Initialize the field updates on page load
window.addEventListener('load', initializeFieldUpdates);



// document.getElementById('name').addEventListener('input', function() {
//     if (this.value.length > 0)  {
//         document.getElementById('name_field').innerText = this.value;
//     } else {
//         document.getElementById('name_field').innerText = "John Doe";
//     }
//     saveInputValues();
// });

// document.getElementById('email').addEventListener('input', function() {
//     if (this.value.length > 0)  {
//         document.getElementById('email_field').innerText = this.value;
//     } else {
//         document.getElementById('email_field').innerText = "email@example.com";
//     }
//     saveInputValues();
// });

// document.getElementById('address').addEventListener('input', function() {
//     if (this.value.length > 0)  {
//         document.getElementById('address_field').innerText = this.value;
//     } else {
//         document.getElementById('address_field').innerText = "123 Main Street, City, State, Zip";
//     }
//     saveInputValues();
// });

// document.getElementById('job_title').addEventListener('input', function() {
//     if (this.value.length > 0)  {
//         document.getElementById('job_title_field').innerText = this.value;
//     } else {
//         document.getElementById('job_title_field').innerText = "Software Engineer";
//     }
//     saveInputValues();
// });

// document.getElementById('phone').addEventListener('input', function() {
//     if (this.value.length > 0)  {
//         document.getElementById('phone_field').innerText = this.value;
//     } else {
//         document.getElementById('phone_field').innerText = "(123) 456-7890";
//     }
//     saveInputValues();
// });

// document.getElementById('summary').addEventListener('input', function() {
//     if (this.value.length > 0)  {
//         document.getElementById('summary_field').innerText = this.value;
//     } else {
//         document.getElementById('summary_field').innerText = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
//     }
//     saveInputValues();
// });




// function clearLocalStorage() {
//     localStorage.clear();
//     alert('Local storage cleared successfully!');
// }

</script>
 

<!-- Main jQuery -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap JS (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Tagify JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.0/tagify.min.js"></script>

<!-- Bootstrap Select JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"></script>
    
<!-- <script src="plugins/jquery/contact.js"></script> -->
<script src="js/main.js"></script>

<script>
    // Initialize Tagify
    var input = document.querySelector('#tag-input');
    var tagify = new Tagify(input);
    // Function to save tags to localStorage
    function saveTagsToLocalStorage(tags) {
        localStorage.setItem('tags', JSON.stringify(tags));
    }
    // Function to load tags from localStorage
    function loadTagsFromLocalStorage() {
        var savedTags = localStorage.getItem('tags');
        if (savedTags) {
            return JSON.parse(savedTags);
        }
        return [];
    }

    // Function to update the display and store tags in hidden input
    function updateTagDisplay(tags) {
        var container = document.getElementById('skills-container');
        var tagsInput = document.getElementById('tags-input');
        
        // Clear the container before updating
        container.textContent = '';
        
        if (tags.length > 0) {
            tags.forEach(tag => {
                var p = document.createElement('p');
                p.textContent = tag; // Set the tag text
                p.classList.add('mb-2');
                container.appendChild(p);
            });
        } else {
            container.textContent = "No skills added";
        }
        
        // Set tags as a comma-separated string in the hidden input
        tagsInput.value = tags.join(", ");
    }



    // Load saved tags on page load and populate Tagify without triggering the 'add' event
    function initializeTags() {
        var savedTags = loadTagsFromLocalStorage();
        if (savedTags.length > 0) {
            // Disable event listeners temporarily to prevent firing 'add' events
            tagify.off('add');
            tagify.off('remove');
            // Clear the input field and add tags programmatically
            tagify.removeAllTags();
            tagify.addTags(savedTags); // Add saved tags without triggering the 'add' event
            // Re-enable event listeners after loading tags
            tagify.on('add', handleTagAdd);
            tagify.on('remove', handleTagRemove);
            // Update the display
            updateTagDisplay(savedTags);
        }
    }

    // Event handler for when a tag is added
    function handleTagAdd(e) {
        var addedTag = e.detail.data.value;
        // Get the current tags from localStorage
        var tags = loadTagsFromLocalStorage();
        tags.push(addedTag);
        // Save the updated tags to localStorage
        saveTagsToLocalStorage(tags);
        // Update the tag display
        updateTagDisplay(tags);
    }

    // Event handler for when a tag is removed
    function handleTagRemove(e) {
        var removedTag = e.detail.data.value;
        // Get the current tags from localStorage
        var tags = loadTagsFromLocalStorage();
        // Remove the tag from the array
        tags = tags.filter(tag => tag !== removedTag);
        // Save the updated tags to localStorage
        saveTagsToLocalStorage(tags);
        // Update the tag display
        updateTagDisplay(tags);
    }

    // Initialize tags on window load
    // window.onload = function() {
    //     initializeTags();
    //     // Add event listeners for tag add/remove after initialization
    //     tagify.on('add', handleTagAdd);
    //     tagify.on('remove', handleTagRemove);
    // };



    // Languages Tagify
    // Initialize Tagify
var langInput = document.querySelector('#language-input');
var langTagify = new Tagify(langInput);

// Function to save tags to localStorage
function saveLangTagsToLocalStorage(languages) {
    localStorage.setItem('languages', JSON.stringify(languages));
}

// Function to load tags from localStorage
function loadLangTagsFromLocalStorage() {
    var savedLangTags = localStorage.getItem('languages');
    if (savedLangTags) {
        return JSON.parse(savedLangTags);
    }
    return [];
}

// Function to update the display and store tags in hidden input
function updateLangTagDisplay(languages_tags) {
    var container = document.getElementById('languages-container');
    var langTagsInput = document.getElementById('languages-input');
    
    // Clear the container before updating
    container.textContent = '';
    
    if (languages_tags.length > 0) {
        languages_tags.forEach(tag => {
            var p = document.createElement('p');
            p.textContent = tag; // Set the tag text
            p.classList.add('mb-2');
            container.appendChild(p);
        });
    } else {
        container.textContent = "No languages added";
    }
    
    // Set tags as a comma-separated string in the hidden input
    langTagsInput.value = languages_tags.join(", ");
}

// Load saved tags on page load and populate Tagify without triggering the 'add' event
function initializeLangTags() {
    var savedLangTags = loadLangTagsFromLocalStorage();
    if (savedLangTags.length > 0) {
        // Disable event listeners temporarily to prevent firing 'add' events
        langTagify.off('add');
        langTagify.off('remove');
        // Clear the input field and add tags programmatically
        langTagify.removeAllTags();
        langTagify.addTags(savedLangTags); // Add saved tags without triggering the 'add' event
        // Re-enable event listeners after loading tags
        langTagify.on('add', handleLangTagAdd);
        langTagify.on('remove', handleLangTagRemove);
        // Update the display
        updateLangTagDisplay(savedLangTags);
    }
}

// Event handler for when a tag is added
function handleLangTagAdd(e) {
    var addedTag = e.detail.data.value;
    // Get the current tags from localStorage
    var languages_tags = loadLangTagsFromLocalStorage();
    languages_tags.push(addedTag);
    // Save the updated tags to localStorage
    saveLangTagsToLocalStorage(languages_tags);
    // Update the tag display
    updateLangTagDisplay(languages_tags);
}

// Event handler for when a tag is removed
function handleLangTagRemove(e) {
    var removedTag = e.detail.data.value;
    // Get the current tags from localStorage
    var languages_tags = loadLangTagsFromLocalStorage();
    // Remove the tag from the array
    languages_tags = languages_tags.filter(languages_tags => languages_tags !== removedTag);
    // Save the updated tags to localStorage
    saveLangTagsToLocalStorage(languages_tags);
    // Update the tag display
    updateLangTagDisplay(languages_tags);
}

// Initialize tags on window load
window.onload = function() {
    initializeTags();
    // Add event listeners for tag add/remove after initialization
    tagify.on('add', handleTagAdd);
    tagify.on('remove', handleTagRemove);

    initializeLangTags();
    // Add event listeners for tag add/remove after initialization
    langTagify.on('add', handleLangTagAdd);
    langTagify.on('remove', handleLangTagRemove);
};


// Function to initialize selectpickers
function initializeSelectPickers() {
    $('.selectpicker').selectpicker();
}


// Function to dynamically populate year dropdowns
// Function to populate years dynamically
function populateYearDropdowns() {
    const startYearSelect = document.getElementById('startYearPicker1');
    const endYearSelect = document.getElementById('endYearPicker1');
    
    // const startYear = 1970;
    // const numberOfYears = 61;
    
    // // Clear any existing options
    // startYearSelect.innerHTML = '';
    // endYearSelect.innerHTML = '';
    
    // // Populate the year dropdowns with dynamic options
    // for (let i = 0; i < numberOfYears; i++) {
    //     const year = startYear + i;
        
    //     // Create option elements
    //     const startYearOption = document.createElement('option');
    //     startYearOption.value = year;
    //     startYearOption.textContent = year;
    //     startYearSelect.appendChild(startYearOption);
        
    //     const endYearOption = document.createElement('option');
    //     endYearOption.value = year;
    //     endYearOption.textContent = year;
    //     endYearSelect.appendChild(endYearOption);
    // }

    // Current year
    const startYear = new Date().getFullYear() + 5;
    const endYear = 1980; // Past year to stop at

    // Clear existing options
    startYearSelect.innerHTML = '';
    endYearSelect.innerHTML = '';

    // Add placeholder option
    const placeholderOptionStart = document.createElement('option');
    placeholderOptionStart.value = '';
    placeholderOptionStart.textContent = 'Select start year';
    placeholderOptionStart.disabled = true;
    placeholderOptionStart.selected = true;
    placeholderOptionStart.classList.add('d-none');
    startYearSelect.appendChild(placeholderOptionStart);

    const placeholderOptionEnd = document.createElement('option');
    placeholderOptionEnd.value = '';
    placeholderOptionEnd.textContent = 'Select end year';
    placeholderOptionEnd.disabled = true;
    placeholderOptionEnd.selected = true;
    placeholderOptionEnd.classList.add('d-none');
    endYearSelect.appendChild(placeholderOptionEnd);

    // Loop to add years from current year to 1980
    for (let year = startYear; year >= endYear; year--) {
        const startYearOption = document.createElement('option');
        startYearOption.value = year;
        startYearOption.textContent = year;
        startYearSelect.appendChild(startYearOption);

        const endYearOption = document.createElement('option');
        endYearOption.value = year;
        endYearOption.textContent = year;
        endYearSelect.appendChild(endYearOption);
    }
    
    // Properly re-initialize the selectpicker
    $('#startYearPicker1').selectpicker('destroy').selectpicker();
    $('#endYearPicker1').selectpicker('destroy').selectpicker();

}

// Function to update the displayed education details and save data to local storage
function updateEducationDisplayAndSave() {
    // Get user inputs
    const degreeTitle = document.getElementById('degree_title1').value || 'Msc (cs)'; // Default value if empty
    const institutionTitle = document.getElementById('institution_title1').value || 'GCUF Lahore'; // Default value if empty
    const startMonth = document.getElementById('startMonthPicker1').value || 'October'; // Default value if empty
    const startYear = document.getElementById('startYearPicker1').value || '2018'; // Default value if empty
    const endMonth = document.getElementById('endMonthPicker1').value || 'October'; // Default value if empty
    const endYear = document.getElementById('endYearPicker1').value || '2022'; // Default value if empty

    // Update the relevant <p> tags with user input
    document.getElementById('edu_title_field').innerText = degreeTitle;
    document.getElementById('edu_institution_field').innerText = institutionTitle;
    document.getElementById('edu_date_field').innerText = `${startMonth} ${startYear} - ${endMonth} ${endYear}`;

    // Save the data to local storage
    const educationData = {
        degreeTitle,
        institutionTitle,
        startMonth,
        startYear,
        endMonth,
        endYear
    };

    localStorage.setItem('educationData', JSON.stringify(educationData));

    // Update hidden inputs for form submission
    updateHiddenInputs(degreeTitle, institutionTitle, startMonth, startYear, endMonth, endYear);
}

// Function to update hidden inputs for form submission
function updateHiddenInputs(degreeTitle, institutionTitle, startMonth, startYear, endMonth, endYear) {
    document.getElementById('degree_title_hidden').value = degreeTitle;
    document.getElementById('institution_title_hidden').value = institutionTitle;
    document.getElementById('start_month_hidden').value = startMonth;
    document.getElementById('start_year_hidden').value = startYear;
    document.getElementById('end_month_hidden').value = endMonth;
    document.getElementById('end_year_hidden').value = endYear;
}

// Add event listeners to input fields and selects to trigger the update function
document.getElementById('degree_title1').addEventListener('input', updateEducationDisplayAndSave);
document.getElementById('institution_title1').addEventListener('input', updateEducationDisplayAndSave);
document.getElementById('startMonthPicker1').addEventListener('change', updateEducationDisplayAndSave);
document.getElementById('startYearPicker1').addEventListener('change', updateEducationDisplayAndSave);
document.getElementById('endMonthPicker1').addEventListener('change', updateEducationDisplayAndSave);
document.getElementById('endYearPicker1').addEventListener('change', updateEducationDisplayAndSave);

// Function to load saved data from local storage
function loadSavedData() {
    const savedData = JSON.parse(localStorage.getItem('educationData'));

    if (savedData) {
        // Populate the fields with saved data
        document.getElementById('degree_title1').value = savedData.degreeTitle;
        document.getElementById('institution_title1').value = savedData.institutionTitle;
        document.getElementById('startMonthPicker1').value = savedData.startMonth;
        document.getElementById('startYearPicker1').value = savedData.startYear;
        document.getElementById('endMonthPicker1').value = savedData.endMonth;
        document.getElementById('endYearPicker1').value = savedData.endYear;

        // Re-initialize selectpicker to apply the changes
        $('#startMonthPicker1').selectpicker('destroy').selectpicker();
        $('#startYearPicker1').selectpicker('destroy').selectpicker();
        $('#endMonthPicker1').selectpicker('destroy').selectpicker();
        $('#endYearPicker1').selectpicker('destroy').selectpicker();

        // Update the display with saved data
        document.getElementById('edu_title_field').innerText = savedData.degreeTitle;
        document.getElementById('edu_institution_field').innerText = savedData.institutionTitle;
        document.getElementById('edu_date_field').innerText = `${savedData.startMonth} ${savedData.startYear} - ${savedData.endMonth} ${savedData.endYear}`;

        // Update hidden inputs with saved data
        updateHiddenInputs(
            savedData.degreeTitle,
            savedData.institutionTitle,
            savedData.startMonth,
            savedData.startYear,
            savedData.endMonth,
            savedData.endYear
        );
    }
}

// Initialize the page with saved data from local storage (if available)
document.addEventListener('DOMContentLoaded', () => {
    populateYearDropdowns(); // Populate year dropdowns dynamically
    loadSavedData(); // Load saved data when the page is loaded
});





// Start Experience section no 1
// Function to populate years dynamically
function populateExpYearDropdowns() {
    const startYearSelect = document.getElementById('startYearPicker2');

    // Current year and end year
    const startYear = new Date().getFullYear() + 5;
    const endYear = 1980;

    // Clear existing options
    startYearSelect.innerHTML = '';

    // Add placeholder option
    const placeholderOptionStart = document.createElement('option');
    placeholderOptionStart.value = '';
    placeholderOptionStart.textContent = 'Select start year';
    placeholderOptionStart.disabled = true;
    placeholderOptionStart.selected = true;
    placeholderOptionStart.classList.add('d-none');
    startYearSelect.appendChild(placeholderOptionStart);

    // Loop to add years from current year + 5 to 1980
    for (let year = startYear; year >= endYear; year--) {
        const startYearOption = document.createElement('option');
        startYearOption.value = year;
        startYearOption.textContent = year;
        startYearSelect.appendChild(startYearOption);
    }

    // Reinitialize the select picker (if using Bootstrap selectpicker)
    $('#startYearPicker2').selectpicker('destroy').selectpicker();
}


// Function to update the displayed experience details and save data to local storage
function updateExperienceDisplayAndSave() {
    const jobTitle = document.getElementById('exp_job_title').value || 'UI/UX Designer';
    const companyTitle = document.getElementById('company_title').value || 'GCUF Lahore';
    const startMonth = document.getElementById('startMonthPicker2').value || 'Select start month';
    const startYear = document.getElementById('startYearPicker2').value || 'Select start year';

    const endDate = "Still working here";

    document.getElementById('exp_job_title_field').innerText = jobTitle;
    document.getElementById('company_field').innerText = companyTitle;
    document.getElementById('job_date_field').innerText = `${startMonth} ${startYear} - ${endDate}`;

    const experienceData = {
        jobTitle,
        companyTitle,
        startMonth,
        startYear,
        endDate
    };

    localStorage.setItem('experienceData', JSON.stringify(experienceData));

    updateExpHiddenInputs(jobTitle, companyTitle, startMonth, startYear, endDate);
}

// Function to update hidden inputs for form submission
function updateExpHiddenInputs(jobTitle, companyTitle, startMonth, startYear, endDate) {
    document.getElementById('exp_job_title_hidden').value = jobTitle;
    document.getElementById('exp_comapny_title_hidden').value = companyTitle;
    document.getElementById('exp_start_month_hidden').value = startMonth;
    document.getElementById('exp_start_year_hidden').value = startYear;
    document.getElementById('exp_end_date_hidden').value = endDate;
}

// Add event listeners to input fields and selects to trigger the update function
document.getElementById('exp_job_title').addEventListener('input', updateExperienceDisplayAndSave);
document.getElementById('company_title').addEventListener('input', updateExperienceDisplayAndSave);
document.getElementById('startMonthPicker2').addEventListener('change', updateExperienceDisplayAndSave);
document.getElementById('startYearPicker2').addEventListener('change', updateExperienceDisplayAndSave);

// Function to load saved data from local storage
function expLoadSavedData() {
    const savedData = JSON.parse(localStorage.getItem('experienceData'));

    if (savedData) {
        document.getElementById('exp_job_title').value = savedData.jobTitle;
        document.getElementById('company_title').value = savedData.companyTitle;
        document.getElementById('startMonthPicker2').value = savedData.startMonth;
        document.getElementById('startYearPicker2').value = savedData.startYear;

        const endDate = "Still working here";

        $('#startMonthPicker2').selectpicker('destroy').selectpicker();
        $('#startYearPicker2').selectpicker('destroy').selectpicker();

        document.getElementById('exp_job_title_field').innerText = savedData.jobTitle;
        document.getElementById('company_field').innerText = savedData.companyTitle;
        document.getElementById('job_date_field').innerText = `${savedData.startMonth} ${savedData.startYear} - ${endDate}`;

        updateExpHiddenInputs(
            savedData.jobTitle,
            savedData.companyTitle,
            savedData.startMonth,
            savedData.startYear,
            endDate
        );
    }
}

// Initialize the dropdowns on page load
document.addEventListener('DOMContentLoaded', () => {
    populateExpYearDropdowns();
    expLoadSavedData();
});




// For experience 2 record
// Function to populate years dynamically
function exp1PopulateExpYearDropdowns() {
    const startYearSelect = document.getElementById('startYearPicker3');
    const endYearSelect = document.getElementById('endYearPicker3');

    // Current year
    const startYear = new Date().getFullYear() + 5;
    const endYear = 1980; // Past year to stop at

    // Clear existing options
    startYearSelect.innerHTML = '';
    endYearSelect.innerHTML = '';

    // Add placeholder option
    const placeholderOptionStart = document.createElement('option');
    placeholderOptionStart.value = '';
    placeholderOptionStart.textContent = 'Select start year';
    placeholderOptionStart.disabled = true;
    placeholderOptionStart.selected = true;
    placeholderOptionStart.classList.add('d-none');
    startYearSelect.appendChild(placeholderOptionStart);

    const placeholderOptionEnd = document.createElement('option');
    placeholderOptionEnd.value = '';
    placeholderOptionEnd.textContent = 'Select end year';
    placeholderOptionEnd.disabled = true;
    placeholderOptionEnd.selected = true;
    placeholderOptionEnd.classList.add('d-none');
    endYearSelect.appendChild(placeholderOptionEnd);

    // Loop to add years from current year to 1980
    for (let year = startYear; year >= endYear; year--) {
        const startYearOption = document.createElement('option');
        startYearOption.value = year;
        startYearOption.textContent = year;
        startYearSelect.appendChild(startYearOption);

        const endYearOption = document.createElement('option');
        endYearOption.value = year;
        endYearOption.textContent = year;
        endYearSelect.appendChild(endYearOption);
    }

    // Reinitialize the select picker (if using Bootstrap selectpicker)
    $('#startYearPicker3').selectpicker('destroy').selectpicker();
    $('#endYearPicker3').selectpicker('destroy').selectpicker();
}


// Function to update the displayed experience details and save data to local storage
function updateExperienceDisplayAndSave1() {
    const jobTitle = document.getElementById('exp_job_title1').value || 'UI/UX Designer';
    const companyTitle = document.getElementById('company_title1').value || 'GCUF Lahore';
    const startMonth = document.getElementById('startMonthPicker3').value || 'Select start month';
    const startYear = document.getElementById('startYearPicker3').value || 'Select start year';
    const endMonth = document.getElementById('endMonthPicker3').value || 'Select end month';
    const endYear = document.getElementById('endYearPicker3').value || 'Select end year';

    document.getElementById('exp_job_title_field1').innerText = jobTitle;
    document.getElementById('company_field1').innerText = companyTitle;
    document.getElementById('job_date_field1').innerText = `${startMonth} ${startYear} - ${endMonth} ${endYear}`;

    const experienceData1 = {
        jobTitle,
        companyTitle,
        startMonth,
        startYear,
        endMonth,
        endYear
    };

    localStorage.setItem('experienceData1', JSON.stringify(experienceData1));

    updateExpHiddenInputs1(jobTitle, companyTitle, startMonth, startYear, endMonth, endYear);
}

// Function to update hidden inputs for form submission
function updateExpHiddenInputs1(jobTitle, companyTitle, startMonth, startYear, endMonth, endYear) {
    document.getElementById('exp_job_title_hidden1').value = jobTitle;
    document.getElementById('exp_comapny_title_hidden1').value = companyTitle;
    document.getElementById('exp_start_month_hidden1').value = startMonth;
    document.getElementById('exp_start_year_hidden1').value = startYear;
    document.getElementById('exp_end_month_hidden1').value = endMonth;
    document.getElementById('exp_end_year_hidden1').value = endYear;
}

// Add event listeners to input fields and selects to trigger the update function
document.getElementById('exp_job_title1').addEventListener('input', updateExperienceDisplayAndSave1);
document.getElementById('company_title1').addEventListener('input', updateExperienceDisplayAndSave1);
document.getElementById('startMonthPicker3').addEventListener('change', updateExperienceDisplayAndSave1);
document.getElementById('startYearPicker3').addEventListener('change', updateExperienceDisplayAndSave1);
document.getElementById('endMonthPicker3').addEventListener('change', updateExperienceDisplayAndSave1);
document.getElementById('endYearPicker3').addEventListener('change', updateExperienceDisplayAndSave1);

// Function to load saved data from local storage
function exp1LoadSavedData() {
    const savedData = JSON.parse(localStorage.getItem('experienceData1'));

    if (savedData) {
        document.getElementById('exp_job_title1').value = savedData.jobTitle;
        document.getElementById('company_title1').value = savedData.companyTitle;
        document.getElementById('startMonthPicker3').value = savedData.startMonth;
        document.getElementById('startYearPicker3').value = savedData.startYear;
        document.getElementById('endMonthPicker3').value = savedData.endMonth;
        document.getElementById('endYearPicker3').value = savedData.endYear;

        $('#startMonthPicker3').selectpicker('destroy').selectpicker();
        $('#startYearPicker3').selectpicker('destroy').selectpicker();
        $('#endMonthPicker3').selectpicker('destroy').selectpicker();
        $('#endYearPicker3').selectpicker('destroy').selectpicker();

        document.getElementById('exp_job_title_field1').innerText = savedData.jobTitle;
        document.getElementById('company_field1').innerText = savedData.companyTitle;
        document.getElementById('job_date_field1').innerText = `${savedData.startMonth} ${savedData.startYear} - ${savedData.endMonth} ${savedData.endYear}`;

        updateExpHiddenInputs1(
            savedData.jobTitle,
            savedData.companyTitle,
            savedData.startMonth,
            savedData.startYear,
            savedData.endMonth,
            savedData.endYear
        );
    }
}

// Function to clear all the input fields and reset select pickers
function clearExperienceFields() {

    // Also clear the corresponding hidden inputs
    document.getElementById('exp_job_title_hidden1').value = '';
    document.getElementById('exp_comapny_title_hidden1').value = '';
    document.getElementById('exp_start_month_hidden1').value = '';
    document.getElementById('exp_start_year_hidden1').value = '';
    document.getElementById('exp_end_month_hidden1').value = '';
    document.getElementById('exp_end_year_hidden1').value = '';

    // Remove data from local storage
    localStorage.removeItem('experienceData1');
}

// Function to toggle the visibility of divs based on local storage data
function toggleExperienceSections() {
    const experienceData = localStorage.getItem('experienceData1');

    // Check if localStorage contains data for 'experienceData1'
    if (experienceData) {
        // document.querySelector('.experience1').style.display = 'block';
        // document.querySelector('.experience-section1').style.display = 'block';
        // Call functions if the data is exists
        exp1PopulateExpYearDropdowns();
        exp1LoadSavedData();
    } else {
        // document.querySelector('.experience1').remove();
        // document.querySelector('.experience-section1').remove();
        // document.querySelector('.experience1').style.display = 'none';
        // document.querySelector('.experience-section1').style.display = 'none';
        exp1PopulateExpYearDropdowns();
    }
}
// Call the function on page load
document.addEventListener('DOMContentLoaded', toggleExperienceSections);

// Add event listener to the "Remove Record" button
document.getElementById('exp1').addEventListener('click', () => {
    clearExperienceFields();
    // Loop through all selected elements
    let experience1 = document.querySelector('.experience1');
    if (experience1) {
        experience1.style.display = 'none';
        // Select all input and select elements within the experience
        const inputs = experience1.querySelectorAll('input[type="text"]');
        const selectPickers = experience1.querySelectorAll('select');
        // Clear the values of all input elements
        inputs.forEach(input => {
            input.value = '';
        });
        // Clear the values of all select elements
        selectPickers.forEach(select => {
            select.value = '';
        });
    }

    // Select all elements with the given class names
    let experienceSection1 = document.querySelectorAll('.experience-section1');
    experienceSection1.forEach((expResume) => {
        const placeholders = [
            "UI/UX Designer",
            "GCUF Lahore",
            "October 2018 - October 2022"
        ];
        const paragraphs = expResume.querySelectorAll('p');
        paragraphs.forEach((p, i) => {
            p.textContent = placeholders[i] || "Placeholder Text";
        });
    });


});




// For experience 3 record
// Function to populate years dynamically
function exp2PopulateExpYearDropdowns() {
    const startYearSelect = document.getElementById('startYearPicker4');
    const endYearSelect = document.getElementById('endYearPicker4');

    // Current year
    const startYear = new Date().getFullYear() + 5;
    const endYear = 1978; // Past year to stop at

    // Clear existing options
    startYearSelect.innerHTML = '';
    endYearSelect.innerHTML = '';

    // Add placeholder option
    const placeholderOptionStart = document.createElement('option');
    placeholderOptionStart.value = '';
    placeholderOptionStart.textContent = 'Select start year';
    placeholderOptionStart.disabled = true;
    placeholderOptionStart.selected = true;
    placeholderOptionStart.classList.add('d-none');
    startYearSelect.appendChild(placeholderOptionStart);

    const placeholderOptionEnd = document.createElement('option');
    placeholderOptionEnd.value = '';
    placeholderOptionEnd.textContent = 'Select end year';
    placeholderOptionEnd.disabled = true;
    placeholderOptionEnd.selected = true;
    placeholderOptionEnd.classList.add('d-none');
    endYearSelect.appendChild(placeholderOptionEnd);

    // Loop to add years from current year to 1980
    for (let year = startYear; year >= endYear; year--) {
        const startYearOption = document.createElement('option');
        startYearOption.value = year;
        startYearOption.textContent = year;
        startYearSelect.appendChild(startYearOption);

        const endYearOption = document.createElement('option');
        endYearOption.value = year;
        endYearOption.textContent = year;
        endYearSelect.appendChild(endYearOption);
    }

    // Reinitialize the select picker (if using Bootstrap selectpicker)
    $('#startYearPicker4').selectpicker('destroy').selectpicker();
    $('#endYearPicker4').selectpicker('destroy').selectpicker();
}

// Function to update the displayed experience details and save data to local storage
function updateExperienceDisplayAndSave2() {
    const jobTitle = document.getElementById('exp_job_title2').value || 'UI/UX Designer';
    const companyTitle = document.getElementById('company_title2').value || 'GCUF Lahore';
    const startMonth = document.getElementById('startMonthPicker4').value || 'October';
    const startYear = document.getElementById('startYearPicker4').value || '2018';
    const endMonth = document.getElementById('endMonthPicker4').value || 'October';
    const endYear = document.getElementById('endYearPicker4').value || '2022';

    document.getElementById('exp_job_title_field2').innerText = jobTitle;
    document.getElementById('company_field2').innerText = companyTitle;
    document.getElementById('job_date_field2').innerText = `${startMonth} ${startYear} - ${endMonth} ${endYear}`;

    const experienceData2 = {
        jobTitle,
        companyTitle,
        startMonth,
        startYear,
        endMonth,
        endYear
    };

    localStorage.setItem('experienceData2', JSON.stringify(experienceData2));

    updateExpHiddenInputs2(jobTitle, companyTitle, startMonth, startYear, endMonth, endYear);
}

// Function to update hidden inputs for form submission
function updateExpHiddenInputs2(jobTitle, companyTitle, startMonth, startYear, endMonth, endYear) {
    document.getElementById('exp_job_title_hidden2').value = jobTitle;
    document.getElementById('exp_comapny_title_hidden2').value = companyTitle;
    document.getElementById('exp_start_month_hidden2').value = startMonth;
    document.getElementById('exp_start_year_hidden2').value = startYear;
    document.getElementById('exp_end_month_hidden2').value = endMonth;
    document.getElementById('exp_end_year_hidden2').value = endYear;
}

// Add event listeners to input fields and selects to trigger the update function
document.getElementById('exp_job_title2').addEventListener('input', updateExperienceDisplayAndSave2);
document.getElementById('company_title2').addEventListener('input', updateExperienceDisplayAndSave2);
document.getElementById('startMonthPicker4').addEventListener('change', updateExperienceDisplayAndSave2);
document.getElementById('startYearPicker4').addEventListener('change', updateExperienceDisplayAndSave2);
document.getElementById('endMonthPicker4').addEventListener('change', updateExperienceDisplayAndSave2);
document.getElementById('endYearPicker4').addEventListener('change', updateExperienceDisplayAndSave2);

// Function to load saved data from local storage
function exp2LoadSavedData() {
    const savedData = JSON.parse(localStorage.getItem('experienceData2'));

    if (savedData) {
        document.getElementById('exp_job_title2').value = savedData.jobTitle;
        document.getElementById('company_title2').value = savedData.companyTitle;
        document.getElementById('startMonthPicker4').value = savedData.startMonth;
        document.getElementById('startYearPicker4').value = savedData.startYear;
        document.getElementById('endMonthPicker4').value = savedData.endMonth;
        document.getElementById('endYearPicker4').value = savedData.endYear;

        $('#startMonthPicker4').selectpicker('destroy').selectpicker();
        $('#startYearPicker4').selectpicker('destroy').selectpicker();
        $('#endMonthPicker4').selectpicker('destroy').selectpicker();
        $('#endYearPicker4').selectpicker('destroy').selectpicker();

        document.getElementById('exp_job_title_field2').innerText = savedData.jobTitle;
        document.getElementById('company_field2').innerText = savedData.companyTitle;
        document.getElementById('job_date_field2').innerText = `${savedData.startMonth} ${savedData.startYear} - ${savedData.endMonth} ${savedData.endYear}`;

        updateExpHiddenInputs2(
            savedData.jobTitle,
            savedData.companyTitle,
            savedData.startMonth,
            savedData.startYear,
            savedData.endMonth,
            savedData.endYear
        );
    }
}

// Function to clear all the input fields and reset select pickers
function clearExperienceFields1() {

    // Also clear the corresponding hidden inputs
    document.getElementById('exp_job_title_hidden2').value = '';
    document.getElementById('exp_comapny_title_hidden2').value = '';
    document.getElementById('exp_start_month_hidden2').value = '';
    document.getElementById('exp_start_year_hidden2').value = '';
    document.getElementById('exp_end_month_hidden2').value = '';
    document.getElementById('exp_end_year_hidden2').value = '';

    // document.getElementById('experience-section2').style.display = 'none';
    // document.querySelector('.experience2').style.display = 'none';

    // Remove data from local storage
    localStorage.removeItem('experienceData2');
}

// Function to toggle the visibility of divs based on local storage data
function toggleExperienceSections1() {
    const experienceData = localStorage.getItem('experienceData2');

    // Check if localStorage contains data for 'experienceData1'
    if (experienceData) {
        // document.querySelector('.experience2').style.display = 'block';
        // document.querySelector('.experience-section2').style.display = 'block';
        // Call functions if the data is exists
        exp2PopulateExpYearDropdowns();
        exp2LoadSavedData();
    } else {
        // document.querySelector('.experience1').remove();
        // document.querySelector('.experience-section1').remove();
        // document.querySelector('.experience2').style.display = 'none';
        // document.querySelector('.experience-section2').style.display = 'none';
        exp2PopulateExpYearDropdowns();
    }
}
// Call the function on page load
document.addEventListener('DOMContentLoaded', toggleExperienceSections1);
// Add event listener to the "Remove Record" button

// Add event listener to the "Remove Record" button
document.getElementById('exp2').addEventListener('click', () => {
    clearExperienceFields1();
    // Loop through all selected elements
    let experience2 = document.querySelector('.experience2');
    if (experience2) {
        experience2.style.display = 'none';
        // Select all input and select elements within the experience
        const inputs = experience2.querySelectorAll('input[type="text"]');
        const selectPickers = experience2.querySelectorAll('select');
        // Clear the values of all input elements
        inputs.forEach(input => {
            input.value = '';
        });
        // Clear the values of all select elements
        selectPickers.forEach(select => {
            select.value = '';
        });
    }

    // Select all elements with the given class names
    let experienceSection1 = document.querySelectorAll('.experience-section2');
    experienceSection1.forEach((expResume) => {
        const placeholders = [
            "UI/UX Designer",
            "GCUF Lahore",
            "October 2018 - October 2022"
        ];
        const paragraphs = expResume.querySelectorAll('p');
        paragraphs.forEach((p, i) => {
            p.textContent = placeholders[i] || "Placeholder Text";
        });
    });

});


// function showMoreExperience() {
//     document.querySelector('.experience1').style.display = 'block';
//     document.querySelector('.experience-section1').style.display = 'block';
//     document.querySelector('.experience2').style.display = 'block';
//     document.querySelector('.experience-section2').style.display = 'block';
// }

// document.getElementById('addMoreExperience').addEventListener('click', () => {
//     event.target.style.display = 'none';
//     showMoreExperience();
//     exp1PopulateExpYearDropdowns();
//     exp2PopulateExpYearDropdowns();
// });

document.addEventListener('DOMContentLoaded', () => {
    // exp1PopulateExpYearDropdowns();
    // exp2PopulateExpYearDropdowns();
    document.querySelectorAll('[required]').forEach(field => {
        if (field.offsetParent === null) {
            field.removeAttribute('required');
        }
    });
});





// For Portfolio records record 1
// Function to update the displayed experience details and save data to local storage
function updatePortfolioDisplayAndSave() {
    // Fetch input values or use default placeholders
    const portfolioTitle = document.getElementById('portfolio_title').value.trim() || 'Portfolio';
    const portfolioLink = document.getElementById('portfolio_link').value.trim() || 'example.com';
    const portfolioDetail = document.getElementById('portfolio_detail').value.trim() || 'Lorem ipsum';

    // Format the link to ensure https:// prefix
    const formattedLink = 'https://' + portfolioLink.replace(/^https?:\/\//, '');

    // Update visible fields
    document.getElementById('portfolio_title_field').innerText = portfolioTitle;
    document.getElementById('portfolio_detail_field').innerText = portfolioDetail;

    const portfolioLinkField = document.getElementById('portfolio_link_field');
    portfolioLinkField.innerText = portfolioLink;
    portfolioLinkField.href = formattedLink;
    portfolioLinkField.setAttribute('target', '_blank');

    // Save data to local storage
    const portfolioData = {
        portfolioTitle,
        portfolioLink, // Original value without https:// for display
        portfolioDetail,
    };

    // Debug: Log data being saved
    localStorage.setItem('portfolioData', JSON.stringify(portfolioData));
    // Update hidden inputs for form submission
    updatePortHiddenInputs(portfolioTitle, portfolioLink, portfolioDetail);
}


// Function to update hidden inputs for form submission
function updatePortHiddenInputs(portfolioTitle, portfolioLink, portfolioDetail) {
    const formattedLink = 'https://' + portfolioLink.replace(/^https?:\/\//, ''); // Ensure https:// prefix
    document.getElementById('portfolio_title_hidden').value = portfolioTitle;
    document.getElementById('portfolio_link_text_hidden').value = portfolioLink;
    document.getElementById('portfolio_link_hidden').value = formattedLink; // Link Save with https
    document.getElementById('portfolio_detail_hidden').value = portfolioDetail; 
}

// Add event listeners to input fields and selects to trigger the update function
document.getElementById('portfolio_title').addEventListener('input', updatePortfolioDisplayAndSave);
document.getElementById('portfolio_link').addEventListener('input', updatePortfolioDisplayAndSave);
document.getElementById('portfolio_detail').addEventListener('input', updatePortfolioDisplayAndSave);

// Function to load saved data from local storage
function portLoadSavedData() {
    const savedData = JSON.parse(localStorage.getItem('portfolioData'));

    if (savedData) {
        document.getElementById('portfolio_title').value = savedData.portfolioTitle;
        document.getElementById('portfolio_link').value = savedData.portfolioLink;
        document.getElementById('portfolio_detail').value = savedData.portfolioDetail;

        document.getElementById('portfolio_title_field').innerText = savedData.portfolioTitle;
        document.getElementById('portfolio_link_field').innerText = savedData.portfolioLink;
        document.getElementById('portfolio_link_field').href = 'https://' + savedData.portfolioLink;
        document.getElementById('portfolio_detail_field').innerText = savedData.portfolioDetail;

        // updatePortHiddenInputs(
        //     savedData.portfolioTitle,
        //     savedData.portfolioLink,
        //     savedData.portfolioDetail,
        // );
        // Pass the formatted link explicitly
        const formattedLink = 'https://' + savedData.portfolioLink.replace(/^https?:\/\//, '');
        updatePortHiddenInputs(
            savedData.portfolioTitle,
            savedData.portfolioLink,
            savedData.portfolioDetail,
        );
    }
}


// For Portfolio records record 2
// Function to update the displayed experience details and save data to local storage
function updatePortfolioDisplayAndSave1() {
    const portfolioTitle = document.getElementById('portfolio_title1').value.trim() || 'Portfolio';
    const portfolioLink = document.getElementById('portfolio_link1').value.trim() || 'example.com';
    let portfolioDetail = document.getElementById('portfolio_detail1').value.trim() || 'Lorem ipsum';

    // Format the link to ensure https:// prefix
    const formattedLink = 'https://' + portfolioLink.replace(/^https?:\/\//, '');

    // Update visible fields
    document.getElementById('portfolio_title_field1').innerText = portfolioTitle;
    document.getElementById('portfolio_detail_field1').innerText = portfolioDetail;

    const portfolioLinkField = document.getElementById('portfolio_link_field1');
    portfolioLinkField.innerText = portfolioLink;
    portfolioLinkField.href = formattedLink;
    portfolioLinkField.setAttribute('target', '_blank');

    const portfolioData1 = {
        portfolioTitle,
        portfolioLink,
        portfolioDetail,
    };

    // Debug: Log data being saved
    // console.log('Saving to Local Storage:', portfolioData1);

    localStorage.setItem('portfolioData1', JSON.stringify(portfolioData1));
    updatePortHiddenInputs(portfolioTitle, portfolioLink, portfolioDetail);

    // Debug after updating hidden inputs
    // console.log('After Hidden Input Update:', {
    //     portfolioTitleHidden: document.getElementById('portfolio_title_hidden1').value,
    //     portfolioLinkHidden: document.getElementById('portfolio_link_hidden1').value,
    //     portfolioDetailHidden: document.getElementById('portfolio_detail_hidden1').value,
    // });
}

// Function to update hidden inputs for form submission
function updatePortHiddenInputs1(portfolioTitle, portfolioLink, portfolioDetail) {
    const formattedLink = 'https://' + portfolioLink.replace(/^https?:\/\//, ''); // Ensure https:// prefix
    document.getElementById('portfolio_title_hidden1').value = portfolioTitle;
    document.getElementById('portfolio_link_text_hidden1').value = portfolioLink;
    document.getElementById('portfolio_link_hidden1').value = formattedLink; // Save with https
    document.getElementById('portfolio_detail_hidden1').value = portfolioDetail; 
}

// Add event listeners to input fields and selects to trigger the update function
document.getElementById('portfolio_title1').addEventListener('input', updatePortfolioDisplayAndSave1);
document.getElementById('portfolio_link1').addEventListener('input', updatePortfolioDisplayAndSave1);
document.getElementById('portfolio_detail1').addEventListener('input', updatePortfolioDisplayAndSave1);

// Function to load saved data from local storage
function portLoadSavedData1() {
    const savedData = JSON.parse(localStorage.getItem('portfolioData1'));

    if (savedData) {
        document.getElementById('portfolio_title1').value = savedData.portfolioTitle;
        document.getElementById('portfolio_link1').value = savedData.portfolioLink;
        document.getElementById('portfolio_detail1').value = savedData.portfolioDetail;

        document.getElementById('portfolio_title_field1').innerText = savedData.portfolioTitle;
        document.getElementById('portfolio_link_field1').innerText = savedData.portfolioLink;
        document.getElementById('portfolio_link_field1').href = 'https://' + savedData.portfolioLink;
        document.getElementById('portfolio_detail_field1').innerText = savedData.portfolioDetail;

        // Pass the formatted link explicitly
        const formattedLink = 'https://' + savedData.portfolioLink.replace(/^https?:\/\//, '');
        updatePortHiddenInputs1(
            savedData.portfolioTitle,
            savedData.portfolioLink,
            savedData.portfolioDetail,
        );
    }
}


// For Portfolio records record 3
// Function to update the displayed experience details and save data to local storage
function updatePortfolioDisplayAndSave2() {
    const portfolioTitle = document.getElementById('portfolio_title2').value.trim() || 'Portfolio';
    const portfolioLink = document.getElementById('portfolio_link2').value.trim() || 'example.com';
    const portfolioDetail = document.getElementById('portfolio_detail2').value.trim() || 'Lorem ipsum';

    // Format the link to ensure https:// prefix
    const formattedLink = 'https://' + portfolioLink.replace(/^https?:\/\//, '');

    // Update visible fields
    document.getElementById('portfolio_title_field2').innerText = portfolioTitle;
    document.getElementById('portfolio_detail_field2').innerText = portfolioDetail;

    const portfolioLinkField = document.getElementById('portfolio_link_field2');
    portfolioLinkField.innerText = portfolioLink;
    portfolioLinkField.href = formattedLink;
    portfolioLinkField.setAttribute('target', '_blank');

    const portfolioData2 = {
        portfolioTitle,
        portfolioLink,
        portfolioDetail,
    };

    localStorage.setItem('portfolioData2', JSON.stringify(portfolioData2));
    updatePortHiddenInputs2(portfolioTitle, portfolioLink, portfolioDetail);
}

// Function to update hidden inputs for form submission
function updatePortHiddenInputs2(portfolioTitle, portfolioLink, portfolioDetail) {
    const formattedLink = 'https://' + portfolioLink.replace(/^https?:\/\//, '');
    document.getElementById('portfolio_title_hidden2').value = portfolioTitle;
    document.getElementById('portfolio_link_text_hidden2').value = portfolioLink;
    document.getElementById('portfolio_link_hidden2').value = formattedLink; // Save with https
    document.getElementById('portfolio_detail_hidden2').value = portfolioDetail;
}

// Add event listeners to input fields and selects to trigger the update function
document.getElementById('portfolio_title2').addEventListener('input', updatePortfolioDisplayAndSave2);
document.getElementById('portfolio_link2').addEventListener('input', updatePortfolioDisplayAndSave2);
document.getElementById('portfolio_detail2').addEventListener('input', updatePortfolioDisplayAndSave2);

// Function to load saved data from local storage
function portLoadSavedData2() {
    const savedData = JSON.parse(localStorage.getItem('portfolioData2'));

    if (savedData) {
        document.getElementById('portfolio_title2').value = savedData.portfolioTitle;
        document.getElementById('portfolio_link2').value = savedData.portfolioLink;
        document.getElementById('portfolio_detail2').value = savedData.portfolioDetail;

        document.getElementById('portfolio_title_field2').innerText = savedData.portfolioTitle;
        document.getElementById('portfolio_detail_field2').innerText = savedData.portfolioDetail;
        document.getElementById('portfolio_link_field2').innerText = savedData.portfolioLink;
        document.getElementById('portfolio_link_field2').href = 'https://' + savedData.portfolioLink;

        // updatePortHiddenInputs2(
        //     savedData.portfolioTitle,
        //     savedData.portfolioLink,
        //     'https://' + savedData.portfolioLink,
        //     savedData.portfolioDetail,
        // );
        const formattedLink = 'https://' + savedData.portfolioLink.replace(/^https?:\/\//, '');
        updatePortHiddenInputs2(
            savedData.portfolioTitle,
            savedData.portfolioLink,
            savedData.portfolioDetail,
        );
    }
}



// For Portfolio records record 4
// Function to update the displayed experience details and save data to local storage
function updatePortfolioDisplayAndSave3() {
    const portfolioTitle = document.getElementById('portfolio_title3').value.trim() || 'Portfolio';
    const portfolioLink = document.getElementById('portfolio_link3').value.trim() || 'example.com';
    const portfolioDetail = document.getElementById('portfolio_detail3').value.trim() || 'Lorem ipsum';

    // Format the link to ensure https:// prefix
    const formattedLink = 'https://' + portfolioLink.replace(/^https?:\/\//, '');

    // Update visible fields
    document.getElementById('portfolio_title_field3').innerText = portfolioTitle;
    document.getElementById('portfolio_detail_field3').innerText = portfolioDetail;

    const portfolioLinkField = document.getElementById('portfolio_link_field3');
    portfolioLinkField.innerText = portfolioLink;
    portfolioLinkField.href = formattedLink;
    portfolioLinkField.setAttribute('target', '_blank');

    const portfolioData3 = {
        portfolioTitle,
        portfolioLink,
        portfolioDetail,
    };

    localStorage.setItem('portfolioData3', JSON.stringify(portfolioData3));
    updatePortHiddenInputs3(portfolioTitle, portfolioLink, portfolioDetail);
}

// Function to update hidden inputs for form submission
function updatePortHiddenInputs3(portfolioTitle, portfolioLink, portfolioDetail) {
    const formattedLink = 'https://' + portfolioLink.replace(/^https?:\/\//, '');
    document.getElementById('portfolio_title_hidden3').value = portfolioTitle;
    document.getElementById('portfolio_link_text_hidden3').value = portfolioLink;
    document.getElementById('portfolio_link_hidden3').value = formattedLink; // Save with https
    document.getElementById('portfolio_detail_hidden3').value = portfolioDetail;
}

// Add event listeners to input fields and selects to trigger the update function
document.getElementById('portfolio_title3').addEventListener('input', updatePortfolioDisplayAndSave3);
document.getElementById('portfolio_link3').addEventListener('input', updatePortfolioDisplayAndSave3);
document.getElementById('portfolio_detail3').addEventListener('input', updatePortfolioDisplayAndSave3);

// Function to load saved data from local storage
function portLoadSavedData3() {
    const savedData = JSON.parse(localStorage.getItem('portfolioData3'));

    if (savedData) {
        document.getElementById('portfolio_title3').value = savedData.portfolioTitle;
        document.getElementById('portfolio_link3').value = savedData.portfolioLink;
        document.getElementById('portfolio_detail3').value = savedData.portfolioDetail;

        document.getElementById('portfolio_title_field3').innerText = savedData.portfolioTitle;
        document.getElementById('portfolio_detail_field3').innerText = savedData.portfolioDetail;
        document.getElementById('portfolio_link_field3').innerText = savedData.portfolioLink;
        document.getElementById('portfolio_link_field3').href = 'https://' + savedData.portfolioLink;

        // updatePortHiddenInputs3(
        //     savedData.portfolioTitle,
        //     savedData.portfolioLink,
        //     'https://' + savedData.portfolioLink,
        //     savedData.portfolioDetail,
        // );
        const formattedLink = 'https://' + savedData.portfolioLink.replace(/^https?:\/\//, '');
        updatePortHiddenInputs3(
            savedData.portfolioTitle,
            savedData.portfolioLink,
            savedData.portfolioDetail,
        );
    }
}


// Initialize the dropdowns on page load
document.addEventListener('DOMContentLoaded', () => {
    portLoadSavedData();
    portLoadSavedData1();
    portLoadSavedData2();
    portLoadSavedData3();
});


// Download the cv with Modal download button
$('#download_btn').click(function() {
    $('.download-btn').trigger('click');
});

</script>

</body>
</html>