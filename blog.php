<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
	<title>Blog Page</title>

    <!-- bootstrap.min css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" /> -->
    
</head>


<body class="blog-page bg-light">
    <div class="container-fluid header-container bg-blue p-0" id="header">
        <div class="container">
            <div class="header navigation-bar d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.php" class="link d-block">
                        <img src="images/fd-logo-final-1.svg" alt="logo" width="130" height="35.8">
                    </a>
                </div>
                <ul class="centered-nav d-flex align-items-center gap-lg-5 gap-md-4 gap-3 mb-0 ps-0 py-1 py-md-0 justify-content-md-center justify-content-around">
                    <li><a href="index.php" class="link">Home</a></li><li style="display: contents;"><span class="y-divider d-md-none d-block"></span></li>
                    <li><a href="#" class="link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Launching soon!">Designs</a></li><li style="display: contents;"><span class="y-divider d-md-none d-block"></span></li>
                    <li><a href="blog.php" class="link">Blog</a></li><li style="display: contents;"><span class="y-divider d-md-none d-block"></span></li>
                    <li><a href="#" class="link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Launching soon!">About</a></li>
                </ul>
                <a href="resume.php" class="btn btn-success rounded">Create CV</a>
            </div>
        </div>
    </div>

    <!-- Banner start from here -->
    <div class="container-fluid banner bg-light py-5 px-sm-5 px-1">
        <div class="container">
            <div class="col-lg-7 col-sm-10 col-xs-12 mx-auto">
                <div class="my-sm-5 my-2 text-center">
                    <h2 class="mb-2">Blog Categories</h2>
                    <p>Blog categories help organize your content, making it easier for readers to find related posts and enhancing the overall user experience on your site.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog content start from here -->
    <div class="container-fluid bg-light pt-5 pb-0 px-0">
        <div class="container">
            <div class="blog-content">
                <h1 class="section-heading text-center text-dark mt-4 mb-sm-4 mb-3">Categories</h1>
                
                <div class="categories text-center mb-4 mb-sm-5 text-nowrap" id="categories">
                    <div class="category-bubble active-category" data-category="all">All</div>
                    <div class="category-bubble" data-category="category1">Technology</div>
                    <div class="category-bubble" data-category="category2">Web Solutions</div>
                    <div class="category-bubble" data-category="category3">Graphics</div>
                    <div class="category-bubble" data-category="category4">Science</div>
                    <div class="category-bubble" data-category="category5">Tech News</div>
                </div>

            </div>
            <div class="row" id="posts"></div>
        </div>
    </div>

    <!-- <h1>Blog</h1> -->
    <?php
        $postFiles = array_values(array_diff(scandir('posts'), array('..', '.')));
        echo '<script>';
        echo 'const postFiles = ' . json_encode($postFiles) . ';';
        echo '</script>';
    ?>

    <div class="container-fluid sixth-container call-container bg-img px-0 mt-5">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
</body>
</html>
