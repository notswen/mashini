<?php

ob_start();

echo '
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>первое название</title>
</head>
<body>
header
Content
footer
</html>';

$out = ob_get_clean();

$header = require "header.php";
$footer = require "footer.php";
$content = require "content.php";

$end = str_replace("header", $header, $out);
$out = str_replace("footer", $footer, $end);
$out = str_replace("Content", $content, $out);
echo $out;

