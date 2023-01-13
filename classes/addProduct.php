<?php
class Add_Product {
    private $cont = "";
    function __construct(){
         $this->cont = new mysqli("localhost","root","","db_inventory_pos");
    }
    function addProduct($barcode,$name,$pQty,$des,$size,$color,$product_code,$cost_price,$sale_price,$pdate){
        $sql = $this->cont->query("INSERT INTO tbl_addProduct(barcode,name,pQty,des,size,color,product_code,cost_price,sale_price,pdate)VALUES('$barcode','$name','$pQty','$des','$size','$color','$product_code','$cost_price','$sale_price','$pdate')");
        return $sql;
    }
    // function addDataShow($id){
    //     $sql = $this->cont->query("SELECT * FROM tbl_addProduct");
    //     $sql =$sql->fetch_assoc();
    //     return $sql;
    //     echo var_dump($sql);
    // }
}