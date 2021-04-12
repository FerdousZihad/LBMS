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
  <div style="width:80%"; class="mx-auto my-5 col-md-4">
    <div class="card ">
  <div class="card-header ">
    Resgister
  </div>
  <div class="card-body">
  <form  action="register.php" method="post">
    <div class="form-group">
      <strong>Name:</strong>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
    <strong>Student-ID:</strong>
    <input type="number" name="id" class="form-control">
    </div>
  
    <div class="form-group">
     <strong>Phone:</strong>
    <input type="text" name="phone" class="form-control">
    </div>
     <div class="form-group">
     <strong>Department:</strong>
     <select class="form-control" name="dept">
       <option value="cse">CSE</option>
       <option value="eee">EEE</option>
       <option value="ece">ECE</option>
     </select>
    </div>
    <div class="form-group">
      <input type="submit" name="submit" class="btn btn-outline-primary">
    </div>
   
  
 </form>
  </div>
</div>
</div>

       
      
   <ul class="pagination justify-content-center" mx-auto>
    <li class="page-item active"><a href="#" class="page-link">Previous</a></li>
    <li class="page-item"><a href="#" class="page-link">Next</a></li>
   </ul>
        
    

  <!-- Footer -->
  <footer class="py-2 bg-dark ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
