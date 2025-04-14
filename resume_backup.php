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
    <!-- Cropper.js CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">


</head>


<body data-spy="scroll" data-target=".fixed-top">

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

<div class="container create-resume-container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-sm-10 col-xs-10">
            <div class="my-5 text-center">
                <h2 class="mb-2">Get in touch</h2>
                <p>Have a project on mind,want to make an consultant. Don't hesistate to contact us.Let's have atalk together.Colaborat eyour project to done quickly</p>
            </div>
        </div>
    </div>
    <div class="row form-row">
        <div class="col-lg-4 col-sm-4 col-xs-12">
            <form id="resumeForm" class="resume__form d-flex flex-column gap-4" action="generate_pdf.php" method="post">
                <div class="d-flex flex-column gap-2 gap-md-3 mx-0 card p-4 rounded-lg shadow border-0 personal-info">
                    <h5 class="fw-bold mb-0 border-bottom pb-2 mb-2">Personal information</h5>
                    <div class="profile-img p-relative">
                        <div id="imageContainer1" class="img img-container">
                            <img id="defaultImage1" src="images/profile-basic.jpg" alt="profile img" style="width: 100%; height: 100%; object-fit: cover; object-position: top center; display: none;" alt="loading...">
                        </div>
                        <div class="edit-btn">
                            <label for="imageInput" class="bg-light shadow rounded-circle d-flex" style="cursor: pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="currentColor"><path d="M120-120v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm584-528 56-56-56-56-56 56 56 56Z"/></svg>
                                <input type="file" accept="image/*" id="imageInput" name="image" style="display: none;" onchange="uploadImage()">
                                <!-- Hidden input for image data in base64 -->
                                <input type="hidden" id="imageBase64" name="imageBase64">

                            </label>
                        </div>

                        <!-- Cropper Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img id="imageToCrop" style="max-width: 100%;" alt="Image for cropping">
                                    <button type="button" onclick="cropImage()">Crop Image</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Circular cropped image preview -->
                        <img id="croppedImagePreview" style="width: 100px; height: 100px; border-radius: 50%; display: none;">

                    </div>
                    <div class="col-md-12 form-group mb-1">
                        <label for="exampleInputEmail1" class="form-label mb-1 font-sm fs-6">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="col-md-12 form-group mb-1">
                        <label for="exampleInputEmail1" class="form-label mb-1 font-sm fs-6">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="col-md-12 form-group mb-1">
                        <label for="exampleInputEmail1" class="form-label mb-1 font-sm fs-6">Phone Number</label>
                        <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="col-md-12 form-group mb-1">
                        <label for="exampleInputEmail1" class="form-label mb-1 font-sm fs-6">Address</label>
                        <input name="address" type="text" class="form-control" id="address" placeholder="Address" required>
                    </div>
                    <div class="col-md-12 form-group mb-1">
                        <label for="exampleInputEmail1" class="form-label mb-1 font-sm fs-6">Summary</label>
                        <textarea name="summary" class="form-control" rows="4" id="summary" placeholder="Professional summary" required></textarea>
                    </div>
                </div>
                <!--Start Professional info -->
                <div class="d-flex flex-column gap-2 gap-md-3 mx-0 card p-4 rounded-lg shadow border-0 professional-info">
                    <h5 class="fw-bold mb-0 border-bottom pb-2 mb-2">Professional information</h5>
                    <div class="col-md-12 form-group mb-1">
                        <label for="exampleInputEmail1" class="form-label mb-1 font-sm fs-6">Job title</label>
                        <input name="job_title" type="text" class="form-control" id="job_title" placeholder="Job title" required>
                    </div>
                    <div class="col-md-12 form-group mb-1">
                        <label for="exampleInputEmail1" class="form-label mb-1 font-sm fs-6">Skills</label>
                        <!-- Input field for tags -->
                        <input id="tag-input" class="form-control" placeholder="Add skill" name="tags" value="">
                        <!-- <input name="email" type="email" class="form-control" id="email" placeholder="Email" required> -->
                    </div>
                </div>
                <!--End Professional info -->
                <div class="col-12 d-flex align-items-center justify-content-between gap-2 gap-md-3">
                    <!-- <a class="btn btn-success rounded" id="saveBtn" onclick="printSection()">Download</a> -->
                    <button type="submit" class="btn btn-success rounded">Download</button>

                </div>
            </form>
        </div>

        <div class="col-lg-8 col-sm-8 col-xs-12 mt-4 mt-lg-0">
            <div id="printContent" class="resume-parent card p-0 rounded-lg shadow border-0 overflow-hidden" style="display: flex; flex-direction: row;">
              <div class="container resume-container p-0" style="display: flex; padding-right: 0;">
                <div class="left-side" style="padding: 30px 20px; background-color: #e3f2fd; width: 25%; min-width: 200px;">
                    <div id="imageContainer" class="img img-container" style="width: 100%; height: 200px; overflow: hidden;">
                      <img id="defaultImage" src="images/profile-basic.jpg" alt="profile img" style="width: 100%; height: 100%; object-fit: cover; object-position: top center; display: none;" alt="loading...">
                    </div>

                    <!-- Contact section -->
                    <div class="contact-section" style="margin-bottom: 30px;">
                        <h3 class="contact border-heading" id="contact_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Contact</h3>
                        <p class="my-email" id="email_field" style="color: #333; word-break: break-word;">email@example.com</p>
                        <p id="phone_field" style="color: #333;">(123) 456-7890</p>
                        <p id="address_field" style="color: #333;">123 Main Street, City, State, Zip</p>
                    </div>
                    <!-- Education section -->
                    <div class="education-section" style="margin-bottom: 30px;">
                        <h3 class="contact border-heading" id="edu_head_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Education</h3>
                        <p class="my-email" id="edu_title_field" style="color: #333; word-break: break-word;">Msc (cs)</p>
                        <p id="edu_institution_field" style="color: #333;">GCUF Lahore</p>
                        <p id="edu_date_field" style="color: #333;">October 2018 - October 2022</p>
                    </div>
                    <!-- Skills section -->
                    <div class="skills-section" style="margin-bottom: 30px;" id="pro-skills">
                        <h3 class="contact border-heading" id="skills_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Skills</h3>
                        <!-- Container to show the tag values -->
                        <div id="skills-container" class="skills-div">No skills added</div>
                    </div>


                </div>
                <div style="padding: 30px 20px 30px 30px; background-color: #f6fbff; width: 75%;">
                    <h3 class="my-name" id="name_field" style="color: #333; margin: 12px 0 8px; font-size: 40px;">John Doe</h3>
                    <p id="job_title_field" style="color: #333;">UI / UX Developer</p>
                    <p id="summary_field" style="color: #333;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <h3 style="color: #333;">Education</h3>
                    <p style="color: #333;">Bachelor of Science in Computer Science</p>
                    <p style="color: #333;">University Name, Graduation Year</p>
                    <h3 style="color: #333;">Experience</h3>
                    <p style="color: #333;">Job Title</p>
                    <p style="color: #333;">Company Name - Location</p>
                    <p style="color: #333;">Month Year - Month Year</p>
                    <p style="color: #333;">Description of responsibilities and achievements...</p>
                    <p style="color: #333;">Job Title</p>
                    <p style="color: #333;">Company Name - Location</p>
                    <p style="color: #333;">Month Year - Month Year</p>
                    <p style="color: #333;">Description of responsibilities and achievements...</p>
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

