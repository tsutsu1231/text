<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題2</title>
        <link href="kadai2_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class=sinki>
        新規追加<br/>
        </div>
        <br/>
        <form method="post" action="kadai2_add_check.php"enctype="multipart/form-data">
            <div class=jouhou>
            画像のタイトル　<br/>
            <input type="text" name="title" style="width:300px"><br/>
            画像の説明　<br/>
            <input type="textarea" name="description" style="width:400px"><br/>
            画像ファイルの選択　<br/>
            <input type="file" name="file" style="width:400px"><br/>
            </div>
            <br/>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="OK"> 
        </form>
        
    </body>
</html>