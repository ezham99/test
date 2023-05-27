

<!DOCTYPE html>
<html>
<div class="basic_cal">
<form method = "POST" >
<label for = "number1">number:</label><br>
 <input type = "type" id = "number1" name = "number1" required><br>

 <label for = "mc">math calculator</label><br>  

 <label for = "plus">
 <input type = "radio" id ="plus" name = "mc" required>+</label><br>  

 <label for = "minus">
 <input type = "radio" id ="minus" name = "mc" required>-</label><br>  

<label for = "divide">
 <input type = "radio" id ="divide" name = "mc" required>/</label><br>  

<label for = "times">
 <input type = "radio" id ="times" name = "mc" required>*</label><br> 

 <label for = "number2">number:</label><br>
 <input type = "type" id = "number2" name = "number2" required><br><br>

<input type ="submit" name="calculate" value = "Calculate">
</form>
</div>
<?php
$first = $_POST['number1'] + 0;//a small "hack" to make sure its an int but allow negs!!
$second= $_POST['number2'] + 0;
$operator = $_POST["mc"];
switch($operator)
{
    case "add";
    echo "Answer is: " .$first + $second;
    break; 
    case "subtract";
    echo "Answer is: " .$first - $second;
    break;
    case "times";
    echo "Answer is: " .$first * $second;
    break; 
    case "divide";
    echo "Answer is: " .$first / $second;
    break;
}
?>
 </html>

 

