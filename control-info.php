<?php
include_once "layouts/cookie.php";
include_once "layouts/head.php";
include_once "layouts/navbar.php";
include_once "layouts/sidemenu.php";
?>
    <h1>PHP info</h1>
<div>
    <pre>
        <?php
            echo phpinfo();
        ?>
    </pre>
</div>
<?
include_once "layouts/footer.php";
?>