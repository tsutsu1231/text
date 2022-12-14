<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
        <link href="kadai1_disp.css" rel="stylesheet" type="text/css">
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

<div class=sansyou>
情報参照<br/>
<br/>
</div>

<div class=jouhou>
<div class = id>
ID<br/>
<?php print $kadai1_ID;?>
<br/>
</div>
<div class=namae>
名前<br/>
<?php print $kadai1_name;?>
<br/>
</div>
<div class=hurigana>
ふりがな<br/>
<?php print $kadai1_hurigana;?>
<br/>
</div>
<div class=yubin>
郵便番号<br/>
<?php print $kadai1_yubin;?>
<br/>
</div>
<div class=jusyo>
住所<br/>
<?php print $kadai1_jusyo;?>
<br/>
</div>
<div class=denwa>
電話番号<br/>
<?php print $kadai1_denwa;?>
<br/>
</div>
<div class=email>
Email<br/>
<?php print $kadai1_email;?>
<br/>
</div>
<br/>

</div>
<input class="botan" type ="button" onclick="history.back()" value="戻る">
</form>
        
    </body>
</html>