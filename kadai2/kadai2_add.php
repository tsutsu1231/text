<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題2</title>
        <link href="kadai1_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class=sinki>
        新規追加<br/>
        </div>
        <br/>
        <form method="post" action="kadai1_add_check.php">
            <div class=jouhou>
            画像のタイトル　
            <input type="text" name="name" style="width:300px"><br/>
            画像の説明　
            <input type="textarea" name="setumei" style="width:400px" style="height:200px;"><br/>
            画像ファイルの選択　
            <input type="file" name="gazou" style="width:400px"><br/>
            </div>
            <br/>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="OK"> 
        </form>
        
    </body>
</html>