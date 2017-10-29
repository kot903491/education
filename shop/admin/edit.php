<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 28.10.2017
 * Time: 16:13
 */

if (isset($_GET['act'])) {
    require_once "../models/functions.php";
    if ($_GET['act']=='edit') {
        $id = $_GET['id'];
        $f = $_FILES['images']['tmp_name'];
        $obj = new dbproduct();
        if (!empty($f)) {
            $type = explode(".", $_FILES['images']['name']);
            $img_name = "comics$id.$type[1]";
            $s_img_name = "comics" . $id . "_small.$type[1]";
            $path = "images/" . $img_name;
            $ipath = "images/" . $s_img_name;
            if (move_uploaded_file($_FILES['images']['tmp_name'], "../" . $path)) {
                create_thumb("../" . $path, "../" . $ipath, 180, 230);
                $obj->b_img = $path;
                $obj->s_img = $ipath;
            };
        }
        $obj->name = htmlspecialchars(strip_tags($_POST['name']));
        $obj->publisher = htmlspecialchars(strip_tags($_POST['publisher']));
        $obj->autor = htmlspecialchars(strip_tags($_POST['autor']));
        $obj->pages = htmlspecialchars(strip_tags($_POST['pages']));
        $obj->s_desk = htmlspecialchars(strip_tags($_POST['s_desk']));
        $obj->desk = $_POST['desk'];
        $obj->price = htmlspecialchars(strip_tags($_POST['price']));
        $msg=$obj->saveChanges($link, $id);
    }
    elseif($_GET['act']=='add'){
        $id = $_GET['id'];
        $f = $_FILES['images']['tmp_name'];
        $obj = new dbproduct();
        if (!empty($f)) {
            $type = explode(".", $_FILES['images']['name']);
            $img_name = "comics$id.$type[1]";
            $s_img_name = "comics" . $id . "_small.$type[1]";
            $path = "images/" . $img_name;
            $ipath = "images/" . $s_img_name;
            if (move_uploaded_file($_FILES['images']['tmp_name'], "../" . $path)) {
                create_thumb("../" . $path, "../" . $ipath, 180, 230);
                $obj->b_img = $path;
                $obj->s_img = $ipath;
            }
            $obj->name = htmlspecialchars(strip_tags($_POST['name']));
            $obj->publisher = htmlspecialchars(strip_tags($_POST['publisher']));
            $obj->autor = htmlspecialchars(strip_tags($_POST['autor']));
            $obj->pages = htmlspecialchars(strip_tags($_POST['pages']));
            $obj->s_desk = htmlspecialchars(strip_tags($_POST['s_desk']));
            $obj->desk = $_POST['desk'];
            $obj->price = htmlspecialchars(strip_tags($_POST['price']));
            $msg=$obj->addChanges($link, $id);
        }
        else{
            $msg="Файлы не добавлены, попробуй сначала";
        }
    }
    elseif($_GET['act']=='delete'){
        $id=$_GET['id'];
        $sql="DELETE FROM comics.product WHERE id=$id";
        $sql_res=mysqli_query($link,$sql);
        if($sql_res){
            $msg="Удаление успешно";
        }else{
            $msg="Фиаско с удалением";
        }
    }
    else{
        $msg="Запрошена неизвестная операция";
    }
    }
?>
<h1><?=$msg;?></h1>
