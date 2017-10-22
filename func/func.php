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
            $res .= "<a href='$url' target='blank'><img src='$url' width='128px'></a>";
        }
    }
    else{
        $res.="Нет файлов в галлерее";
    }
    return $res;
}