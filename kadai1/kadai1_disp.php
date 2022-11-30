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

    //p106

$kadai1_ID=$_GET['ID'];


$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name,hurigana,yubin,jusyo,denwa,email FROM kojin WHERE ID=?';
$stmt=$dbh->prepare($sql);
$data[]=$kadai1_ID;
$stmt->execute($data);

$rec = $stmt->fetch(PDO::FETCH_ASSOC);
$kadai1_name=$rec['name'];
$kadai1_hurigana=$rec['hurigana'];
$kadai1_yubin=$rec['yubin'];
$kadai1_jusyo=$rec['jusyo'];
$kadai1_denwa=$rec['denwa'];
$kadai1_email=$rec['email'];


$dbh=null;

}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}

?>

情報参照<br/>
<br/>
ID<br/>
<?php print $kadai1_ID;?>
<br/>
名前<br/>
<?php print $kadai1_name;?>
<br/>
ふりがな<br/>
<?php print $kadai1_hurigana;?>
<br/>
郵便番号<br/>
<?php print $kadai1_yubin;?>
<br/>
住所<br/>
<?php print $kadai1_jusyo;?>
<br/>
電話番号<br/>
<?php print $kadai1_denwa;?>
<br/>
Email<br/>
<br/>
<?php print $kadai1_email;?>
<input type ="button" onclick="history.back()" value="戻る">
</form>
        
    </body>
</html>