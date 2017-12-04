<?php
if(isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['email'])){
    if($_POST['login'] == 'login' && $_POST['pass'] == 'pass' && $_POST['email'] == 'email@mail.com'){
        setcookie('logined', 1, time()+3600);
    }
}

include_once "layouts/cookie.php";
include_once "layouts/head.php";
include_once "layouts/navbar.php";
include_once "layouts/sidemenu.php";

?>
    <h1>Войти</h1>
    <form method="POST" action='login.php'>
        <p>Login</p>
        <input name="login" type="text">
        <p>Password</p>
        <input name="pass" type="password">
        <p>Email</p>
        <input name="email" type="text">
        <p></p>
        <input name="submit" type="submit">
    </form>
<?
include_once "layouts/footer.php";
?>

