<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
        <link href="kadai1_list.css" rel="stylesheet" type="text/css">
    </head>
    <body>

    <?php
    
    try
    {
    
        //p80

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT ID,name,hurigana FROM kojin WHERE 1';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();

    $dbh=null;
    echo "<div class=itiran>";
    echo '<br>一覧<br/><br/>';
    echo "</div>";

    print'<form method="post" action="kadai1_branch.php">';
    while(true)
    {
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false)
        {
            break;
        }
        
        echo "<div class=kojinmei>";

        print'<input type="radio" name="ID" value="'.$rec['ID'].'">';
        print $rec['name'];
        print '<br/>';
        print $rec['hurigana'];
        print'<br/>';
        print'<br/>';

        echo "</div>";
    }
    

    echo '<input class="botan"input type="submit" name="disp" value="参照">';
    echo '<input class="botan"input type="submit" name="add" value="追加">';
    echo '<input class="botan"input type="submit" name="edit" value="修正">';
    echo '<input class="botan"input type="submit" name="delete" value="削除">';
    print'</form>';
    }
    catch(Exception $e)
    {
        print "ご迷惑をお掛けしています";
    }
    
   
    ?>

    </body>
</html>