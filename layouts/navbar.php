<div class="row">
    <div class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?=$helloString?></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">Главная</a></li>
                    <li><a href="/about.php">О сайте</a></li>
                    <li><a href="/contact.php">Контакты</a></li>
                    <li>
                        <?php
                        if(isset($_COOKIE['logined'])){
                            echo "<a id=\"login\" href=\"/logout.php\">Выход</a>";
                        } else echo "<a id=\"login\" href=\"/login.php\">Вход</a>"
                        ?>

                    </li>
                    <?php
                    if(isset($_COOKIE['logined'])){
                        echo "<li><a id=\"login\" href=\"/control.php\">Control</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

</div>
