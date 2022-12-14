<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
        <link href="kadai1_delete.css" rel="stylesheet" type="text/css">
    </head>
<body>

<?php
    
try
{

$Kadai1_ID=$_GET['ID'];

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM kojin WHERE ID=?';
$stmt=$dbh->prepare($sql);
$data[]=$Kadai1_ID;
$stmt->execute($data);

$rec = $stmt->fetch(PDO::FETCH_ASSOC);
$kadai1_name=$rec['name'];

$dbh=null;

}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}

?>

<div class=sakujo>

削除<br/>
<br/>
</div>

<div class=meimoku>
ID<br/>
<?php print $Kadai1_ID;?>
<br/>
名前<br/>
<?php print $kadai1_name; ?>
<br/>
<br/>
</div>

<div class=kakunin>
削除してよろしいですか？<br/>
</div>
<br/>
<form method="post" action="kadai1_delete_done.php">
<input type="hidden" name="ID" value="<?php print $Kadai1_ID;?>">
<input type ="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">

</form>
        
    </body>
</html>