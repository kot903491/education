<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 28.10.2017
 * Time: 16:05
 */
ob_start("ob_gzhandler");
date_default_timezone_set("Asia/Aqtobe");

?>
<html>
<head>
    <title>Мой магазин</title>
    <link rel='stylesheet' href='css/style.css' type='text/css' />
</head>
<body>
<header><h1>Тут будет заголовок сайта</h1>
    <div class="menu"><a href="index.php">Главная</a></div>
    <div class="menu"><a href="index.php?page=catalog">Каталог</a></div>
    <div class="menu"><a href="admin/admin.php">админка</a></div>
    <hr>
</header>

    <?php
    if (!isset($_GET['page'])){
        include_once '/tpl/main.php';
    }
    else{
        require_once "/models/config.php";
        switch ($_GET['page']){
            case 'catalog':
                include_once '/tpl/catalog.php';
                break;
            case 'product':
                include_once '/tpl/product.php';
                break;
        }
    };
    ?>


<footer>
    <hr>
    тут будет подвал сайта
</footer>

</body>
</html>
