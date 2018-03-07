<?php
require "db.php";

$data = $_POST;
if(isset($data['do_login'])){
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if($user){
        if(password_verify($data['password'], $user->password)){

            $_SESSION['logged_user'] = $user;
             echo '<div style = "color:#64ff2e;">Вы успешно Вошли в систему <a href="index.php">Войти в главную страницу</a> </div><hr>';
             Header("Location: index.php");

        }
        else{
            $errors[] = 'Не правильный пароль!';
        }
    }
    else{
        $errors[] = 'Нету такого пользователя!';
    }
    if (!empty($errors)){
        echo '<div style = "color:#ff0000;">' .array_shift($errors).'</div><hr>';
    }

}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> InnopolisLibrary</title>
    <link rel="stylesheet" href="html/login/css/bootstrap.css">
    <link rel="stylesheet" href="html/login/css/style.css">
</head>

<body>
    <div class="login-page">
        <div class="form">
            <h1>Log in</h1>
            <form class="login-form" action="login.php" method="POST" >
              <input type="text"  required placeholder="username" name="login" value="<?php echo @$data['login'];?>">
              <input type="password" required placeholder="password" name="password" value="<?php echo @$data['password'];?>">
              <button type="submit" name="do_login">Enter</button>
            </form>
        </div>
    </div>
</body>

</html>
