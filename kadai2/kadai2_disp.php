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
$kadai2_id=$_GET['kadai2id'];

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT title,description,file FROM image WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$kadai2_id;
$stmt->execute($data);

$rec = $stmt->fetch(PDO::FETCH_ASSOC);
$kadai2_title=$rec['title'];
$kadai2_description=$rec['description'];
$kadai2_file_name=$rec['file'];

$dbh=null;

if($kadai2_file_name=='')
{
    $disp_file='';
}
else
{
    $disp_file='<img src="./image/'.$kadai2_file_name.'">';
}

}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}

?>

情報参照<br/>
<br/>
タイトル<br/>
<?php print $kadai2_title;?>
<br/>
説明<br/>
<?php print $kadai2_description;?>
<br/>
<?php print $disp_file;?>
<br/>
<br/>
<form>
<input type ="button" onclick="history.back()" value="戻る">
</form>
        
    </body>
</html>