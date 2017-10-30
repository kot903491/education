<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 30.10.2017
 * Time: 12:48
 */
if(isset($_POST['submit'])){
    $count1 = $_POST['count1'];
    $count2 = $_POST['count2'];
    $oper = $_POST['oper'];
    $msg=$count1.$oper.$count2."=";
    switch ($oper) {
        case '+':
            $res=$count1 + $count2;
            $msg.=$res;
            break;
        case '-':
            $res=$count1 - $count2;
            $msg.=$res;
            break;
        case '*':
            $res=$count1 * $count2;
            $msg.=$res;
            break;
        case '/':
            if($count2==0){
                $msg="На ноль делить нельзя!";
            }else{
            $res=$count1 / $count2;
                $msg.=$res;}
            break;
    }
}


?>
<html></html>
<head>
    <title>Калькулятор</title>
<body>

<form method="POST">
    <label for="count1">Чило №1<br></label><input type="text" name="count1"><br>
    <input type="radio" name="oper" value="+">+<br>
    <input type="radio" name="oper" value="-">-<br>
    <input type="radio" name="oper" value="*">*<br>
    <input type="radio" name="oper" value="/">/<br>
    <label for="count2">Чило №2<br></label><input type="text" name="count2"><br>

<br>
    <input type="submit" name="submit" value="посчитать">
</form>
<?=$msg;?>
</body>
</html>
