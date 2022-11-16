<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>
        
    <?php

    $staff_name=$_POST['name'];
    $staff_price=$_POST['price'];

    $staff_name=htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
    $staff_price=htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');

    if($pro_name=='')
    {
        print'商品名が入力されていません。<br/>';
    }
    else
    {
        print'商品名:';
        print $pro_name;
        print'<br/>';
    }

    if(preg_match('/\A[0-9]+\z/' , $pro_price==0))
    {
        print'価格をきちんと入力してください。<br/>';
    }
    else
    {
        print'価格:';
        print$pro_price;
        print'円<br/>';
    }

   if($pro_name==''||preg_match('/\A[0-9]+\z/',$pro_price==0))
   {
    print'<form>';
    print'<input type ="button" onclick="history.back()"value="戻る">';
    print'</form>';
   }
    else
    {
       print'上記の商品を追加します。<br/>';
        print'<form method="post" action="pro_add_done.php">';
        print'<input type="hidden" name="name" value="'.$pro_name.'">';
        print'<input type="hidden" name="pass" value="'.$pro_price.'">';
        print'<br/>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type ="submit" value="OK">';
        print'</from>';
    }

    ?>
    </body>
</html>