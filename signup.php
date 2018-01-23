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
        }
        else{
            echo '<div style = "color:#ff0000;">' .array_shift($errors).'</div><hr>';
        }
    }
?>

<form action="signup.php" method="POST">

    <p>

        <p><strong>Ваш логин</strong></p>

        <input type="text" name="login" value="<?php echo @$data['login']; ?>">

    </p>

    <p>

        <strong>Ваш Email</strong></p>

        <input type="email" name="email" value="<?php echo @$data['email']; ?>">

    </p>

    <p>

        <strong>Ваш Пароль</strong></p>

        <input type="password" name="password">

    </p>

    <p>
        <strong>Введите пароль еще раз</strong></p>
        <input type="password" name="password_2">
    </p>

    <button type="submit" name ="do_signup">Зарегистрироваться</button>
</form>
