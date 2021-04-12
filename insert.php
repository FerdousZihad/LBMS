<?php
$pdo=new PDO('mysql:host=localhost;dbname=library','root','');
  if(isset($_POST['submit']))
  {
    $name=$_POST['book'];
    $author=$_POST['author'];
    $dept=$_POST['dept'];

    if($pdo->query("INSERT INTO book (book_name,author,department)VALUES ('$name', '$author', '$dept')"))
    {

      echo "<script>alert('Insert Successfully Done')</script>";
       // header('location:registration.php');
    }
    else{
      echo "No";
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

  <title>Insert</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
  <style>
     
body {
  
  background-image:url( img/i.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color:white;
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
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->

  <div class="row">
     <div class="col-md-6 mx-auto mt-5">
         <form action="?" method="POST">
         	   <div class="form-group">
                <label for="exampleInputPassword1">Book name</label>
                <input name="book" type="text" class="form-control" id="exampleInputPassword1"   required>
              </div>
              

              <div class="form-group">
                <label for="exampleInputPassword1">author name</label>
                <input name="author" type="text" class="form-control" id="exampleInputPassword1"   required>
              </div>
              
              <div class="form-group">
                  <label for="exampleInputPassword1">Department</label><br>
                  <select name="dept" class="form-control">
                      <option value="CSE">CSE</option>
                      <option value="EEE">EEE</option>
                      <option value="ECE">ECE</option>
                  </select>
              </div>
   <!-- <input type="hidden" name="submit" value="<?php echo $id;?>"> -->
            <input type="submit" name="submit" class="form-control btn-info">
    
</form>


     </div>
</div>
  
       
      

        
       

  <!-- Footer -->
  <div style="margin-top:200px">
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
