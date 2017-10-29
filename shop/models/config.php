<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 28.10.2017
 * Time: 16:37
 */
include_once "dbresult.php";
$link = mysqli_connect('localhost','root','12345','comics','3306');
$res_all=mysqli_query($link,"SELECT * from comics.product");
$product = Array();
while($prod = mysqli_fetch_assoc($res_all)){
    $res = new dbproduct();
    $res->name=$prod['name'];
    $res->publisher=$prod['publisher'];
    $res->autor=$prod['autor'];
    $res->pages=$prod['pages'];
    $res->s_desk=$prod['s_desk'];
    $res->desk=$prod['desk'];
    $res->b_img=$prod['b_img'];
    $res->s_img=$prod['s_img'];
    $res->price=$prod['price'];
    $product[$prod['id']]=$res;
}
$s='dfdfdf1';