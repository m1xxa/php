<?php

include_once "layouts/cookie.php";
setcookie('logined', 1, time()-3600);
include_once "layouts/head.php";
include_once "layouts/navbar.php";
include_once "layouts/sidemenu.php";

?>
    <h1>Вы вышли из системы. До скорых встреч нах. </h1>
<?
include_once "layouts/footer.php";
?>

