<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 28.10.2017
 * Time: 16:10
 */
switch ($_GET['act']){
    case 'add':
        $h1="Это страница добавления товара";
        $url="?page=edit&act=add";
        break;
    case 'edit':
        $h1="Это страница редактирования товара";
        $prod=$product[$_GET['id']];
        $url="?page=edit&act=edit&id=".$_GET['id'];
        break;
}
?>

<h1><?=$h1;?></h1>

<form enctype="multipart/form-data" method="post" action="<?=$url;?>">
    <label for="name">Наименование</label>
    <input type='text' name='name' size=50 value='<?=$prod->name;?>'><br>
    <label for='publisher'>Издательство</label>
    <input type='text' name='publisher' size=50 value='<?=$prod->publisher;?>'><br>
    <label for='autor'>Автор</label>
    <input type='text' name='autor' size=50 value='<?=$prod->autor;?>'><br>
    <label for='pages'>Кол-во страниц</label>
    <input type='number' name='pages' size=50 value='<?=$prod->pages;?>'><br>
    <label for='price'>Цена</label><input type='number' name='price' size=50 value='<?=$prod->price;?>'><br>
    <label for='s_desk'>Краткое описание</label>
    <textarea name='s_desk' maxlenght=300  rows=5 cols=120><?=$prod->s_desk;?></textarea><br>
    <label for='desk'>Описание</label>
    <textarea name='desk' maxlenght=1000  rows=20 cols=120><?=$prod->desk;?></textarea><br>


    <p>Загрузите изображение</p>
    <input type="file" name="images" accept="image/*">
    <input type="submit" name="load" value="Отправить">

</form>
