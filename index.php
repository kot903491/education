<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 09.10.2017
 * Time: 23:24
 */
$title = "Первое ДЗ";
$h1="Первое задание";
$year = date(Y);
echo "
<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    
    <title>". $title . "</title>
</head>
<body>
    <header>
        <h1>$h1</h1>
    </header>
    <div id='content'>
    \$a = 5;<br>
    \$b = '05';<br>
    var_dump(\$a == \$b);         // Почему true? <b>Потому, что \$b присвоился тип integer</b><br> 
    var_dump((int)'012345');     // Почему 12345? <b>Потому, что тип integer - числовой, а число не может начинаться с 0</b><br>
    var_dump((float)123.0 === (int)123.0); // Почему false? <b>Разные типы данных</b><br>
    var_dump((int)0 === (int)'hello, world'); // Почему true? <b>В числовом типе нельзя записать слова, любой символ будет равен 0</b> <br>      
<br><br><br>
<h2>Меняем значения местами</h2>";
$a = 5;
$b = 12;
echo "
\$a = $a;<br>
\$b = $b;<br>
Вычисляем <br>";

$a +=$b;
$b = $a-$b;
$a-=$b;
echo "
\$a +=\$b;<br>
\$b = \$a-\$b;<br>
\$a-=\$b;<br>
\$a = $a;<br>
\$b = $b;
    </div>
<br><br><br><br><br><br>
<footer>
    &copy $year
</footer>

</body>
</html>";

