<?php 
    

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block . '/libs/lessc.inc.php');
}

    $less = new lessc;
    $less->compileFile('less/747.less', 'css/747.css');
 ?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module 747</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/747.css">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script
        src="./js/jquery.responsivetabs.js"></script>
        <script src="./js/747.js"></script>
</head>

<body>
    <?php include './747-content.php'; ?>
</body>

</html>