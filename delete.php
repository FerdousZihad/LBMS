<?php
$pdo=new PDO('mysql:host=localhost;dbname=library','root','');
  if(isset($_GET['id'],$_GET['page']))
  {
    $id=$_GET['id'];
    $page=$_GET['page'];
  }
  if($pdo->query("delete from book where book_id='$id'"))
    {

     
      $location="book.php?page=".$page;
      header('location:'.$location);
    }

?>