<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 24.10.2017
 * Time: 19:32
 */
include_once "models/config.php";
session_start();
if (!empty($_POST['load'])) {
    $_SESSION['x']=1;
    $path = "images/";
    $f = $_FILES['images']['tmp_name'];
    if (!empty($f[0])) {
        $msg="";
        foreach ($f as $key =>$tmp_name) {
            $fname=url2_ranslit($_FILES['images']['name'][$key]);
            $file = $path . $fname;
            $file_th = $path . "thumb/" . $fname;
            $size=$_FILES['images']['size'][$key];
            if ($size > 1000000) {
                $msg .= "<p>" . $fname . " Размер файла больше 1Мб. Файл не закружен</p>";
            } else {
                if (copy($tmp_name, $file)) {
                    img_resize($file, $file_th);
                    $res=mysqli_query($link,ins."'$fname','$file','$file_th','$size',0)");
                    $msg .= "<p>" . $fname . " Файл загружен</p>";

                }
            }
        }
    }
    else{$msg = "Файлы не указаны";}
    header("Location: ".$_SERVER["REQUEST_URI"]);
    $_SESSION['msg']=$msg;
    exit;
}
else{
    if($_SESSION['x']==1) {
        $_SESSION['x']=0;
    }
    else{
        $_SESSION['msg'] = "";
    }
}
?>
<html>
<head>
    <title>Пятое ДЗ</title>
    <link rel='stylesheet' href='css/gallery.css' type='text/css' />
</head>
<body>
<div id="gallery">

    <? while($img=mysqli_fetch_assoc($sql_img)){;?>
        <div class="img">
            <div>
            <a href="/lesson5/photo.php?id=<?=$img['id'];?>&rat=1">
                <img src="<?=$img['th_url'];?>">
            </a>
            <p>Изображение просмотрели <?=$img['rating'];?> раз</p>
            </div>
        </div>


    <? };?>
    <div style="clear:both;"></div>
</div>

<div id="form">
    <?=$_SESSION['msg'];?>
    <form enctype="multipart/form-data" method="post">
        <p>Загрузите новые фотографии!</p>
        <input type="file" name="images[]" accept="image/*" multiple>
        <input type="submit" name="load" value="Отправить">
    </form>

</div>


</body>
</html>