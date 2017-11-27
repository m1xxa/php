<?php
setcookie("visitor", 1, time()+3600);
$helloString = "Добро пожаловать";
if(isset($_COOKIE['visitor'])) {
    $count = $_COOKIE['visitor'];
    if(!isset($_COOKIE['PHPSESSID'])) {
        $count++;
        session_start();
    }
    if($count > 1)$helloString = "Привет еще раз, Вы у нас " . $count . " раз за последний час.";
    setcookie("visitor", $count, time()+3600);
}
else $count = 0;

?>
