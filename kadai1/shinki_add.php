<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>
        新規追加<br/>
        <br/>
        <form method="post" action="staff_add_check.php">
            IDを入力してください。<br/>
            <input type="text" name="id" style="width:200px"><br/>
            氏名を入力してください。<br/>
            <input type="password" name="name" style="width:100px"><br/>
            パスワードをもう１度入力してください。<br/>
            <input type="password" name="pass2" style="width:100px"><br/>
            <br/>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="OK"> 
        </form>
        
    </body>
</html>