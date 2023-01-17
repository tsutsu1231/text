<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題2</title>
    </head>
    <body>

        <?php
        
        try
        {
        
        $kadai2_code=$_POST['kadai2code'];
        $kadai2_file_name=$_POST['file_name'];
        
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='DELETE FROM image WHERE id=?';
        $stmt=$dbh->prepare($sql);
        $date[]=$kadai2_code;
        $stmt->execute($date);

        $dbh=null;
        
        if($kadai2_file_name!='')
        {
            unlink('./image/'.$kadai2_file_name);
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
        <a href="kadai2_list.php">戻る</a>
        
    </body>
</html>