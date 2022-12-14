<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
        <link href="kadai1_edit.css" rel="stylesheet" type="text/css">
    </head>
<body>

<?php
    
try
{

    //p85

$kadai1_ID=$_GET['ID'];

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM kojin WHERE ID=?';
$stmt=$dbh->prepare($sql);
$data[]=$kadai1_ID;
$stmt->execute($data);

$rec = $stmt->fetch(PDO::FETCH_ASSOC);
$kadai1_name=$rec['name'];
//$kadai1_name=$rec['hurigana'];
//$kadai1_name=$rec['yubin'];
//$kadai1_name=$rec['jusyo'];
//$kadai1_name=$rec['denwa'];
//$kadai1_name=$rec['email'];

$dbh=null;

}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}

?>

<div class=syusei>
修正<br/>
<br/>
</div>
<div class=meimoku>
    
ID<br/>
<?php print $kadai1_ID;?>
<br/>
<br/>
<form method="post" action="kadai1_edit_check.php">
<input type="hidden" name="ID" value="<?php print $kadai1_ID;?>">
名前<br/>
<input type="text" name="name" style="width:200px"><br/>
ふりがな<br/>
<input type="text" name="hurigana" style="width:200px"><br/>
郵便番号<br/>
<input type="number" name="yubin" style="width:200px"><br/>
住所<br/>
<input type="text" name="jusyo" style="width:200px"><br/>
電話番号<br/>
<input type="tel" name="denwa" style="width:200px"><br/>
Email<br/>
<input type="text" name="email" style="width:200px"><br/>
<br/>
<input type ="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">

</div>
</form>
        
    </body>
</html>