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

$kadai2_code=$_GET['kadai2code'];

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT id,title,file FROM image WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$kadai2_code;
$stmt->execute($data);

$rec = $stmt->fetch(PDO::FETCH_ASSOC);
$kadai2_title=$rec['title'];
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
    print $e->getMessage();
    exit();
}

?>

削除<br/>
<br/>
【ID】<br/>
<?php print $kadai2_code;?>
<br/>
【タイトル】<br/>
<?php print $kadai2_title; ?>
<br/>
<?php print $disp_file;?>
<br/>
このファイルを削除してよろしいですか？<br/>
<br/>
<form method="post" action="kadai2_delete_done.php">
<input type="hidden" name="kadai2code" value="<?php print $kadai2_code;?>">
<input type="hidden" name="file_name" value="<?php print $kadai2_file_name;?>">
<input type ="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>
        
    </body>
</html>