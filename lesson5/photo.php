<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 24.10.2017
 * Time: 19:36
 */
include_once "models/config.php";
if (isset($_GET[id])){
    $result = mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM ".gallery." WHERE id=$_GET[id]"));
    $rating=$result[rating]+1;
    mysqli_query($link,upd1.$rating.upd2.$result[id]);
}

?>

<html>
<head>
    <title><?=$result[name];?></title>
    <link rel='stylesheet' href='css/gallery.css' type='text/css' />
</head>
<body>

<div id="content">
<div id="l_img">
<img src="<?=$result[url];?>">
</div>
</div>



</body>
</html>
