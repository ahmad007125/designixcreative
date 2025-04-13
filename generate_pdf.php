<?php
require 'vendor/autoload.php'; // Ensure this is the correct path to your vendor/autoload.php

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $imageBase64 = $_POST['imageBase64'];
    $name = htmlspecialchars($_POST['name']);
    $job_title = htmlspecialchars($_POST['job_title']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $encodedAddress = urlencode($address); // Encode address for Google Maps URL
    $summary = htmlspecialchars($_POST['summary']);
    $tags = json_decode($_POST['tags'], true); // Decode JSON string to array
    $languages_tags = json_decode($_POST['languages_tags'], true); // Decode JSON string to array

    // Education information
    $degreeTitle = $_POST['degree_title_hidden'] ?? '';
    $institutionTitle = $_POST['institution_title_hidden'] ?? '';
    $startMonth = $_POST['start_month_hidden'] ?? '';
    $startYear = $_POST['start_year_hidden'] ?? '';
    $endMonth = $_POST['end_month_hidden'] ?? '';
    $endYear = $_POST['end_year_hidden'] ?? '';

    // Work Experience information
    $expJobTitle = $_POST['exp_job_title_hidden'] ?? '';
    $expCompanyTitle = $_POST['exp_comapny_title_hidden'] ?? '';
    $expStartMonth = $_POST['exp_start_month_hidden'] ?? '';
    $expStartYear = $_POST['exp_start_year_hidden'] ?? '';
    $expEndYear = $_POST['exp_end_date_hidden'] ?? '';
    // $expEndMonth = $_POST['exp_end_month_hidden'] ?? '';
    // $expEndYear = $_POST['exp_end_year_hidden'] ?? '';

    // Work Experience information 1
    $exp1JobTitle = $_POST['exp_job_title_hidden1'] ?? '';
    $exp1CompanyTitle = $_POST['exp_comapny_title_hidden1'] ?? '';
    $exp1StartMonth = $_POST['exp_start_month_hidden1'] ?? '';
    $exp1StartYear = $_POST['exp_start_year_hidden1'] ?? '';
    $exp1EndMonth = $_POST['exp_end_month_hidden1'] ?? '';
    $exp1EndYear = $_POST['exp_end_year_hidden1'] ?? '';

    // Work Experience information 2
    $exp2JobTitle = $_POST['exp_job_title_hidden2'] ?? '';
    $exp2CompanyTitle = $_POST['exp_comapny_title_hidden2'] ?? '';
    $exp2StartMonth = $_POST['exp_start_month_hidden2'] ?? '';
    $exp2StartYear = $_POST['exp_start_year_hidden2'] ?? '';
    $exp2EndMonth = $_POST['exp_end_month_hidden2'] ?? '';
    $exp2EndYear = $_POST['exp_end_year_hidden2'] ?? '';

    // Portfolio information 1
    $portfolioTitle = $_POST['portfolio_title_hidden'] ?? '';
    $portfolioLinkText = $_POST['portfolio_link_text_hidden'] ?? '';
    $portfolioLink = $_POST['portfolio_link_hidden'] ?? '';
    $portfolioDetailText = $_POST['portfolio_detail_hidden'] ?? '';

    // Portfolio information 2
    $portfolioTitle1 = $_POST['portfolio_title_hidden1'] ?? '';
    $portfolioLinkText1 = $_POST['portfolio_link_text_hidden1'] ?? '';
    $portfolioLink1 = $_POST['portfolio_link_hidden1'] ?? '';
    $portfolioDetailText1 = $_POST['portfolio_detail_hidden1'] ?? '';

    // Portfolio information 3
    $portfolioTitle2 = $_POST['portfolio_title_hidden2'] ?? '';
    $portfolioLinkText2 = $_POST['portfolio_link_text_hidden2'] ?? '';
    $portfolioLink2 = $_POST['portfolio_link_hidden2'] ?? '';
    $portfolioDetailText2 = $_POST['portfolio_detail_hidden2'] ?? '';

    // Portfolio information 4
    $portfolioTitle3 = $_POST['portfolio_title_hidden3'] ?? '';
    $portfolioLinkText3 = $_POST['portfolio_link_text_hidden3'] ?? '';
    $portfolioLink3 = $_POST['portfolio_link_hidden3'] ?? '';
    $portfolioDetailText3 = $_POST['portfolio_detail_hidden3'] ?? '';

    // Generate bubble-style HTML for each skill
    $skillsHtml = "";
    if ($tags && is_array($tags)) {
        $totalSkills = count($tags); // Get the total number of skills
        $counter = 0;
        foreach ($tags as $tag) {
            $skill = htmlspecialchars($tag['value']);
            $skillsHtml .= "<span class='skill-bubble'>$skill</span>";
            // Increment counter and add a comma if this is not the last skill
            $counter++;
            if ($counter < $totalSkills) {
                $skillsHtml .= ", "; // Add comma separator
            }
        }
    } else {
        $skillsHtml = "<p>No skills</p>";
    }

    // Generate bubble-style HTML for each skill
    $languagesHtml = "";
    if ($languages_tags && is_array($languages_tags)) {
        $totalLanguages = count($languages_tags); // Get the total number of skills
        $counter = 0;
        foreach ($languages_tags as $languages_tag) {
            $language = htmlspecialchars($languages_tag['value']);
            $languagesHtml .= "<span class='skill-bubble'>$language</span>";
            // Increment counter and add a comma if this is not the last skill
            $counter++;
            if ($counter < $totalLanguages) {
                $languagesHtml .= ", "; // Add comma separator
            }
        }
    } else {
        $languagesHtml = "<p>No languages</p>";
    }

    // Create a new instance of mPDF
    $mpdf = new \Mpdf\Mpdf([
        'margin_left' => 0,
        'margin_right' => 0,
        'margin_top' => 0,
        'margin_bottom' => 0,
        'use_kwt' => false, // Ensure keep-with-table is disabled
        // 'autoPadding' => true, // Automatically add padding for rounded borders
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
            .right-side { width: 100%; height: 100%; background-color: #fefefe; }
            .edit-btn { width: 100%; display: block; }
            .edit-btn div { float: left; width: 50%; display: block; }
            .name-heading { float: left; margin-right: 20px; display: block; width: auto; margin: 0; }
            .social-icon { float: right; width: 50%; padding-top: 8px; }
            .social-icon img { width: 30px; margin-left: 5px; }
            .links div img { float: left; padding-right: 10px; width: 35px; margin-top: 10px; }
            .skills-set p { float: left; } 
            .links p { margin-left: 30px; }
            .contact-info.all-content { padding: 24px; width: 100%; height: 100%; margin-top: 0; }
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
            .detail-list { display: block; width: 100%; }
            .detail-list .detail-item { display: block; width: 100%; }
            .detail-list div { display: block; float: left; width: 100%; }
            h3, h5, h6 { font-size: 20px; margin-bottom: 10px; color: #333; }
            .p-info { display: block; width: 100%; }
            .p-info p { margin-top: 6px; }
            .third-sec.sec-span .p-info div { float: left; margin-right: 37px; width: 33%; display: block; }
            .sec-sec h3, .third-sec.sec-span h3, .four-sec.sec-span h3, .fifth-sec.sec-span h3 { padding: 0; }
            .four-sec .color-blue, .fifth-sec .color-blue { padding: 0 !important; line-height: 1.2; }
            .detail-text { padding-top: -36px; padding-left: -3px; color: #333; }
            .location-attr { padding-top: -10px; }
            .detail-text p { color: #333; }
            .detail-text.circle-img { padding-top: -34px; padding-left: 20px; }
            .tagline { margin-top: -40px; margin-bottom: -20px; margin: 0; float: left; line-height: 20px; }
            .circle-img { padding-left: 25px; }
            .hide { display: none; }
            .detail-list-first { margin-top: 10px; }
            .tagline .color-blue { color: #272c74; text-transform: capitalize; }
            .four-sec .color-blue.company-name, .fifth-sec .color-blue, .color-blue { color: #272c74; }
            .p-info div span { color: #757575; }
            .job-title-prev { font-weight: bold; }
            .sections { padding: 0; }
            .skill-bubble { text-transform: capitalize; }
        </style>

    </head>
    <body>
        <div class="cv-page">
            <div class="cv-container">
                <table class="top-banner" style="width: 100%; height: 200px;">
                    <tr>

                        <td align="left" style="height: 200px; width: 150px; text-align: left; padding: 24px 0 24px 24px;">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td align="left" style="text-align: left;"><div class="profile-img">' . (!empty($imageFilePath) ? '<img src="' . $imageFilePath . '" alt="Profile Image" width="150px" height="150px" style="overflow: hidden; max-width: 100%; text-align: left;">' : 'Try Another Image') . '</div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td align="left" style="height: 200px;">
                            <table style="padding: 24px 24px 24px 18px; height: 200px; width: 100%;">
                                <tbody>
                                    <tr style="">
                                        <td>
                                            <span style="font-size: 32px; font-weight: bold;font-family: "Open Sans", sans-serif; margin: 3px 24px 0 0; line-height: 1; color: #333;">
                                                ' . $name . '
                                            </span>&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: #272c74; font-size: 18px; font-weight: bold;">
                                            '. $job_title .'
                                        </td>
                                    </tr>
                                    <tr style="">
                                        <td style="vertical-align: middle;">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 0; margin: 0;"><img src="images/mail.svg" alt="mail" width="auto" height="16" style="display: block;"></td>
                                                        <td style="padding: 0; padding-left: 3px;">
                                                            <a href="mailto:' . $email . '" target="_blank" style="text-decoration: none; color: #272c74; display: block;">
                                                                '. $email .'
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr style="">
                                        <td>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 0; margin: 0;"><img src="images/phone-call.svg" alt="mail" width="auto" height="16" style="display: block;"></td>
                                                        <td style="padding: 0; padding-left: 3px;">
                                                            <a href="tel:' . $phone . '" target="_blank" style="text-decoration: none; color: #272c74;">
                                                                '. $phone .'
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr style="">
                                        <td>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 0; margin: 0;"><img src="images/map-pin.svg" alt="mail" width="auto" height="16" style="display: block;"></td>
                                                        <td style="padding: 0; padding-left: 3px;">
                                                            <a href="https://www.google.com/maps/search/?api=1&query=' . $encodedAddress . '" target="_blank" style="text-decoration: none; color: #272c74;">
                                                                ' . $address . '
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        
                    </tr>
                </table>

                

                <div class="right-side">
                    <div class="cv-body-content contact-info all-content">

                        <table class="summary-table" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td style="padding-bottom: 6px;">
                                        <h6 class="body-heading">Personal summary</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="content-p" style="color: #333; margin-bottom: 0; white-space: break-spaces; line-height: 10px;">'. $summary .'</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" padding: 12px 2px 0px 2px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="900" height="1.1" viewBox="0 0 900 1.1">
                                            <line x1="0" y1="0.5" x2="900" y2="0.5" stroke="#333" stroke-width="0.5"/>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="skills-table" style="width: 100%; padding-top: 16px;">
                            <tbody>
                                <tr>
                                    <td style="padding-bottom: 6px;">
                                        <h6 class="body-heading">Skills</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="content-p" style="color: #333; margin-bottom: 0; white-space: break-spaces;">'. $skillsHtml .'</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" padding: 12px 2px 0px 2px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="900" height="1.1" viewBox="0 0 900 1.1">
                                            <line x1="0" y1="0.5" x2="900" y2="0.5" stroke="#333" stroke-width="0.5"/>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="experience-table" style="width: 100%; padding-top: 16px;">
                            <tbody>
                                <tr>
                                    <td style="padding-bottom: 6px;">
                                        <h6 class="body-heading">Work Experience</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="job-title-prev" style="font-weight: 600; color: #333; font-weight: semibold;">'.$expJobTitle.'</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="job-title-prev color-blue" style="font-weight: 600;">'.$expCompanyTitle. ',   <span class="color-blue" style="font-size: 14px;">('.$expStartMonth.' '.$expStartYear.' - '.$expEndYear.')</span></p>
                                    </td>
                                </tr>';

                                
                                if (!empty($exp1JobTitle) && !empty($exp1CompanyTitle) && !empty($exp1StartMonth) && !empty($exp1StartYear) && !empty($exp1EndMonth) && !empty($exp1EndYear)) {
                                    $htmlContent .= '
                                    <tr class="exp1">
                                        <td>
                                            <table class="experience-table" style="width: 100%; padding-top: 6px; margin: 0;">
                                                <tbody>
                                                    <tr>
                                                        <td style="margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                            ' . htmlspecialchars($exp1JobTitle) . '
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0;">
                                                            <p class="job-title-prev color-blue" style="font-weight: 600;">
                                                            ' . htmlspecialchars($exp1CompanyTitle) .  ',  <span style="font-size: 14px;">(' . htmlspecialchars($exp1StartMonth) . ' ' . htmlspecialchars($exp1StartYear) . ' - ' . htmlspecialchars($exp1EndMonth) . ' ' . htmlspecialchars($exp1EndYear) . ')</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>';
                                } else {
                                    $htmlContent .= '';
                                }


                                if (!empty($exp2JobTitle) && !empty($exp2CompanyTitle) && !empty($exp2StartMonth) && !empty($exp2StartYear) && !empty($exp2EndMonth) && !empty($exp2EndYear)) {
                                    $htmlContent .= '
                                    <tr class="exp1">
                                        <td>
                                            <table class="experience-table" style="width: 100%; padding-top: 6px; margin: 0;">
                                                <tbody>
                                                    <tr>
                                                        <td style="margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                            '. htmlspecialchars($exp2JobTitle) . '  
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0;">
                                                            <p class="job-title-prev color-blue" style="font-weight: 600;">
                                                            '. htmlspecialchars($exp2CompanyTitle) .  ',  <span style="font-size: 14px;">(' . htmlspecialchars($exp2StartMonth) . ' ' . htmlspecialchars($exp2StartYear) . ' - ' . htmlspecialchars($exp2EndMonth) . ' ' . htmlspecialchars($exp2EndYear) . ')</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>';
                                } else {
                                    $htmlContent .= '';
                                }

                                $htmlContent .= '
                                
                                <tr>
                                    <td style=" padding: 12px 2px 0px 2px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="900" height="1.1" viewBox="0 0 900 1.1">
                                            <line x1="0" y1="0.5" x2="900" y2="0.5" stroke="#333" stroke-width="0.5"/>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="education-table" style="width: 100%; padding-top: 16px;">
                            <tbody>
                                <tr>
                                    <td style="padding-bottom: 6px;">
                                        <h6 class="body-heading">Education</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="job-title-prev" style="font-weight: 600; color: #333;">'.$degreeTitle.'</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="job-title-prev color-blue" style="font-weight: 600;">'.$institutionTitle.', <span class="color-blue" style="font-size: 14px;">('.$startMonth.' '.$startYear.' - '.$endMonth.' '.$endYear.')</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" padding: 12px 2px 0px 2px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="900" height="1.1" viewBox="0 0 900 1.1">
                                            <line x1="0" y1="0.5" x2="900" y2="0.5" stroke="#333" stroke-width="0.5"/>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="skills-table" style="width: 100%; padding-top: 16px;">
                            <tbody>
                                <tr>
                                    <td style="padding-bottom: 6px;">
                                        <h6 class="body-heading">Languages</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="content-p" style="color: #333; margin-bottom: 0; white-space: break-spaces;">'. $languagesHtml .'</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" padding: 12px 2px 0px 2px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="900" height="1.1" viewBox="0 0 900 1.1">
                                            <line x1="0" y1="0.5" x2="900" y2="0.5" stroke="#333" stroke-width="0.5"/>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="experience-table" style="width: 100%; padding-top: 16px;">
                            <tbody>
                                <tr>
                                    <td style="padding-bottom: 6px;">
                                        <h6 class="body-heading">Portfolio</h6>
                                    </td>
                                </tr>';

                                if (!empty($portfolioTitle) && !empty($portfolioLink) && !empty($portfolioLinkText) && !empty($portfolioDetailText)) {
                                    $htmlContent .= '
                                    <tr class="portfolio">
                                        <td>
                                            <table class="experience-table" style="width: 100%; padding-top: 0px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 0 0 3px; margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                                <span style="font-weight: bold;">' . htmlspecialchars($portfolioTitle) . ', </span>  <a href=' . $portfolioLink . ' target="_blank" style=" font-weight: normal;" class="job-title-prev color-blue">(' . htmlspecialchars($portfolioLinkText) . ')</a> 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0; margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                                ' . htmlspecialchars($portfolioDetailText) . ' 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>';
                                } else {
                                    $htmlContent .= '';
                                }

                                if (!empty($portfolioTitle1) && !empty($portfolioLink1) && !empty($portfolioLinkText1) && !empty($portfolioDetailText1)) {
                                    $htmlContent .= '
                                    <tr class="portfolio1">
                                        <td style="padding-top: 6px;">
                                            <table class="experience-table" style="width: 100%; padding-top: 0px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 0 0 3px; margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                                <span style="font-weight: bold;">' . htmlspecialchars($portfolioTitle1) . ', </span>  <a href=' . $portfolioLink1 . ' target="_blank" style=" font-weight: normal;" class="job-title-prev color-blue">(' . htmlspecialchars($portfolioLinkText1) . ')</a> 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0; margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                                ' . htmlspecialchars($portfolioDetailText1) . ' 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>';
                                } else {
                                    $htmlContent .= '';
                                }


                                if (!empty($portfolioTitle2) && !empty($portfolioLink2) && !empty($portfolioLinkText2) && !empty($portfolioDetailText2)) {
                                    $htmlContent .= '
                                    <tr class="portfolio2">
                                        <td style="padding-top: 6px;">
                                            <table class="experience-table" style="width: 100%; padding-top: 0px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 0 0 3px; margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                                <span style="font-weight: bold;">' . htmlspecialchars($portfolioTitle2) . ', </span>  <a href=' . $portfolioLink2 . ' target="_blank" style=" font-weight: normal;" class="job-title-prev color-blue">(' . htmlspecialchars($portfolioLinkText2) . ')</a> 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0; margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                                ' . htmlspecialchars($portfolioDetailText2) . ' 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>';
                                } else {
                                    $htmlContent .= '';
                                }

                                if (!empty($portfolioTitle3) && !empty($portfolioLink3) && !empty($portfolioLinkText3) && !empty($portfolioDetailText3)) {
                                    $htmlContent .= '
                                    <tr class="portfolio3">
                                        <td style="padding-top: 6px;">
                                            <table class="experience-table" style="width: 100%; padding-top: 0px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 0 0 3px; margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                                <span style="font-weight: bold;">' . htmlspecialchars($portfolioTitle3) . ', </span>  <a href=' . $portfolioLink3 . ' target="_blank" style=" font-weight: normal;" class="job-title-prev color-blue">(' . htmlspecialchars($portfolioLinkText3) . ')</a> 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0; margin: 0;">
                                                            <p class="job-title-prev" style="font-weight: 600; color: #333;">
                                                                ' . htmlspecialchars($portfolioDetailText3) . ' 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>';
                                } else {
                                    $htmlContent .= '';
                                }

                                $htmlContent .= '
                                <tr><td style="padding: 6px 5px;"></td></tr>
                            </tbody>
                        </table>

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
