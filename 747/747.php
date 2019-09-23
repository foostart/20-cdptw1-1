<?php 
    

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block . '/libs/lessc.inc.php');
}

    $less = new lessc;
    $less->compileFile('less/747.less', 'css/747.css');
 ?>
<html>
    <head>
        <title>title</title>
        
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/747.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
       
    </head>
    <body>
        <?php include '../747/747-content.php'; ?>
    </body>
</html>
