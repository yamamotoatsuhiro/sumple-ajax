<?php
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED );
session_cache_limiter('nocache');
session_start();
header( "Access-Control-Allow-Origin: *" );
header( "Content-Type: application/json; charset=utf-8" );

// ***********************************
// JSON データを作成
// ***********************************
$json = new stdClass;

$json->html = <<<HTML

<img src="https://lightbox.sakura.ne.jp/toolbox/image/script.png">

HTML;

print json_encode( $json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );

?>
