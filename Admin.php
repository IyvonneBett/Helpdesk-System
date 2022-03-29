<?php
  require_once "models/loginData.php";
  session_start();
  
  //log in
  if($_SESSION['status']!="Logged In")
  {
      header("Location: ./index.php");
  }
  
  //variables
  $userId = $_SESSION['userId'];
  $firstname = $_SESSION['firstname'];
  
  require_once "models/adminData.php";
  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset='utf-8'>
    <title>Admin Dashboard</title>
    <link rel="icon" href="img/help.png" type="image/png" sizes="16x16">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="row px-3">
              <h1 style ="font-family: 'Nunito', sans-serif;">Administrator</h1>
              <a class="btn btn-white" href="logout.php">Logout</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="card card0 border-0">
        <div class="row d-flex">
          <div class="col-lg-12">
          <br>
            <h4 class="row px-5" style ="font-family: 'Nunito', sans-serif;">WELCOME ADMIN <?= $firstname; ?> !</h4>
          </div>
          <div class="col-lg-12">
            <h4 class="row px-5" style ="font-family: 'Nunito', sans-serif; font-weight: bold;">Ticket Activity - Admin</h4>
            <div class="card2 card border-0 px-4 py-5">
              <div class="m-1">
                <table class="table table-bordered tbl" >
                  <thead>
                    <tr>
                      <th scope="col" style ="font-family: 'Nunito', sans-serif; font-size: 18px">Ticket ID</th>
                      <th scope="col" style ="font-family: 'Nunito', sans-serif; font-size: 18px">Subject</th>
                      <th scope="col" style ="font-family: 'Nunito', sans-serif; font-size: 18px">Date</th>
                      <th scope="col" style ="font-family: 'Nunito', sans-serif; font-size: 18px">Status</th>
                      <th scope="col" style ="font-family: 'Nunito', sans-serif; font-size: 18px">Client ID</th>
                      <th scope="col" style ="font-family: 'Nunito', sans-serif; font-size: 18px">View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      echo $rows;
                      ?>                        
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-blue py-4">
          <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. The Kenya Judiciary Academy.</small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

