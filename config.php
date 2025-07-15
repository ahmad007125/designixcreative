<?php 

    // config.php
    $host = $_SERVER['HTTP_HOST'];

    if ($host === 'localhost') {
        define('BASE_URL', 'http://localhost/designixcreative/');
    } else {
        define('BASE_URL', 'https://thedesignix.com/');
    }

?>