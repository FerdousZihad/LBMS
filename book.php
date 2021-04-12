  <?php 
    $page=1;
    if(isset($_GET['page']))
    {
      $page=$_GET['page'];
    }
    $limit=10;
    $offset=$page*$limit-$limit;
    $pdo=new PDO('mysql:host=localhost;dbname=library','root','');
    $query1=$pdo->query("select * from book limit $limit offset $offset");
    $query2=$pdo->query("select * from book");
    $total_row=$query2->rowCount();
    $total_page=ceil($total_row/$limit);
    // $query->execute();
    $result=$query1->fetchAll();
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Book List</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
  <style>
     
body {
  
  background-image:url( img/i.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
  
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">HSTU LIBRARY</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="student.php">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="book.php">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="librarian.php">Librarian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registration.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dev.php">About Developers</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <div class="container py-2  d-flex justify-content-end">  <a href="insert.php" class="btn btn-primary ">Insert</a></div>
  
  <!-- Page Content -->
  <div style="margin:0 auto;" class="col-sm-10" >

    <div class="card mt-3" >
  <div class="card-header">
     Books
  </div>
 
  <div class="card-body">
    
    <!-- form -->
  
    <!-- table -->
    <table class="table table-bordered table-hover text-center">
    <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Book Name</th>
         <th scope="col">author</th>
         <th scope="col">Department</th>
         <th scope="col">U/D</th>
        </tr>
  </thead>
  <tbody>
 <?php foreach($result as $r){ ?>
    <tr>
      <th scope="row"><?php echo $r['book_id']?></th>
      <td><?php echo $r['book_name']?></td>
      <td><?php echo $r['author']?></td>
      <td><?php echo $r['department']?></td>
      <td><a class="btn btn-outline-primary" href="update.php?id=<?php echo $r['book_id']?>&page=<?php echo $page;?>" clas="btn btn-outline-primary">Update</a>
      	  <a href="delete.php?id=<?php echo $r['book_id']?>&page=<?php echo $page;?>" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
</div>
</div>
<!-- Pagination -->
<ul class="pagination justify-content-center my-4">
  <li class="page-item <?php if($page<=1) echo 'disabled';?>"><a href="?page=<?php echo $page-1; ?>" class="page-link">Previous</a></li>
  <?php
  for($i=1;$i<=$total_page;$i++)
  {
?>
  <li class="page-item <?php if($page==$i) echo 'active';?>"><a href="?page=<?php echo $i;?>" class="page-link"><?php echo $i; ?></a></li>
  
  <?php } ?>
  <li class="page-item <?php if($page>=$total_page) echo 'disabled';?>">
  <a href="?page=<?php echo $page+1; ?>" class="page-link ">Next</a></li>
</ul>
<!-- Footer -->
  <div  style="margin-top:0px;">
    <footer class="py-2 bg-dark mt-5"  >
    <div class="container" >
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  </div>

<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    $('.alert').alert();
  </script>

</body>

</html>

