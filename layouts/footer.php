</div>

</div>
<div>
    <?php
    if(isset($_SESSION['pages'])) {
        echo "Посещенные страницы:";
        echo '<ul>';
        foreach ($_SESSION['pages'] as $page) {
            echo "<li>", $page, "</li>";
        }
        echo '</ul>';
    }
    ?>
</div>

</div>

</div>
</body>
<script src="../js/main.js"></script>
</html>