<!doctype html>
<html lang="en">
<style type="text/css">
    .login {
        height:200px; width:300px;
        margin:0 ;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:1px; margin:20px;
    }
</style>
<body>
<h2>Simple Caculator</h2>
<form method="post">
    <div class="login">
    <label>First operand : </label>
    <input type="number" name="num1" id="num1"><br>
    <label>Operator : </label>
    <select name="operator" >
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br>
    <label>Second operand : </label>
    <input type="number" name="num2" id="num2"><br>
        <button type="submit">Calculator</button>
    </div>
</form>
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operator = $_POST["operator"];
switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            echo "Nhap lai";
        } else {
            $result = $num1 / $num2;
        }
        break;
}
echo ("<h3>Result: </h3> " . $num1 . $operator . $num2 . " = " . $result);
?>
</body>
</html>