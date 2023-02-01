<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題2</title>
        <link href="kadai2_list.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <?php
    
    try
    {

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $dbh=new PDO($dsn,$user,"");
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT id,title,description,file FROM image WHERE 1';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();
    

    $dbh=null;
    echo"
    <h1>
    画像一覧</h1>";

    print'<form method="post" action="kadai2_branch.php">';

    echo "<table>";

    echo "<tr>";

    print "<th> </th>";
    print"<th>ID</th>";
    //print' ';
    print"<th>タイトル</th>";
    //print' ';
    print"<th>サムネイル</th>";

    echo "</tr>";

    while(true)
    {
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);

        if($rec==false)
        {
            break;
        }
        $kadai2_file_name=$rec['file'];
        $list_file='<img src="./image/' .$kadai2_file_name.'">';
        print'<td><input type="radio" name="kadai2code" value="'.$rec['id'].'">';
        print"<td>".$rec['id']."</td>";
        print"<td>".$rec['title']."</td>";
        //print$rec['description'];
        //print$rec['file'];
        print "<td>$list_file </div></td>";
        print'<tr><br/></tr>';
        print'<br/>';

    }
    echo "</table>";
    print '<br/>';
    print'<div class=button>';
    print'<input type="submit" name="disp" value="参照">';
    print'<input type="submit" name="add" value="追加">';
    //print'<input type="submit" name="edit" value="修正">';
    print'<input type="submit" name="delete" value="削除">';
    print'</div>';
    print'</form>';
    }
    catch(Exception $e)
    {
        print "ご迷惑をお掛けしています";
    }
    
   
    ?>
    </body>
</html>