<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 22.10.2017
 * Time: 10:41
 */
require_once "/func/func.php";
session_start();
if (!empty($_POST[load])) {
    $_SESSION[x]=1;
    $path = "files_gallery/";
    $f = $_FILES[images][tmp_name];
    if (!empty($f[0])) {
        $msg="";
        foreach ($f as $key =>$tmp_name) {
            $file = $path . $_FILES[images][name][$key];
            $file_th = $path . "thumb/" . $_FILES[images][name][$key];
            if (copy($tmp_name, $file)) {
                img_resize($file,$file_th);
                $msg .= $file." Файл загружен<br>";
            }

        }
    }
    else{$msg = "Файлы не указаны";}
    header("Location: ".$_SERVER["REQUEST_URI"]);
    $_SESSION[msg]=$msg;
    exit;
}
else{
    if($_SESSION[x]==1) {
        $_SESSION[x]=0;
    }
    else{
        $_SESSION[msg] = "";
    }
}

?>
<html>
<head>
    <title>Пятое ДЗ</title>
</head>
<body>
<div id="gallery">
    <?=getGallery();?>
</div>
<div id="form">
    <?=$_SESSION[msg];?>
    <form enctype="multipart/form-data" method="post">
        <p>Загрузите новые фотографии!</p>
        <input type="file" name="images[]" accept="image/*" multiple>
        <input type="submit" name="load" value="Отправить">
    </form>

</div>


</body>
</html>
