<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 28.10.2017
 * Time: 18:38
 */

?>
<h1>Это страница админки каталога товара</h1>
<div id="content">
    <div class="product"><a href="?page=product&act=add">Добавить новый товар</a></div><br>
    <?
    foreach($product as $key=>$value){;?>
        <div class="product">
            <div><img src="../<?=$value->s_img;?>">
                <p><?=$value->s_desk;?></p>
                <div class="link">
                    <a href="?page=product&act=edit&id=<?=$key;?>">Редактировать</a></div>
                <div class="link">
                    <a href="?page=edit&act=delete&id=<?=$key;?>">Удалить</a>
                </div>
            </div>
        </div>
    <? };?>

</div>