# jQuery による ajax( GET ) の基本サンプル
https://docs.github.com/ja/github/writing-on-github/working-with-advanced-formatting/creating-and-highlighting-code-blocks
# #PG-01 : JS
```javascript
formData = new Object();
formData["name"] = $("#fld").val();
```
```javascript
$("#message").text( data.name );

$("<span>")
    .css( "color", "red" )
    .text( data.name )
    .appendTo( $("#content") )
;
```   
# #PG-01 : PHP : 要 isset チェック
```php
$json = new stdClass;
// 未定義データには空文字をセット
if ( !isset( $_GET["name"] ) ) {
    $_GET["name"] = "";
}
$json->name = $_GET["name"];
```
