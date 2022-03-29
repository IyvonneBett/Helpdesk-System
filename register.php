<?php
  require_once "models/loginData.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset='utf-8'>
    <title>Registration</title>
    <link rel="icon" href="img/help.png" type="image/png" sizes="16x16">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
              <h1 style ="font-family: 'Nunito', sans-serif;">KJA Registration</h1>
            </div>
          </div>
        </div>
      </nav>
    
      <div class="card card0 border-0">
        <div class="row d-flex">
          <div class="col-lg-6">
            <div class="card1 pb-5">
              <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="img/server.svg" class="image"> </div>
            </div>
          </div>
          
          <div class="col-lg-6">
          
            <div class="card2 card border-0 px-4 py-5">
            <?= $signUpMsg ?>
            <h2 <?= $hide ?>style ="font-family: 'Nunito', sans-serif; text-align:center">SIGN UP</h2>
              <form action="" method="POST" <?= $hide ?>>
                <div class="row px-3">
                <label for="firstname"  style ="font-family: 'Nunito', sans-serif; font-size: 18px">First Name: </label>
                    <input type="text" name="firstname" id="firstname" />
                    <span></span>
                </div>

                <div class="row px-3">
                <label for="lastname"  style ="font-family: 'Nunito', sans-serif; font-size: 18px">Last Name: </label>
                    <input type="text" name="lastname" id="lastname" />
                    <span></span>
                </div>

                <div class="signUp__field">
                    <label for="email"  style ="font-family: 'Nunito', sans-serif; font-size: 18px">Email: </label>
                    <input type="text" name="email" id="email" />
                    <span></span>
                </div>

                <div class="signUp__field">
                    <label for="username"  style ="font-family: 'Nunito', sans-serif; font-size: 18px">Username: </label>
                    <input type="text" name="username" id="username" />
                    <span></span>
                </div>

                <div class="signUp__field">
                    <label for="password"  style ="font-family: 'Nunito', sans-serif; font-size: 18px">Password: </label>
                    <input type="password" name="password" id="password" />
                    <span></span>
                </div>

                <div class="signUp__field">
                    <label for="Contact"  style ="font-family: 'Nunito', sans-serif; font-size: 18px">Contact: </label>
                    <input type="text" name="Contact" id="Contact" />
                    <span></span>
                </div>
                <p style="color:#ffcccb; text-align:center;"><?= $error2; ?></p>
                <div class="row mb-3 px-3"> <button type="submit" name="submitSignUp" class="btn btn-blue text-center"  style ="font-family: 'Nunito', sans-serif">Sign Up</button> </div>
              </form>
            </div>
          </div>
        </div>
        <div class="bg-blue py-4">
          <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2"  style ="font-family: 'Nunito', sans-serif">Copyright &copy; 2022. The Kenya Judiciary Academy.</small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

