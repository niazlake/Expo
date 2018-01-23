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
<form action="login.php" method="POST" >
    <p>

        <p><strong>Логин</strong></p>

        <input type="text" name="login" value="<?php echo @$data['login'];?>">

    </p>

    <p>

        <p><strong>Пароль</strong></p>

        <input type="password" name="password" value="<?php echo @$data['password'];?>">

    </p>

    <p>
        <button type="submit" name="do_login">Войти в систему</button>
    </p>
</form>
