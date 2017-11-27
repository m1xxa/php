<?php
/**
 * Created by IntelliJ IDEA.
 * User: m1xxa
 * Date: 26.11.2017
 * Time: 15:35
 */
?>
<?php
 $text = $_POST["quere"];
 $part = explode(" ", $text);
 $res = "Wrong data, try again";
 if(count($part) == 3) {
     $int1 = intval($part[0]);
     $int2 = intval($part[1]);
     $operator = $part[2];
     switch ($operator){
         case "+":
             $res = $int1 . " + " . $int2 . " = " . $r = $int1 + $int2;
             break;
         case "-":
             $res = $int1 . " - " . $int2 . " = " . $r = $int1 - $int2;;
             break;
         case "*":
             $res = $int1 . " * " . $int2 . " = " . $r = $int1 * $int2;
             break;
         case "/":
             if($int2 != 0) $res = $int1 . " / " . $int2 . " = " . $r = $int1 / $int2;
             else echo "Wrong data, second operand is 0";
             break;
     }
 }
 echo "<br> Result is: " . $res;
?>

<form action="calc.php" method="post">
    <input type="text" name="quere" />
    <input type="submit"/>
</form>