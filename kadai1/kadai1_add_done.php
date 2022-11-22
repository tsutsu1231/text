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
        
        $kadai1_ID=$_POST['ID'];
        $kadai1_name=$_POST['name'];
        $kadai1_hurigana=$_POST['hurigana'];
        $kadai1_yubin=$_POST['yubin'];
        $kadai1_jusyo=$_POST['jusyo'];
        $kadai1_denwa=$_POST['denwa'];
        $kadai1_email=$_POST['email'];

        $kadai1_ID=htmlspecialchars($kadai1_ID,ENT_QUOTES,'UTF-8');
        $kadai1_name=htmlspecialchars($kadai1_name,ENT_QUOTES,'UTF-8');
        $kadai1_hurigana=htmlspecialchars($kadai1_hurigana,ENT_QUOTES,'UTF-8');
        $kadai1_yubin=htmlspecialchars($kadai1_yubin,ENT_QUOTES,'UTF-8');
        $kadai1_jusyo=htmlspecialchars($kadai1_jusyo,ENT_QUOTES,'UTF-8');
        $kadai1_denwa=htmlspecialchars($kadai1_denwa,ENT_QUOTES,'UTF-8');
        $kadai1_email=htmlspecialchars($kadai1_email,ENT_QUOTES,'UTF-8');
        
        

        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        print "<pre>";
        $sql='INSERT INTO kojin(ID,name,hurigana,yubin,jusyo,denwa,email) VALUES(?,?)';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai1_ID;
        $data[]=$kadai1_name;
        $data[]=$kadai1_hurigana;
        $data[]=$kadai1_yubin;
        $data[]=$kadai1_jusyo;
        $data[]=$kadai1_denwa;
        $data[]=$kadai1_email;
        $stmt->execute($data);

        $dbh=null;

        print $kadai1_name;
        print'さんを追加しました。<br/>';

        }
        catch(Exception $e)
        {
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            print"<br>".$e->getMessage();
            exit();
        }
        
        ?>

        <a href="kadai1_list.php">戻る</a>
        
    </body>
</html>