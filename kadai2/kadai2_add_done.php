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
        
        $kadai2_title=$_POST['title'];
        $kadai2_description=$_POST['description'];
        $kadai2_file_name=$_POST['file_name'];

        $kadai2_title=htmlspecialchars($kadai2_title,ENT_QUOTES,'UTF-8');
        $kadai2_description=htmlspecialchars($kadai2_description,ENT_QUOTES,'UTF-8');

        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        print "<pre>";
        $sql='INSERT INTO image(title,description,file) VALUES(?,?,?)';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai2_title;
        $data[]=$kadai2_description;
        $data[]=$kadai2_file_name;
        $stmt->execute($data);

        $dbh=null;

        print $kadai2_title;
        print'を追加しました。<br/>';

        }
        catch(Exception $e)
        {
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            print"<br>".$e->getMessage();
            exit();
        }
        
        ?>

        <a href="kadai2_list.php">戻る</a>
        
    </body>
</html>