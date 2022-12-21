<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>

        <?php
        
        try
        {
        
        $pro_code=$_POST['code'];
        $pro_gazou_name=$_POST['gazou_name'];
        
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='DELETE FROM mst_product WHERE code=?';
        $stmt=$dbh->prepare($sql);
        $date[]=$pro_code;
        $stmt->execute($date);

        $dbh=null;
        
        if($pro_gazou_name!='')
        {
            unlink('./gazou/'.$pro_gazou_name);
        }

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
        <a href="pro_list.php">戻る</a>
        
    </body>
</html>