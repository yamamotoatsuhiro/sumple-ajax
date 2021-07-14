<?php
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED );
session_cache_limiter('nocache');
session_start();
header( "Access-Control-Allow-Origin: *" );
header( "Content-Type: application/json; charset=utf-8" );

// ***********************************
// データーベース接続情報
// ***********************************
$host = "localhost";
$user = "root";
$password = "";
$dbname = "lightbox";
$connect_string = "mysql:host={$host};dbname={$dbname}";

// ***********************************
// 接続
// ***********************************
$pdo = new PDO( $connect_string, $user, $password );

// ***********************************
// SQL 実行
// ***********************************
$sql = <<<QUERY
select 
    社員コード,
    氏名,
    フリガナ,
    所属,
    性別,
    給与,
    手当,
    管理者,
    DATE_FORMAT(生年月日,'%Y/%m/%d') as 生年月日
from 社員マスタ
order by 社員コード
QUERY;

$statement = $pdo->prepare($sql);
$statement->execute();

// ***********************************
// JSON データを作成
// ***********************************
$json = new stdClass;
$json->row = [];

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $json->row[] = $row;
}

// ***********************************
// ブラウザへ返す
// JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT はデバッグ用
// ***********************************
//print json_encode( $json );
print json_encode( $json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );

?>
