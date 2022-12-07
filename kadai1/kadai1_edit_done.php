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

            //p89～
        $kadai1_ID=$_POST['ID'];
        $kadai1_name=$_POST['name'];
        $kadai1_hurigana=$_POST['hurigana'];
        $kadai1_yubin=$_POST['yubin'];
        $kadai1_jusyo=$_POST['jusyo'];
        $kadai1_denwa=$_POST['denwa'];
        $kadai1_email=$_POST['email'];

        //$kadai1_ID=htmlspecialchars($kadai1_ID,ENT_QUOTES,'UTF-8');
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

        //print "<pre>";
        $sql= 'UPDATE kojin SET name=?,hurigana=?,yubin=?,jusyo=?,denwa=?,email=? WHERE ID=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai1_name;
        $data[]=$kadai1_hurigana;
        $data[]=$kadai1_yubin;
        $data[]=$kadai1_jusyo;
        $data[]=$kadai1_denwa;
        $data[]=$kadai1_email;
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

        修正しました。<br/>
        <br/>

        <a href="kadai1_list.php">戻る</a>
        
    </body>
</html>