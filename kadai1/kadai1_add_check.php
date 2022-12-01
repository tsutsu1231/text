<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>
        
    <?php

    // p62

    //$kadai1_ID=$_POST['ID'];
    $kadai1_name=$_POST['name'];
    $kadai1_hurigana=$_POST['hurigana'];
    $kadai1_yubin=$_POST['yubin'];
    $kadai1_jusyo=$_POST['jusyo'];
    $kadai1_denwa=$_POST['denwa'];
    $kadai1_email=$_POST['email'];

   // $kadai1_ID=htmlspecialchars($kadai1_ID,ENT_QUOTES,'UTF-8');
    $kadai1_name=htmlspecialchars($kadai1_name,ENT_QUOTES,'UTF-8');
    $kadai1_hurigana=htmlspecialchars($kadai1_hurigana,ENT_QUOTES,'UTF-8');
    $kadai1_yubin=htmlspecialchars($kadai1_yubin,ENT_QUOTES,'UTF-8');
    $kadai1_jusyo=htmlspecialchars($kadai1_jusyo,ENT_QUOTES,'UTF-8');
    $kadai1_denwa=htmlspecialchars($kadai1_denwa,ENT_QUOTES,'UTF-8');
    $kadai1_email=htmlspecialchars($kadai1_email,ENT_QUOTES,'UTF-8');
    

    //if($kadai1_ID=='')
    //{
      //  print'IDが入力されていません。<br/>';
    //}
   // else
   // {
     //   print'ID:';
     //   print $kadai1_ID;
     //   print'<br/>';
    //}

    if($kadai1_name=='')
    {
        print'氏名が入力されていません。<br/>';
    }
    else
    {
        print'氏名:';
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
        print 'Email:';
        print $kadai1_email;
        print'<br/>';
    }


    if($kadai1_name==''||$kadai1_hurigana=='' || $kadai1_yubin=='' || $kadai1_jusyo=='' || $kadai1_denwa=='' ||$kadai1_email=='')
    {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
    }
    else
    {

        //$staff_pass=md5($staff_pass);  //わからない　p63
        //$kadai1_ID=md5($kadai1_ID);
        //$kadai1_name=md5($kadai1_name);
        //$kadai1_hurigana=md5($kadai1_hurigana);
        //$kadai1_yubin=md5($kadai1_yubin);
        //$kadai1_jusyo=md5($kadai1_jusyo);
        //$kadai1_denwa=md5($kadai1_denwa);
        //$kadai1_email=md5($kadai1_email);
        print'<form method="post" action="kadai1_add_done.php">';
        print'<input type="hidden" name="name" value="'.$kadai1_name.'">';
        print'<input type="hidden" name="hurigana" value="'.$kadai1_hurigana.'">';
        print'<input type="hidden" name="nyubin" value="'.$kadai1_yubin.'">';
        print'<input type="hidden" name="pass" value="'.$kadai1_jusyo.'">';
        print'<input type="hidden" name="name" value="'.$kadai1_denwa.'">';
        print'<input type="hidden" name="pass" value="'.$kadai1_email.'">';
        print'<br/>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type ="submit" value="OK">';
        print'</from>';
    }

    ?>
    </body>
</html>