<?php
    require "db.php";

    $data = $_POST;
    // Если нажата кнопка
    if(isset($data['do_signup'])){
        //Идет регистрация

        $errors = array();
        if (trim($data['login'])=='')
        {
            $errors[] = 'Введите логин!';
        }
        if (trim($data['email'])=='')
        {
            $errors[] = 'Введите Email!';
        }
        if ($data['password']=='')
        {
            $errors[] = 'Введите пароль!';
        }
        if ($data['password_2']!= $data['password'])
        {
            $errors[] = 'Повторный пароль не правильный!';
        }
        if(R::count('users','login = ?', array($data['login']))>0){
            $errors[] = 'Пользователь с таким логином уже есть ';
        }
        if(R::count('users','email = ?', array($data['email']))>0){
            $errors[] = 'Пользователь с таким email уже есть ';
        }
        if (empty($errors)){
            // Evrything is okay
            $user = R::dispense('users');
            $user->login = $data['login'];
            $user->email = $data['email'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($user);
            echo '<div style = "color:#64ff2e;">Вы успешно зарегались</div><hr>';
            Header("Location: index.php");
        }
        else{
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
    <link rel="stylesheet" href="html/signup/css/bootstrap.css">
    <link rel="stylesheet" href="html/signup/css/style.css">
</head>

<body>
    <div class="registration-page">
        <div class="registration-form">
            <h1>Sign up</h1>
            <form class="register-form" action="signup.php" method="POST">
                <input type="text" required placeholder="username" name="login" value="<?php echo @$data['login']; ?>"/>
                <input type="email" required placeholder="mail" name="email" value="<?php echo @$data['email']; ?>" />
                <input type="password" required placeholder="password"  name="password"/>
                <input type="password" required placeholder="password repeat" name="password_2"/>
                <button type="submit" name ="do_signup">Next</button>

            </form>
        </div>
    </div>
</body>

</html>
