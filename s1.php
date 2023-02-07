<?php
session_start();
if (isset($_SESSION["data"])){
    $data = $_SESSION["data"];
    $data++;
    $_SESSION["data"] = $data; //データを保存
}else{
    $_SESSION["data"] = 0;
}
?>
<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>セッション１</title>
    </head>
    <body>
        <p>データは <?=$data ?></p>
        <a href="s2.php">s2へ</a>
    </body>
</html>