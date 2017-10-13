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
?>




<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta http-equiv='content-type' content='text/html;charset=utf-8' />
	<meta name='author' content='Luka Cvrk (www.solucija.com)' />
	<link rel='stylesheet' href='css/main.css' type='text/css' />
	<title><?php echo $title;?></title>
</head>
<body>
	<div id='content'>
		<h1><?php echo $h1;?></h1>

		<ul id='menu'>
			<li><a href='#'>home</a></li>
			<li><a href='#'>archive</a></li>
			<li><a href='#'>contact</a></li>
		</ul>

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
$a = <?php echo $a;?>;<br>
$b = <?php echo $b;?>;<br>
Вычисляем <br>";
<?php
$a +=$b;
$b = $a-$b;
$a-=$b;
?>
$a +=$b;<br>
$b = $a-$b;<br>
$a-=$b;<br>
$a = <?php echo $a;?><br>
$b = <?php echo $b;?>
			<p>&not; <a href='#'>read more</a></p>
		</div>
		<div class='col'>
			<h3><a href='#'>Maecenas iaculis leo</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href='#'>read more</a></p>
		</div>
		<div class='col last'>
			<h3><a href='#'>Quisque consectetur odio</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href='#'>read more</a></p>
		</div>

		<div id='footer'>
			<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href='http://www.solucija.com/' title='Free CSS Templates'>Solucija</a> $year</p>
		</div>
	</div>
</body>
</html>