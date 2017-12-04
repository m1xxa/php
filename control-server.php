<?php
include_once "layouts/cookie.php";
include_once "layouts/head.php";
include_once "layouts/navbar.php";
include_once "layouts/sidemenu.php";
?>
         <h1>Server info</h1>
<pre>
<? print_r($_SERVER);?>
</pre>
<?
include_once "layouts/footer.php";
?>