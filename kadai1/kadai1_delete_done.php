<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>

        <?php
        
        try
        {

            //p101～
        $kadai1_ID=$_POST['ID'];

        $kadai1_ID=htmlspecialchars($kadai1_ID,ENT_QUOTES,'UTF-8');
        
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8'; 
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        print "<pre>";
        $sql='DELETE FROM kojin WHERE ID=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai1_ID;
        $stmt->execute($data);

        $dbh=null;

        }
        catch(Exception $e)
        {
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            print"<br>".$e->getMessage();
            exit();
        }
        
        ?>

        削除しました。<br/>
        <br/>

        <a href="kadai1_list.php">戻る</a>
        
    </body>
</html>