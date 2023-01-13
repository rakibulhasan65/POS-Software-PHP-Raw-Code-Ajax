<?php
class AddPurchase {
    private $cont = "";
    function __construct(){
         $this->cont = new mysqli("localhost","root","","db_inventory_pos");
    }
    function addPurchase($pdate,$barcode,$invoice,$company_name,$pQuantity,$unitPrice,$costPrice,$total_amoun,$br_id,$product_code){
        $sql = $this->cont->query("INSERT INTO tbl_purchase(pdate,barcode,invoice,company_name,pQuantity,unitPrice,costPrice,total_amoun,br_id,product_code)VALUES('$pdate','$barcode','$invoice','$company_name','$pQuantity','$unitPrice','$costPrice','$total_amoun','$br_id','$product_code')");
        return $sql;
    }
    function addStockProduct($barcode,$pQuantity,$br_id){
        $sql = $this->cont->query("INSERT INTO tbl_stock(barcode,pQuantity,br_id)VALUES('$barcode','$pQuantity','$br_id')");
        return $sql;
    }
    function stockShow($barcode){
        $sql = $this->cont->query("SELECT * FROM tbl_stock WHERE barcode = '$barcode'");
        $sql =$sql->fetch_assoc();
        return $sql;
    }
        function showProductCode($barcode){
        $sql = $this->cont->query("SELECT * FROM tbl_purchase WHERE barcode = '$barcode'");
        $sql =$sql->fetch_assoc();
        return $sql;
    }


    function costPriceFind($invoice){
        $sql = $this->cont->query("SELECT * FROM tbl_purchase WHERE invoice = '$invoice'");
        $sql =$sql->fetch_assoc();
        return $sql;
    }
  function PurchaseShowItem(){
    $sql = $this->cont->query("SELECT * FROM tbl_purchase");
    return $sql;
  }
  function pDeleteItem($id){
    $sql = $this->cont->query("DELETE FROM tbl_purchase WHERE id='$id'");
    return $sql;
  }
}