<!-- Cropper.js JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

<script>
// Function to save input field values to local storage
function saveInputValues() {
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var address = document.getElementById('address');
    var jobTitle = document.getElementById('job_title');
    localStorage.setItem('savedName', nameInput.value);
    localStorage.setItem('savedEmail', emailInput.value);
    localStorage.setItem('savedAddress', address.value);
    localStorage.setItem('savedJobTitle', jobTitle.value);
    localStorage.setItem('savedPhone', phone.value);
    localStorage.setItem('savedSummary', summary.value);
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
        document.getElementById('job_title').innerText = savedJobTitle;
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
        aspectRatio: 1,
        viewMode: 1,
        crop(event) {
            // Optional: Handle crop event
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

    const croppedCanvas = cropper.getCroppedCanvas({
        width: 200,
        height: 200,
    });

    const base64Image = croppedCanvas.toDataURL("image/png"); // Output as PNG

    // Save the base64 image to local storage
    localStorage.setItem('uploadedImage', base64Image);

    // Update the hidden input for base64 image
    const imageBase64Element = document.getElementById('imageBase64');
    if (imageBase64Element) {
        imageBase64Element.value = base64Image; // Set the value to the base64 string
        console.log('Base64 image saved to hidden input:', imageBase64Element.value);
    }

    // Update your image display containers with the cropped image
    const image = new Image();
    image.src = base64Image;
    image.style.cssText = 'width: 100%; height: 100%; object-fit: cover; object-position: center top; border-radius: 8px;';
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
        console.log('Base64 image loaded from local storage:', imageBase64Element.value);

        // Optionally display the image somewhere on the page
        const imageContainer = document.getElementById('imageContainer'); // Make sure this ID exists in your HTML
        if (imageContainer) {
            const img = new Image();
            img.src = imageData;
            img.style.cssText = 'width: 100%; height: auto; object-fit: cover; border-radius: 8px;';
            imageContainer.appendChild(img); // Display the image
        }
    }
});





