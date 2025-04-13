<?php
require 'vendor/autoload.php'; // Ensure this is the correct path to your vendor/autoload.php

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $job_title = htmlspecialchars($_POST['job_title']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $imageBase64 = $_POST['imageBase64'];

    // Create a new instance of mPDF
    // $mpdf = new \Mpdf\Mpdf();
    $mpdf = new \Mpdf\Mpdf([
        'margin_left' => 0,
        'margin_right' => 0,
        'margin_top' => 0,
        'margin_bottom' => 0,
    ]);

    // Handle image data
    $imageFilePath = '';
    if (!empty($imageBase64)) {
        // Extract the image format from the base64 string
        if (preg_match('#^data:image/(?<type>.+);base64,(?<data>.+)$#', $imageBase64, $matches)) {
            $imageType = $matches['type'];
            $imageData = base64_decode($matches['data']);
            // Define a valid extension based on the image type
            $validImageTypes = [
                'jpeg' => 'jpg',
                'jpg' => 'jpg',
                'png' => 'png',
                'gif' => 'gif',
                'webp' => 'webp',
                'heic' => 'heic', // Note: Ensure your server supports HEIC
                // Add more types as needed
            ];
            // Check if the image type is valid and get the corresponding extension
            if (array_key_exists($imageType, $validImageTypes)) {
                $extension = $validImageTypes[$imageType];
                $imageFilePath = 'temp_image_' . uniqid() . '.' . $extension;

                // Save the image to the file system
                $imageStored = file_put_contents($imageFilePath, $imageData);
            } else {
                // Handle unsupported image types
                echo "Unsupported image type: " . $imageType;
            }
        } else {
            echo "Invalid image data.";
        }
    }
    

    // HTML content for the PDF
    $htmlContent = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resume</title>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap");
            body { font-family: Arial, sans-serif; margin: 20px; }
            h1 { text-align: center; }
            .section { margin-bottom: 20px; }
            .profile-img { text-align: center; margin-bottom: 20px; }
            .profile-img img { max-width: 150px; }
            table, body { font-family: "Open Sans", sans-serif; }
            .cv-container { max-width: 920px; margin: auto; background-color: #e4f0fc; border-radius: 4px; overflow: hidden; color: #333; }
            .top-banner { background-color: #e4f0fc; } 
            .left-side { padding: 0; width: 30%; height: 100%; float: left; background-color: #fefefe; }
            .right-side { width: 70%; height: 100%; float: right; background-color: #fefefe; }
            .edit-btn { width: 100%; display: block; }
            .edit-btn div { float: left; width: 50%; display: block; }
            .name-heading { float: left; margin-right: 20px; display: block; width: auto; margin: 0; }
            .social-icon { float: right; width: 50%; padding-top: 8px; }
            .social-icon img { width: 30px; margin-left: 5px; }
            .links div img { float: left; padding-right: 10px; width: 35px; margin-top: 10px; }
            .links p { margin-left: 30px; }
            .contact-info.all-content { padding: 32px; margin-top: 20px; width: 100%; height: 100%; }
            .links, .education { padding: 0 0 20px; border-bottom: 1px solid #d3d4e6; }
            .skills, .lang { padding: 0 0 40px; border-bottom: 1px solid #d3d4e6; }
            .notice-period { margin-top: 0; padding: 0 0 30px; border-bottom: 1px solid #d3d4e6; }
            .links h6, .skills h6, .lang h6, .education h6, .notice-period h6 { color: #333; font-size: 16px; }
            .skills h6 { margin-bottom: 5px !important; }
            .lang h6, .education h6, .notice-period h6 { margin-bottom: 10px !important; }
            .skill-set { margin: 0 !important; padding: 0 0 24px; }
            .skills-set p, .skills-set-all { margin-bottom: -10px !important; padding: 0; color: #333; }
            .skills-set p { padding-top: 3px !important; margin-top: 3px !important; }
            .lang .skills-set-all, .lang { color: #333 !important; }
            .first-sec { padding: 25px 50px; height: 250px !important; background-color: #f4f5fc; overflow: hidden; }
            .right-side .first-sec { height: 250px !important; }
            .detail-list { display: block; width: 100%; }
            .detail-list .detail-item { display: block; width: 100%; }
            .detail-list div { display: block; float: left; width: 100%; }
            h3, h5, h6 { font-size: 20px; margin-bottom: 20px; color: #333; }
            .cv-body-content { padding: 20px 20px 20px 32px; }
            .p-info { display: block; width: 100%; }
            .p-info p { margin-top: 6px; }
            .third-sec.sec-span .p-info div { float: left; margin-right: 37px; width: 33%; display: block; }
            .sec-sec h3, .third-sec.sec-span h3, .four-sec.sec-span h3, .fifth-sec.sec-span h3 { padding: 0; }
            .four-sec .color-blue, .fifth-sec .color-blue { padding: 0 !important; line-height: 1.2; }
            .cv-img { height: 250px; width: 100%; overflow: hidden; border-radius: 4px 0 0 0; overflow: hidden; }
            .cv-img img { height: 250px; overflow: hidden; }
            .detail-text { padding-top: -36px; padding-left: -3px; color: #333; }
            .location-attr { padding-top: -10px; }
            .detail-text p { color: #333; }
            .detail-text.circle-img { padding-top: -34px; padding-left: 20px; }
            .tagline { margin-top: -40px; margin-bottom: -20px; margin: 0; float: left; line-height: 20px; }
            .circle-img { padding-left: 25px; }
            .hide { display: none; }
            .detail-list-first { margin-top: 10px; }
            .tagline .color-blue { color: #272c74; text-transform: capitalize; }
            .four-sec .color-blue.company-name, .fifth-sec .color-blue { color: #272c74; }
            .p-info div span { color: #757575; }
            .job-title-prev { font-weight: bold; }
        </style>

    </head>
    <body>
        <div class="cv-page">
            <div class="cv-container">
                <table class="top-banner" cellpadding="0" cellspacing="0" style="">
                    <tr>
                        <td colspan="15" style="width: 70%; height: 250px;">
                            <table style="padding: 16px 32px; height: 250px; width: 100%;">
                                <tbody>
                                    <tr style="">
                                        <td>
                                            <span style="font-size: 32px; font-weight: bold;font-family: "Open Sans", sans-serif; margin: 3px 24px 0 0; line-height: 1; color: #333;">
                                                ' . $name . '
                                            </span>&nbsp;
                                            <a href="https://facebook.com/johndoe" target="_blank" style="text-decoration: none;">
                                                <img src="facebook_icon.svg" style="width: 28px; height: 28px; margin-right: 8px; margin-top: 5px;">
                                            </a>
                                            <a href="https://linkedin.com/in/johndoe" target="_blank" style="text-decoration: none;">    
                                                <img src="linkedin_icon.svg" style="width: 28px; height: 28px; margin-right: 8px; margin-top: 5px;">
                                            </a>
                                            <a href="https://twitter.com/johndoe" target="_blank" style="text-decoration: none;">
                                                <img src="twitter_icon.png" style="width: 28px; height: 28px; margin-top: 5px;">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: #272c74; display: none;">
                                            '. $job_title .'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="color-blue" style="color: #272c74; display: none;">
                                                Senior Software Engineer
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="content-p" style="color: #333; white-space: break-spaces;">Aspiring software engineer with a passion for technology and innovation.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td colspan="5" style="height: 250px; text-align: right; padding: 16px 32px;">
                            <div class="profile-img">' . (!empty($imageFilePath) ? '<img src="' . $imageFilePath . '" alt="Profile Image" width="150px" height="150px" style="overflow: hidden; max-width: 100%;">' : 'Try Another Image') . '</div>
                        </td>
                        
                    </tr>
                </table>

                <div class="left-side">
                    <div class="contact-info all-content">
                        <div class="links">
                            <div class="detail-list">
                                <div class="detail-item">
                                    <div class="detail-image">
                                        <img src="email_icon.png" alt="" style="width: 20px; height: 20px;">
                                    </div>
                                    <div class="detail-text">
                                        <p>'. $email .'</p>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-image">
                                        <img src="phone_icon.png" alt="" style="width: 20px; height: 20px;">
                                    </div>
                                    <div class="detail-text">
                                        <p>'. $phone .'</p>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-image">
                                        <img src="location_icon.png" alt="" style="width: 20px; height: 20px;">
                                    </div>
                                    <div class="detail-text">
                                        <p>'. $address .'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="skills">
                            <h6>Top skills</h6>
                            <div class="skills-set">
                                <p>JavaScript</p>
                                <p>HTML/CSS</p>
                                <p>React</p>
                            </div>
                        </div>

                        <div class="lang">
                            <h6>Language proficiency</h6>
                            <p>English (Native)</p>
                        </div>

                        <div class="education">
                            <h6>Education</h6>
                            <div class="first-edu" style="margin-bottom: 2px;"> 
                                <span style="font-size: 14px; color: #333; font-family: "Open Sans", sans-serif;">Bachelor of Science in Computer Science</ span> 
                            </div>
                            <div style="color: #6e6e6e; margin-bottom: 7px;">
                                University of New York
                            </div>
                        </div>

                        <div class="notice-period">
                            <h6>Notice period</h6>
                            <div style="font-size: 14px; color: #333; font-family: "Open Sans", sans-serif;">
                                2 weeks
                            </div> 
                        </div> 
                    </div>
                </div>

                <div class="right-side">
                    <div class="cv-body-content">
                        <div class="third-sec sec-span" style="display: none;">
                            <h3>Personal information</h3>
                            <div class="p-info">
                                <div><span>Notice period</span>
                                    <p>2 weeks</p>
                                </div>
                                <div style="display: none;"><span>Country of residence</span>
                                    <p>USA</p>
                                </div>
                            </div>
                        </div>

                        <div class="four-sec sec-span">
                            <h3>Current employment</h3>
                            <p class="job-title-prev" style="font-weight: bold;">Senior Software Engineer</p>
                            <p class="color-blue company-name">ABC Corporation (2020 - Present)</p>
                            <p class="color-blue">Developing and maintaining software applications using JavaScript, HTML/CSS, and React.</p>
                        </div>

                        <div class="fifth-sec sec-span">
                            <h3>Previous employment</h3>
                            <div class="content-p">
                                <p class="job-title-prev">Junior Software Engineer</p>
                                <p class="color-blue mb-0">XYZ Corporation (2018 - 2020)</p>
                                <p class="prev-description">Assisted in the development and maintenance of software applications using JavaScript, HTML/CSS, and React.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
    </html>
    ';

    // Write the HTML content to the PDF
    $mpdf->WriteHTML($htmlContent);

    // Output the PDF with the user’s name
    $filename = $name . '.pdf';
    $mpdf->Output($filename, 'D'); // Download the PDF file

    // Delete the temporary image file if it exists
    if (file_exists($imageFilePath)) {
        unlink($imageFilePath);
    }

    exit;
}
?>






<div class="summary-section section">
                            <h6 style="padding-bottom: 8px;">Personal summary</h6>
                            <div class="skills-bubbles" style="padding: 0;">
                                '. $summary .'
                                <div class="clearfix"></div>
                            </div>
                            <div style="border-bottom: 0.5px solid #333; padding: 8px 5px; 15px;"></div>
                        </div>

                        <div class="skills-section section">
                            <h6 style="padding-bottom: 8px;">Skills</h6>
                            <div class="skills-bubbles" style="padding: 0;">
                                '. $skillsHtml .'
                                <div class="clearfix"></div>
                            </div>
                            <div style="border-bottom: 0.5px solid #333; padding: 8px 5px; 15px;"></div>
                        </div>