<?php
    include("application/database/db.php");
    $errormsg = '';

    function userAuth($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['login'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];

        if ($_SESSION['admin']) {
            header('location'.BASE_URL.'admin/admin.php');
        }else{
            header('location: '.BASE_URL);
        }
    }

function authCheck($email, $pass){
    global $errormsg;
    if ($pass === ''|| $email === '') {
        $errormsg = "Не все поля заполнены!";
    }else{
        $check = one_select("users", ["email"=>$email]);
        if ($check && password_verify($pass, $check['password'])) {
            userAuth($check);
        }else{
            $errormsg = "Адрес электронной почты или пароль введены неверно!";
        }
    }
}

function regCheck($login, $email, $passF, $passS, $admin, $age, $pass){
    global $errormsg;
    $error = array();
    if($login === '' || $email == '' || $passF === ''){
    array_push($error, "Не все поля заполнены!");
    }
    if(mb_strlen($login, $enconding='UTF8')<2){
    array_push($error, "Логин очень короткий");   
    }
    if($passF !== $passS){
        array_push($error,"Пароли не соответствуют друг другу. Попробуйте еще раз!");   
    }else{
    $check = one_select('users', ['email' => $email]);
    if (!empty($check['email']) && $check['email'] === $email) {
        array_push($error, "Пользователь с таким email уже существует!");
    }else{

        $post= [
        'admin' => $admin,
        'username' =>$login,
        'email'=> $email,
        'age' => $age,
        'password'=> $pass
        ];
        $id = insert('users', $post);
        $user = one_select('users', ['id'=>$id]);

        userAuth($user);     
    }
}}
    
// code for registration
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);
    $passF = trim($_POST['pass-first']);        
    $passS = trim($_POST['pass-second']);
    $pass =password_hash($_POST['pass-second'], PASSWORD_DEFAULT);
    
    regCheck($login, $email, $passF, $passS, $admin, $age, $pass);
}
// code for log in
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    authCheck($email, $pass);
}
?>