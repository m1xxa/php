<?php
setcookie("visitor", 1, time()+(3600*24));
session_start();
$helloString = "Добро пожаловать";
$_SESSION['pages'][] = $_SERVER['PHP_SELF'];
if(isset($_COOKIE['visitor'])) {
    $count = $_COOKIE['visitor'];
    if(!isset($_COOKIE['PHPSESSID'])) {
        $count++;
        $time = new DateTime("-1 hour");
        setcookie("lastvisit", $time ->format('H:i:s'), time()+(3600*24));
    }
    setcookie("visitor", $count, time()+3600);
    if($count > 1 && isset( $_COOKIE['lastvisit'])){
        $helloString = "Привет еще раз, Вы у нас " . $count . " раз за последний день. 
                            В последний раз вы пришли: " . $_COOKIE['lastvisit'];
    }

}
else $count = 0;
?>