<?php
if (empty($url_path)) {
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
}
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/1255.less', 'css/1255.css');
?>
<!DOCTYPE html>
<html>

<head>
    <title>1255</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/1255.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('a.login-window').click(function () {
                var loginBox = $(this).attr('href');
                $(loginBox).fadeIn("slow");
                $('body').append('<div id="over"></div>');
                $('#over').fadeIn(300);

                return false;
            });
            $(document).on('click', "a.close, #over", function () {
                $('#over, .login').fadeOut(300, function () {
                    $('#over').remove();
                });
                return false;
            });

        });
    </script>
</head>

<body>
    <?php include './1255-content.php'; ?>
</body>

</html>