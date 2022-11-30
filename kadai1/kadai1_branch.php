<?php

if(isset($_POST['add'])==true)
{
    header('Location:kadai1_add.php');
    exit();
}


if(isset($_POST['disp'])==true)
{
    if(isset($_POST['ID'])==false)
    {
        header('Location:kadai1_ng.php');
        exit();
    }
    $kadai1_ID=$_POST['ID'];
    header('Location:kadai1_disp.php?ID='.$kadai1_ID);
    exit();
}

if(isset($_POST['edit'])==true)
{

   if(isset($_POST['ID'])==false)
   {
    header('Location:kadai1_ng.php');
    exit();
   }
   $kadai1_ID=$_POST['ID'];
   header('Location:kadai1_edit.php?ID='.$kadai1_ID);
   exit();
}

if(isset($_POST['delete'])==true)
{
    if(isset($_POST['ID'])==false)
    {
        header('Location:kadai1_ng.php');
        exit();
    }
    $kadai1_ID=$_POST['ID'];
    header('Location:kadai1_delete.php?ID='.$kadai1_ID);
    exit();
    
}

?>