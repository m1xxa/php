<?php
include_once "layouts/cookie.php";
if(isset($_POST['clear-cookie'])){
    if(isset($_COOKIE['PHPSESSID'])){
        setcookie("PHPSESSID", '');
    }
    if(isset($_COOKIE['lastvisit'])){
        setcookie("lastvisit", '');
    }
    if(isset($_COOKIE['logined'])){
        setcookie("logined", '');
    }
    if(isset($_COOKIE['visitor'])){
        setcookie("visitor", '');
    }
}
if(isset($_POST['clear-session'])){
    $_SESSION = array();
    session_destroy();
}
include_once "layouts/head.php";
include_once "layouts/navbar.php";
include_once "layouts/sidemenu.php";
?>
    <h1>Супер админская страница</h1>
    <a href="control-info.php">php-info</a>
    <a href="control-server.php">server-info</a>

    <form method="POST" action='control.php'>
        <input name="clear-cookie" type="submit" value="Clear COOKIE">
        <input name="clear-session" type="submit" value="Clear SESSION">
    </form>

    <pre>
    <?php print_r($_COOKIE)?>
    </pre>
    <pre>
    <?php print_r($_SESSION)?>
    </pre>


<?
include_once "layouts/footer.php";
?>