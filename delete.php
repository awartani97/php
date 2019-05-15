<?php
/**
 * Created by PhpStorm.
 * User: mohammad
 * Date: 02/08/18
 * Time: 01:51 م
 */
    require "product.php";
    require_once "db.php";
    $pro=new product(null,null,null,null,null);

    $sql="delete from productInfo where id =". $_GET['product_id'];
    $pro->deleteProduc($sql);
 ?>