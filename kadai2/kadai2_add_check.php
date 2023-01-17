<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題2</title>
    </head>
    <body>
        
    <?php


    $kadai2_title=$_POST['title'];
    $kadai2_description=$_POST['description'];
    $kadai2_file=$_FILES['file'];

    $kadai2_title=htmlspecialchars($kadai2_title,ENT_QUOTES,'UTF-8');
    $kadai2_description=htmlspecialchars($kadai2_description,ENT_QUOTES,'UTF-8');

    if($kadai2_title=='')
    {
        print'画像のタイトルが入力されていません。<br/>';
    }
    else
    {
        print'画像のタイトル';
        print' ';
        print $kadai2_title;
        print'<br/>';
    }

   // if(preg_match('/\A[0-9]+\z/' , $pro_price==0))
   // {
      //  print'価格をきちんと入力してください。<br/>';
   // }
   // else
   // {
     //   print'価格:';
     //   print$pro_price;
     //   print'円<br/>';
   // }

   if($kadai2_description=='')
   {
       print'画像の説明が入力されていません。<br/>';
   }
   else
   {
       print'画像の説明';
       print' ';
       print $kadai2_description;
       print'<br/>';
   }

    if($kadai2_file['size']>0)
    {
        if($kadai2_file['size']>1000000 )
        {
            print'画像が大きすぎます';
        }else
        {
            move_uploaded_file($kadai2_file['tmp_name'],'./image/'.$kadai2_file['name']);
            print'<img src="./image/'.$kadai2_file['name'].'">';
            print'<br/>';
        }
    }

   if($kadai2_title==''||$kadai2_description==''||$kadai2_file['size']>1000000)
   {
        print'<form>';
        print'<input type ="button" onclick="history.back()"value="戻る">';
        print'</form>';
   }
    else
    {
       print'上記を追加します。<br/>';
        print'<form method="post" action="kadai2_add_done.php">';
        print'<input type="hidden" name="title" value="'.$kadai2_title.'">';
        print'<input type="hidden" name="description" value="'.$kadai2_description.'">';
        print'<input type="hidden" name="file_name" value="'.$kadai2_file['name'].'">';
        print'<br/>';
        print'<br/>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type ="submit" value="OK">';
        print'</from>';
    }

    ?>
    </body>
</html>