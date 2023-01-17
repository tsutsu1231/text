<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題2</title>
        <link href="kadai2_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>

    <?php
    
    try
    {

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $dbh=new PDO($dsn,$user,"");
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT id,title,description,file FROM image WHERE 1';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();
    

    $dbh=null;

    print'画像一覧<br/><br/>';

    print' ';
    print'ID';
    print' ';
    print'タイトル';
    print' ';
    print'サムネイル';

    print'<form method="post" action="kadai2_branch.php">';
    while(true)
    {
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false)
        {
            break;
        }
        print'<input type="radio" name="kadai2code" value="'.$rec['id'].'">';
        print$rec['title'];
        //print$rec['description'];
        //print$rec['file'];
        print'<br/>';
    }
    print'<input type="submit" name="disp" value="参照">';
    print'<input type="submit" name="add" value="追加">';
    //print'<input type="submit" name="edit" value="修正">';
    print'<input type="submit" name="delete" value="削除">';
    print'</form>';
    }
    catch(Exception $e)
    {
        print "ご迷惑をお掛けしています";
    }
    
   
    ?>
    </body>
</html>