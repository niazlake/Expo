<?php
    require "db.php";
?>
<?php if(isset($_SESSION['logged_user']) ) : ?>
  <!DOCTYPE html>
  <html lang="en">
      <head>
          <meta charset="UTF-8">
          <title>InnopolisLibrari</title>
          <link rel="stylesheet" href="html/mainpage/css/bootstrap.css">
          <link rel="stylesheet" href="html/mainpage/css/style.css">
      </head>

      <body>
          <div class="main-page">
              <div class="logo1">
                  <img class="imglogo1" src="img/logo1.jpg">
              </div>

              <div class="avatar">
                  <img class="imgavatar" src="img/no-avatar.jpg" height="100%" width="100%">
              </div>

              <div class="username">
                  <h1>Username</h1>
              </div>

              <div class="list">
                  <h1>My list</h1>
                  <a href="#" title="Does not work yet"><h2>Booking</h2></a>
              </div>
              <div class="username">
                  <a href="logout.php">Logout</a>
              </div>

          </div>
      </body>
  </html>

<?php else :?>
  <!DOCTYPE html>
  <html lang="en">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> InnopolisLibrary</title>
          <link rel="stylesheet" href="css/bootstrap.css">
          <link rel="stylesheet" href="css/style.css">
      </head>
      <body>
          <div class="login-page">
              <div class="form">
                  <h1>Innopolis Library</h1>
                  <div>
                      <a href="login.php"><button>Log in</button></a>
                  </div>

                  <div>
                      <a href="signup.php"><button>Sing in</button></a>
                  </div>
              </div>
          </div>
      </body>
  </html>
<?php endif; ?>
