<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 24.10.2017
 * Time: 19:36
 */
define("gallery","shop.gallery");
define("ins","INSERT INTO ".gallery."(name,url,th_url,size,rating) VALUES(");
define("upd1","UPDATE ".gallery." SET rating = ");
define("upd2"," WHERE id = ");
$link = mysqli_connect('localhost','root','','shop');
$sql_img=mysqli_query($link,"SELECT * from " . gallery . " ORDER by rating DESC");

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

function rus2translit($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}

function url2_ranslit($string)
{
    $res = str_replace(" ", "_", rus2translit($string));
    return $res;
}