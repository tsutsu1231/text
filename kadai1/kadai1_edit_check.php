<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>

        <?php


            //p73～
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
        
        if($kadai1_name=='')
    {
        print'名前が入力されていません。<br/>';
    }
    else
    {
        print'名前:';
        print $kadai1_name;
        print'<br/>';
    }

    if($kadai1_hurigana=='')
    {
        print'ふりがなが入力されていません。<br/>';
    }
    else
    {
        print'ふりがな:';
        print $kadai1_hurigana;
        print'<br/>';
    }

    if($kadai1_yubin=='')
    {
        print'郵便番号が入力されていません。<br/>';
    }
    else
    {
        print'郵便番号:';
        print $kadai1_yubin;
        print'<br/>';
    }
    if($kadai1_jusyo=='')
    {
        print'住所が入力されていません。<br/>';
    }
    else
    {
        print'住所:';
        print $kadai1_jusyo;
        print'<br/>';
    }
    if($kadai1_denwa=='')
    {
        print'電話番号が入力されていません。<br/>';
    }
    else
    {
        print'電話番号:';
        print $kadai1_denwa;
        print'<br/>';
    }
    if($kadai1_email=='')
    {
        print'Emailが入力されていません。<br/>';
    }
    else
    {
        print'Email:';
        print $kadai1_email;
        print'<br/>';
    }

        //$dsn='mysql:dbname=shop;host=localhost;charset=utf8'; 
        //$user='root';
        //$password='';
        //$dbh=new PDO($dsn,$user,$password);
        //$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //print "<pre>";
       //$sql='INSERT INTO kojin(ID,name,hurigana,yubin,jusyo,denwa,email) VALUES(?,?,?,?,?,?,?)';
       // $stmt=$dbh->prepare($sql);
        //$data[]=$kadai1_ID;
        //$data[]=$kadai1_name;
        //$data[]=$kadai1_hurigana;
        //$data[]=$kadai1_yubin;
        //$data[]=$kadai1_jusyo;
        //$data[]=$kadai1_denwa;
        //$data[]=$kadai1_email;
        //$stmt->execute($data);

        //$dbh=null;



    if($kadai1_name ==''|| $kadai1_hurigana=='' ||$kadai1_yubin=='' || $kadai1_jusyo=='' || $kadai1_denwa=='' || $kadai1_email==''){
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
    }else{
        print'<form method="post" action="kadai1_edit_done.php">';
        print'<input type="hidden" name="ID" value="'.$kadai1_ID.'">';
        print'<input type="hidden" name="name" value="'.$kadai1_name.'">';
        print'<input type="hidden" name="hurigana" value="'.$kadai1_hurigana.'">';
        print'<input type="hidden" name="yubin" value="'.$kadai1_yubin.'">';
        print'<input type="hidden" name="jusyo" value="'.$kadai1_jusyo.'">';
        print'<input type="hidden" name="denwa" value="'.$kadai1_denwa.'">';
        print'<input type="hidden" name="email" value="'.$kadai1_email.'">';
        print'<br/>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type="submit" value="OK">';
        print '</form>';

    }
        
        
        ?>
        
    </body>
</html>