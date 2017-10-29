<?php
/**
 * Created by PhpStorm.
 * User: Тимурка
 * Date: 28.10.2017
 * Time: 17:00
 */

class dbproduct
{
    var $name;
    var $publisher;
    var $autor;
    var $pages;
    var $s_desk;
    var $desk;
    var $b_img;
    var $s_img;
    var $price;

    function saveChanges($link,$id){
        $sql="UPDATE comics.product SET name='$this->name',publisher='$this->publisher',autor='$this->autor',pages=$this->pages,s_desk='$this->s_desk',desk='$this->desk',";
        if ($this->b_img!=null && $this->s_img!=null){
        $sql.="b_img='$this->b_img',s_img='$this->s_img',";
        }
        $sql.="price=$this->price WHERE id='$id'";
        $sql_res = mysqli_query($link,$sql);
        if ($sql_res){
            return "Успешно";
        }
        else{
           return "Это фиаско";
        }
    }
    function addChanges($link,$id){
        $sql="INSERT INTO comics.product (name,publisher,autor,pages,s_desk,desk,b_img,s_img,price) VALUES ('$this->name','$this->publisher','$this->autor',$this->pages,'$this->s_desk','$this->desk','$this->b_img','$this->s_img',$this->price)";
        $sql_res = mysqli_query($link,$sql);
        if ($sql_res){
            return "Успешно";
        }
        else{
            return "Это фиаско";
        }
    }

    /*function create($link,$id,$b_id,$c_id,$pt_id,$desk,$price){
        $this->desk=$desk;
        $this->price=$price;
        $res=mysqli_fetch_row(mysqli_query($link,"SELECT name from shop.brand where id=$b_id"));
        $this->brand=$res[0];
        $res=mysqli_fetch_row(mysqli_query($link,"SELECT name from shop.category where id=$c_id"));
        $this->category=$res[0];
        $res=mysqli_fetch_row(mysqli_query($link,"SELECT name from shop.product_type where id=$pt_id"));
        $this->prod_type=$res[0];
        $res=mysqli_fetch_row(mysqli_query($link,"SELECT big_img,small_img from shop.gallery where id=$id and main='1'"));
        $this->b_img=$res[0];
        $this->s_img=$res[1];
    }*/
}