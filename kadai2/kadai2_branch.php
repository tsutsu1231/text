<?php

if(isset($_POST['disp'])==true)
{
    if(isset($_POST['id'])==false)
    {
        header('Location:kadai2_ng.php');
        exit();
    }
    $pro_code=$_POST['id'];
    header('Location:kadai2_disp.php?id='.$kadai2_id);
    exit();
}

if(isset($_POST['add'])==true)
{
    header('Location:kadai2_add.php');
    exit();
}

if(isset($_POST['edit'])==true)
{

   if(isset($_POST['id'])==false)
   {
    header('Location:kadai2_ng.php');
    exit();
   }
   $pro_code=$_POST['id'];
   header('Location:kadai2_edit.php?id='.$kadai2_id);
   exit();
}

if(isset($_POST['delete'])==true)
{
    if(isset($_POST['id'])==false)
    {
        header('Location:kadai2_ng.php');
        exit();
    }
    $pro_code=$_POST['id'];
    header('Location:kadai2_delete.php?id='.$kadai2_id);
    exit();
    
}

?>