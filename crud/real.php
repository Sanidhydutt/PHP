<?php


      
    //   INSERT INTO `notes` (`sr`, `title`, `description`, `tstamp`) VALUES (NULL, 'ntg', 'why so serious bro ntg can we doo ', current_timestamp());   $servername="localhost";

$insert = false;
$update = false;
$delete = false;

$servername="localhost";
$username="root";
$password="";
$database="notes";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("<br> Sorry We Failed to connect".mysqli_connect_error());
}
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "INSERT INTO `notes` (`title` , `description`) VALUES ('$title','$description')";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
      //echo "<br>Record has been insert succsesfully";
      $insert = true;
    }
    else
    {

    }
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Include DataTables CSS and JS -->
 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

  <title>Project-1 PHP CRUD</title>
  </head>
  <body>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editmodal">
  edit demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="Editmodal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PHP CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
            
         
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
  <?php
  if($insert)
  {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> You Note has been inserted Successfully
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
  }
  ?>
      <div class="container my-4">

        <h2>Add Note</h2>

        <form action="/crud/index.php" method="post">
            <div class="mb-3">
              <label for="title" name="title" class="form-label">Note Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="description" name="description"class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
          </form>
      </div>

      <div class="container my-4">
<table class="display" id="example" style="width:100%">
  <thead>
    <tr>
      <th>S.no</th>
      <th>title</th>
      <th>description</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql = "SELECT * FROM `notes` ";
      $result= mysqli_query($conn , $sql);
      $sno = 0;
    
        while($row = mysqli_fetch_assoc($result))
        {
        $sno = $sno + 1;
        echo "<tr>
        <th>".$sno."</th>
            <td>".$row['title']."</td>
            <td>".$row['description']."</td>
            <td><a href='#del'>Delete</a> <a href='#up'>Update</a> </td>
             </tr>"; 
        }
      ?>
      
  </tbody>
</table>

      </div>
      <hr>
     <script>
  $(document).ready(function()
  {
    $('#example').DataTable();
  });
  </script>
  </body>
</html>