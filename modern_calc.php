<?
include_once "layouts/cookie.php";
include_once "layouts/head.php";
include_once "layouts/navbar.php";
include_once "layouts/sidemenu.php";
?>

<?php

$text = $_POST["quere"];
$part = explode(" ", $text);
$res = "";
if(count($part) == 3) {
    if(strpos($part[0], ".")) $int1 = doubleval($part[0]);
    else $int1 = intval($part[0]);
    if(strpos($part[2], ".")) $int2 = doubleval($part[2]);
    else $int2 = intval($part[2]);

    $operator = $part[1];
    switch ($operator){
        case "+":
            if(isset($_POST["b="])) $res = $int1 . " + " . $int2 . " = " . $r = $int1 + $int2;
            else $res = $r = $int1 + $int2 . " + ";
            break;
        case "-":
            if(isset($_POST["b="])) $res = $int1 . " - " . $int2 . " = " . $r = $int1 - $int2;
            else $res = $r = $int1 - $int2 . " - ";
            break;
        case "*":
            if(isset($_POST["b="])) $res = $int1 . " * " . $int2 . " = " . $r = $int1 * $int2;
            else $res = $r = $int1 * $int2 . " * ";
            break;
        case "/":
            if($int2 != 0){
                if(isset($_POST["b="])) $res = $int1 . " / " . $int2 . " = " . $r = $int1 / $int2;
                else $res = $r = $int1 / $int2 . " / ";
            }

            else echo "Wrong data, second operand is 0";
            break;
    }
}
?>

<h1>Калькулятор</h1>
<form id = "calc-form" action="modern_calc.php" method="post">
    <div>
        <div class="row btn-row">
            <input type="text" name="quere" id = "text-field" value="<?=$res?>"/>
        </div>
        <div class="row btn-row">
            <div class="btn btn-warning col-lg-1" id = "c">C</div>
            <div class="btn btn-warning col-lg-1" id = "clr">clr</div>
        </div>

<div class="row btn-row">
            <div class="btn btn-warning col-lg-1" id = "x^2">x^2</div>
            <div class="btn btn-warning col-lg-1" id = "x^y">x^y</div>
            <div class="btn btn-warning col-lg-1" id = "10^x">10^x</div>
            <div class="btn btn-warning col-lg-1" id = "n!">n!</div>
        </div>
<div class="row btn-row">
            <div class="btn btn-warning col-lg-1" id = "sin">sin</div>
            <div class="btn btn-warning col-lg-1" id = "cos">cos</div>
            <div class="btn btn-warning col-lg-1" id = "tn">tn</div>
            <div class="btn btn-warning col-lg-1" id = "%">%</div>
        </div>
        <div class="row btn-row">
            <div class="btn btn-warning col-lg-1" id = "b7">7</div>
            <div class="btn btn-warning col-lg-1" id = "b8">8</div>
            <div class="btn btn-warning col-lg-1" id = "b9">9</div>
            <div class="btn btn-warning col-lg-1" id = "b+">+</div>
        </div>

        <div class="row btn-row">
            <div class="btn btn-warning col-lg-1" id = "b4">4</div>
            <div class="btn btn-warning col-lg-1" id = "b5">5</div>
            <div class="btn btn-warning col-lg-1" id = "b6">6</div>
            <div class="btn btn-warning col-lg-1" id = "b-">-</div>

        </div>
        <div class="row btn-row">
            <div class="btn btn-warning col-lg-1" id = "b1">1</div>
            <div class="btn btn-warning col-lg-1" id = "b2">2</div>
            <div class="btn btn-warning col-lg-1" id = "b3">3</div>
            <div class="btn btn-warning col-lg-1" id = "b*">*</div>
        </div>
        <div class="row btn-row">
            <div class="btn btn-warning col-lg-1" id = "b0">0</div>
            <div class="btn btn-warning col-lg-1" id = "b-dot">.</div>
            <input class="btn btn-warning col-lg-1" type = "submit" value="=" name = "b=">
            <div class="btn btn-warning col-lg-1" id = "b/">/</div>
        </div>
    </div>
</form>

<?
include_once "layouts/footer.php";
?>