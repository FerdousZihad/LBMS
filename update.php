  <?php 
   if(isset($_GET['id'],$_GET['page']))
    {
      $id=$_GET['id'];
      $page=$_GET['page'];
    }
    $pdo=new PDO('mysql:host=localhost;dbname=library','root','');
    $query=$pdo->query("select * from book where book_id='$id' ");
    $result=$query->fetch();
    $name=trim($result['book_name']);
    $author=trim($result['author']);
    if(isset($_POST['submit']))
    { 
      $book=$_POST['book'];
      $author=$_POST['author'];
      $dept=$_POST['dept'];
      $query=$pdo->query("update book set book_name='$book',author='$author',department='$dept' where book_id='$id'");
      if($query)
      {
        $location="book.php?page=".$page;
        header('location:'.$location);
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

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


  <!-- card -->
  <div style="width:70%" class="mx-auto mt-5 col-md-5">
    <div class="card " style="">
  <div class="card-header">
    Update
  </div>
  <div class="card-body">
  <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Book Name:</b></label>
    <input type="text" class="form-control" name="book" value="<?php echo $name ;?>" required>
 </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><b>author:</b></label>
    <input type="text" class="form-control" name="author" value="<?php echo $author;?>" required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1"><b>Department:</b></label><br>
    <select name="dept" class="form-control">
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="ECE">ECE</option>
    </select>
  </div>
   <!-- <input type="hidden" name="submit" value="<?php echo $id;?>"> -->
  <input type="submit" name="submit" class="btn btn-outline-primary">
</form>
  </div>
</div>

  </div>
  
<!-- Footer -->
  <div style="margin-top:120px;">
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

