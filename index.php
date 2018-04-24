<?php
    require "db.php";
?>
<?php if(isset($_SESSION['logged_user']) ) : ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>InnopolisLibrari</title>
        <!--<link rel="stylesheet" href="../../css/bootstrap.css">-->
        <link rel="stylesheet" href="login/html/mainpage/css/style.css">
    </head>
<<<<<<< HEAD

    <body>
    <div class="control-panel">
        <div>
            <img class="logo" src="img/logo.jpg" height="100%" width="100%">
        </div>
        <hr>
        <div class="avatar">
            <img src="img/no-avatar.jpg" height="100%" width="100%">
        </div>

        <div class="username">
            <h1><?php echo $_SESSION['logged_user']->login;?>!</h1>
        </div>
        <hr>
        <div class="list-option">
            <div><a href="#" title="Does not work yet"><h2><img src="img/logo2.jpg">My library </h2></a></div>
            <div><a href="#" title="Does not work yet"><h2><img src="img/logo3.jpg">Booking</h2></a></div>
            <div><a href="#" title="Does not work yet"><h2><img src="img/logo4.jpg">Return</h2></a></div>
        </div>
        <div class="log-out">
            <a href="logout.php"><h2>Log out</h2></a>
        </div>
    </div>
    <div class="main-page">
        <div class="top-panel">
            <button>News</button>
            <button>Books</button>
            <button>Articles</button>
            <button>A/V</button>
            <button>Help</button>
        </div>
        <div class="cont">
            <h1>OOPS</h1>
            <h1>We don't have news</h1>
        </div>
    </div>

    </body>
    </html>
=======
>>>>>>> 4c3af53720de5e85bf15d2852c3f2eb92a421b77

    <body>
    <div class="control-panel">
        <div>
            <img class="logo" src="img/logo.jpg" height="100%" width="100%">
        </div>
        <hr>
        <div class="avatar">
            <img src="img/no-avatar.jpg" height="100%" width="100%">
        </div>

        <div class="username">
            <h1><?php echo $_SESSION['logged_user']->login;?>!</h1>
        </div>
        <hr>
        <div class="list-option">
            <div><a href="#" title="Does not work yet"><h2><img src="img/logo2.jpg">My library </h2></a></div>
            <div><a href="#" title="Does not work yet"><h2><img src="img/logo3.jpg">Booking</h2></a></div>
            <div><a href="#" title="Does not work yet"><h2><img src="img/logo4.jpg">Return</h2></a></div>
        </div>
        <div class="log-out">
            <a href="logout.php"><h2>Log out</h2></a>
        </div>
    </div>
    <div class="main-page">
        <div class="top-panel">
            <button>News</button>
            <button>Books</button>
            <button>Articles</button>
            <button>A/V</button>
            <button>Help</button>
        </div>
        <div class="cont">
            <h1>OOPS</h1>
            <h1>We don't have news</h1>
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
