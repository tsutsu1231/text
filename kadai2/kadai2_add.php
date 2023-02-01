<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題2</title>
        <link href="kadai2_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class=sinki>
       <h1> 新規追加</h1><br/>
        </div>
        <br/>
        <form method="post" action="kadai2_add_check.php"enctype="multipart/form-data">
        <table>
        <tr>
            <div class=jouhou>
           <th>画像のタイトル　</th>
            <td><input type="text" name="title" style="width:380px"></td><br/>
            <tr><br/></tr>
           <th> 画像の説明　</th>
           <td><textarea name="description" cols="50" rows="5"></textarea></td><br/>
           <tr><br/></tr>
           <th> 画像ファイルの選択　</th>
            <td><input type="file" name="file" style="width:400px"></td><br/>
            </div>
        </tr>
        </table>
            <br/>
            <div class=button>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="OK"> 
</div>
        </form>
        
    </body>
</html>