// Load event listener to check for existing image in local storage
window.addEventListener('load', function() {
    // Check if there is an image in local storage
    const imageData = localStorage.getItem('uploadedImage');
    const imageBase64Element = document.getElementById('imageBase64');

    if (imageData && imageBase64Element) {
        // Set the value of the hidden input to the base64 string
        imageBase64Element.value = imageData;
        console.log('Base64 image loaded from local storage:', imageBase64Element.value);
    }

    // Load other input values if needed
    loadInputValues();
});







window.addEventListener('load', function() {
    // Function to load input values, if any
    loadInputValues();

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
document.getElementById('name').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('name_field').innerText = this.value;
    } else {
        document.getElementById('name_field').innerText = "John Doe";
    }
    saveInputValues();
});

document.getElementById('email').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('email_field').innerText = this.value;
    } else {
        document.getElementById('email_field').innerText = "email@example.com";
    }
    saveInputValues();
});

document.getElementById('address').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('address_field').innerText = this.value;
    } else {
        document.getElementById('address_field').innerText = "123 Main Street, City, State, Zip";
    }
    saveInputValues();
});

document.getElementById('job_title').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('job_title_field').innerText = this.value;
    } else {
        document.getElementById('job_title_field').innerText = "Software Engineer";
    }
    saveInputValues();
});

document.getElementById('phone').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('phone_field').innerText = this.value;
    } else {
        document.getElementById('phone_field').innerText = "(123) 456-7890";
    }
    saveInputValues();
});

document.getElementById('summary').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('summary_field').innerText = this.value;
    } else {
        document.getElementById('summary_field').innerText = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
    }
    saveInputValues();
});


// Call saveInputValues function when the save button is clicked
// document.getElementById('saveBtn').addEventListener('click', function() {
//     saveInputValues();
//     // document.querySelector('.resume-container').style.cssText = 'height: 100vh;'
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

<!-- Bootstrap JS (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Tagify JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.0/tagify.min.js"></script>
    
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

    // Function to update the display with current tags
    function updateTagDisplay(tags) {
        var container = document.getElementById('skills-container');
        // Clear the container before updating
        container.textContent = '';
        // If there are any tags, display them
        if (tags.length > 0) {
            // container.textContent = tags.join(", ");
            tags.forEach(tag => {
                var p = document.createElement('p');
                p.textContent = tag; // Set the tag text
                p.classList.add('mb-2');
                container.appendChild(p); // Append the <p> to the container
            });
        } else {
            container.textContent = "No skills added";
        }
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
    window.onload = function() {
        initializeTags();
        // Add event listeners for tag add/remove after initialization
        tagify.on('add', handleTagAdd);
        tagify.on('remove', handleTagRemove);
    };

</script>

</body>
</html>