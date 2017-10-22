<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 09.10.2017
 * Time: 23:24
 */
$title = "Выполнение ДЗ";
$h1="Первое задание";
$year = date(Y);
$podmenu = explode(",","Подменю 1, Подменю 2, Подменю 3");
for($i=1;$i<=3;$i++){
    $str = "Меню $i";
    $menu[$str] = $podmenu;
}
$menu_str = "<ul id = 'menu'>";
foreach ($menu as $key=>$value){
    $menu_str .="<li><a href='#'>$key</a><ul>";
    foreach($value as $key=>$value){
        $menu_str .="<li><a href='#'>$value</a></li>";
    }
    $menu_str .="</ul></li>";
}

?>




<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta http-equiv='content-type' content='text/html;charset=utf-8' />
	<meta name='author' content='Luka Cvrk (www.solucija.com)' />
	<link rel='stylesheet' href='css/main.css' type='text/css' />
	<title><?=$title;?></title>
</head>
<body>
	<div id='content'>
		<h1><?=$h1;?></h1>

		<?=$menu_str;?>

		<div class='post'>
			<div class='details'>
				<h2><a href='#'>Ответы выделенны жирным</a></h2>
				<p class='info'>posted 3 hours ago in <a href='#'>general</a></p>

			</div>
			<div class='body'>
    $a = 5;<br>
    $b = '05';<br>
    var_dump($a == $b);         // Почему true? <b>Потому, что \$b присвоился тип integer</b><br> 
    var_dump((int)'012345');     // Почему 12345? <b>Потому, что тип integer - числовой, а число не может начинаться с 0</b><br>
    var_dump((float)123.0 === (int)123.0); // Почему false? <b>Разные типы данных</b><br>
    var_dump((int)0 === (int)'hello, world'); // Почему true? <b>В числовом типе нельзя записать слова, любой символ будет равен 0</b> <br>
			</div>
			<div class='x'></div>
		</div>

		<div class='col'>
			<h3><a href='#'>Меняем значения переменных местами</a></h3>
<?php			
$a = 4;
$b = 15;
?>
$a = <?=$a;?>;<br>
$b = <?=$b;?>;<br>
Вычисляем <br>";
<?php
$a +=$b;
$b = $a-$b;
$a-=$b;
?>
$a +=$b;<br>
$b = $a-$b;<br>
$a-=$b;<br>
$a = <?=$a;?><br>
$b = <?=$b;?>
			<p>&not; <a href='#'>read more</a></p>
		</div>
		<div class='col'>
			<h3><a href='/lesson2.php'>Второе ДЗ</a></h3>
			<p>Доступно по ссылке</p>
			<p>&not; <a href='/lesson2.php'>read more</a></p>
		</div>
		<div class='col last'>
			<h3><a href='/lesson3.php'>Третье ДЗ</a></h3>
			<p>Доступно по ссылке.</p>
			<p>&not; <a href='/lesson3.php'>read more</a></p>
		</div>
        <div class='col'>
            <h3><a href='/lesson4.php'>Четвертое ДЗ</a></h3>
            <p>Доступно по ссылке</p>
            <p><a href='/lesson4.php'>read more</a></p>
        </div>

		<div id='footer'>
			<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href='http://www.solucija.com/' title='Free CSS Templates'>Solucija</a><?=$year;?></p>
		</div>
	</div>
</body>
</html>