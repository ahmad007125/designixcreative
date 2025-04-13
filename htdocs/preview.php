<?php
if (isset($_GET['file'])) {
    $file = urldecode($_GET['file']);
    if (file_exists($file)) {
        // Display the PDF in an iframe
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Preview PDF</title>
        </head>
        <body>
            <h1>PDF Preview</h1>
            <iframe src="' . $file . '" style="width: 100%; height: 600px;" frameborder="0"></iframe>
            <br>
            <a href="' . $file . '" download>Download PDF</a>
            <br>
            <a href="javascript:window.close();">Close Preview</a>
        </body>
        </html>';
    } else {
        echo "File not found.";
    }
} else {
    echo "No file specified.";
}
?>