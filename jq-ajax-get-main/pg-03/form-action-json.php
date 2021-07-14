<?php
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED );
session_cache_limiter('nocache');
session_start();
header( "Access-Control-Allow-Origin: *" );
header( "Content-Type: text/plain; charset=utf-8" );

// ***********************************
// テキストデータを作成
// ***********************************
print <<<HTML

<img src="https://lightbox.sakura.ne.jp/toolbox/image/script.png" title="画像">

HTML;

?>
