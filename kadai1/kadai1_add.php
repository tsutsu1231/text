<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
        <link href="kadai1_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class=sinki>
        新規追加<br/>
        </div>
        <br/>
        <form method="post" action="kadai1_add_check.php">
            <div class=jouhou>
            氏名を入力してください。<br/>
            <input type="text" name="name" style="width:100px"><br/>
            ふりがなを入力してください。<br/>
            <input type="text" name="hurigana" style="width:100px"><br/>
            郵便番号を入力してください。<br/>
            <input type="number" name="yubin" style="width:100px"><br/>
            住所を入力してください。<br/>
            <input type="text" name="jusyo" style="width:200px"><br/>
            電話番号を入力してください。<br/>
            <input type="tel" name="denwa" pattern="[\d\-]*" style="width:100px"><br/>
            Eメールアドレスを入力してください。<br/>
            <input type="email" name="email" style="width:100px"><br/>
            </div>
            <br/>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="OK"> 
        </form>
        
    </body>
</html>