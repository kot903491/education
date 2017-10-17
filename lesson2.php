<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 17.10.2017
 * Time: 18:42
 */


function getSum($a,$b){
    return $a+$b;
}

function getDiff($a,$b){
    return $a-$b;
}

function getMulti($a,$b){
    return $a*$b;
}

function getDiv($a,$b){
    if ($b==0){
        return "Ошибка деления";
    }
    else{
        return $a/$b;
    }
}

$a = rand(-100,100);
$b = rand(-100,100);
echo "<h2>Первая задача</h2>
      \$a = $a<br>
      \$b = $b<br>";
if ($a<0 && $b<0){
    echo "считаем произведение: " . getMulti($a,$b);
}
elseif ($a<0 || $b<0){
    echo "считаем сумму: " . getSum($a,$b);
}
else {
    echo "считаем разницу: " . getDiff($a,$b);
}
echo "<br><br><br><h2>Вторая задача</h2>";

$a=rand(0,15);
echo "\$a = $a<br>";
switch ($a){
    case 1: echo "1<br>";
    case 2: echo "2<br>";
    case 3: echo "3<br>";
    case 4: echo "4<br>";
    case 5: echo "5<br>";
    case 6: echo "6<br>";
    case 7: echo "7<br>";
    case 8: echo "8<br>";
    case 9: echo "9<br>";
    case 10: echo "10<br>";
    case 11: echo "11<br>";
    case 12: echo "12<br>";
    case 13: echo "13<br>";
    case 14: echo "14<br>";
    case 15: echo "15<br>";
}

echo "<br><br><br><h2>Третья и четвертая задачи</h2>";
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case "Sum": $res = getSum($arg1,$arg2);
            break;
        case "Diff": $res = getDiff($arg1,$arg2);
            break;
        case "Multi": $res = getMulti($arg1,$arg2);
            break;
        case "Div": $res = getDiv($arg1,$arg2);
            break;
    }
    return $res;
}
$op = rand(1,4);
$a = rand(0,20);
$b = rand(0,20);
switch ($op){
    case 1: $op = "Sum";
        break;
    case 2: $op = "Diff";
        break;
    case 3: $op = "Multi";
        break;
    case 4: $op = "Div";
        break;
}
echo "Операция - случайное число от 1 до 4, где 1 - сумма, 2 - разность, 3 - произведение, 4 - деление<br>
\$a и \$b - случайные числа от 0 до 20<br>
\$a = $a<br>
\$b = $b<br>
Операция = $op<br>
Результат =" . mathOperation($a,$b,$op) . "<br><br><br>";
echo "<h2>Возведение числа в степень</h2>
\$a = число = $a<br>
\$b = степень $b<br>";
function exponent($a,$b){
    if ($b!=1){
        return $a * exponent($a, $b-1);
    }
    else {
        return $a*1;
    }
}
echo "Результат: " . exponent($a,$b) . "<br><br><br><h2>Вывод склонений</h2>";
date_default_timezone_set('	Europe/Moscow');
$h = date(H);
$m = date(i);
switch ($h){
    case 1:;
    case 21:$h_s = " час ";
    break;
    case 2:;
    case 3:;
    case 4:;
    case 22:;
    case 23:$h_s=" часа ";
    break;
    default:$h_s = " часов ";
    break;
}
switch ($m){
    case "11":;
    case "12":;
    case "13":;
    case "14":$m_s=" минут";
    break;
    case "*1":$m_s=" минута";
    break;
    case "*2":;
    case "*3":;
    case "*4":$m_s=" минуты";
    break;
    default:$m_s=" минут";
    break;


}

echo $h . $h_s . $m . $m_s;