<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

preg_match($pattern_uri, $_SERVER['REQUEST_URI'], $matches);
$url_path = $url_host . (isset($matches[1]) ? $matches[0] : '');

$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/3009.less', 'css/3009.css');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobicare</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="http://<?php echo $url_host; ?>/3009/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>             
    <link href="http://<?php echo $url_host; ?>/3009/css/3009.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<?php include './3009-content.php'; ?>
</body>
</html>
