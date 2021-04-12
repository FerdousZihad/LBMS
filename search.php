<?php
$pdo=new PDO('mysql:host=localhost;dbname=library','root','');
  
  $connect = mysqli_connect('localhost', 'root', '', 'library');

  if(isset($_POST['submit']))
  {
    session_start();
    
    $_SESSION['search_by'] = $_POST['by_book_name'];
    
    header("location:searched_book_list.php");

  }
  
?>





<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Search</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
  <style>
    body {
        background-image:url( img/search.png);
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

  <!-- Page Content -->

  <div class="row">
     <div class="col-md-6 mx-auto mt-5">
         <form action="?" method="POST">
              
              <div class="form-group">
                  <label for="exampleInputPassword1" class = "text-white">Search by Book Name</label><br>
                  <!-- <select name="search_by" class="form-control">
                      <option value="Book Name">Book Name</option>
                      <option value="author">author</option>
                      <option value="Department">Department</option>
                  </select>
                  -->
                  <input type = "text" name = 'by_book_name' class = 'form-control' placeholder = 'enter book name'>
              </div>
   <!-- <input type="hidden" name="submit" value="<?php echo $id;?>"> -->
             <input type="submit" name="submit" class="form-control btn-info">
    
</form>


     </div>
</div>
  
       
      

        
       

  <!-- Footer -->
  <div style="margin-top:440px">
  <footer class="py-2 bg-dark  ">
    <div class="container ">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
