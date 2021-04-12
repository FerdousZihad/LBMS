<?php
$pdo=new PDO('mysql:host=localhost;dbname=library','root','');
    $connect = mysqli_connect('localhost', 'root', '', 'library');
    
    session_start();
    $search_by = $_SESSION['search_by'];
    

    $select_all_rows = mysqli_query($connect, "SELECT * FROM book where book_name like  '%$search_by%'"); //full_exam_marks table er sob row select korche

    $all_fetch = mysqli_fetch_all($select_all_rows, MYSQLI_ASSOC); // sob row rakhce
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searched Book List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body {
            background-image:url( img/book.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>

<body>

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

    <div class="container">
        <div class = "col-md-8 mt-3">
        <h2 align = 'center'>Searched Book List</h2>
        
        <table class="table table-hover">
            <thead>
              <tr style = "background-color: pink ">
                <th scope="col">Book ID</th>
                <th scope="col">Book Name</th>
                <th scope="col">Author</th>
                <th scope="col">Department</th>                
              </tr>
            </thead>
            <tbody>
                <?php
                    foreach($all_fetch as $single){ ?>
                        <tr>
                            <td> <?php echo $single['book_id'] ?> </td>
                            <td> <?php echo $single['book_name'] ?> </td>
                            <td> <?php echo $single['author'] ?> </td>
                            <td> <?php echo $single['department'] ?> </td>
                        </tr>
                <?php 
                   }
                ?>

            </tbody>
          </table>
          <a href="book.php" style="text-decoration:none;">
            <button type="button" class="btn btn-primary  d-block mx-auto">Book list</button>
          </a>
        </div>
        
        
    </div>

    <div style="margin-top:440px">
        <footer class="py-2 bg-dark  ">
            <div class="container ">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
            </div>
            <!-- /.container -->
        </footer>
  </div>



    <script src="js/bootstrap.min.js"></script>
</body>

</html>

