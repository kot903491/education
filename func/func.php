<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 22.10.2017
 * Time: 20:31
 */

function getGallery()
{
    $dir = "files_gallery/";
    $res="";
    if (glob($dir."/*")) {
        $fgal = array_diff(scandir($dir), array('..', '.','thumb'));
        foreach ($fgal as $value){
            $url = $dir.$value;
            $url_th = $dir."thumb/".$value;
            $res .= "<a href='$url' target='blank'><img src='$url_th'></a>";
        }
    }
    else{
        $res.="Нет файлов в галлерее";
    }
    return $res;
}

/*нашел в интернете */
function img_resize($src, $dest, $rgb = 0xFFFFFF, $quality = 100) {
    if (!file_exists($src)) {
        return false;
    }

    $size = getimagesize($src);

    if ($size === false) {
        return false;
    }

    $format = strtolower(substr($size['mime'], strpos($size['mime'], '/') + 1));
    $icfunc = 'imagecreatefrom'.$format;

    if (!function_exists($icfunc)) {
        return false;
    }

    $new_width =200;
    $new_height = $size[1]/($size[0]/200);

    $isrc  = $icfunc($src);
    $idest = imagecreatetruecolor($new_width, $new_height);

    imagefill($idest, 0, 0, $rgb);
    imagecopyresampled($idest, $isrc, 0, 0, 0, 0, $new_width, $new_height, $size[0], $size[1]);

    $i = strrpos($dest,".");
    if (!$i) { return ""; }
    $l = strlen($dest) - $i;
    $ext = strtolower(substr($dest,$i+1,$l));

    switch ($ext) {
        case "jpeg":
        case "jpg":
            imagejpeg($idest,$dest,$quality);
            break;
        case "gif":
            imagegif($idest,$dest,$quality);
            break;
        case "png":
            imagepng($idest,$dest,$quality);
            break;
    }

    imagedestroy($isrc);
    imagedestroy($idest);

    return true;
}