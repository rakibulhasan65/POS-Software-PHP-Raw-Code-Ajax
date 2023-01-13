<?php
include "purchase.php";
$action = $_POST['action'];
$action();
function addPurchase(){
  $pdate = $_POST['pdate'];
  $barcode = $_POST['barcode'];
  $invoice  = $_POST['invoice'];
  $company_name = $_POST['company_name'];
  $pQuantity = $_POST['pQuantity'];
  $unitPrice = $_POST['unitPrice'];
  $costPrice = $_POST['costPrice'];
  $total_amoun = $_POST['total_amoun'];
  $br_id = $_POST['br_id'];
  $product_code = $_POST['product_code'];
  $sql = new AddPurchase;
  $sql->addPurchase($pdate,$barcode,$invoice,$company_name,$pQuantity,$unitPrice,$costPrice,$total_amoun,$br_id,$product_code);
  echo "200";

}

function addStockProduct(){
  $barcode = $_POST['barcode'];
  $pQuantity = $_POST['pQuantity'];
  $br_id = $_POST['br_id'];
  $sql = new AddPurchase;
  $info = $sql->addStockProduct($barcode,$pQuantity,$br_id);
  $info= json_encode($info);
  echo $info;
}
function stockShow(){
  $barcode = $_POST['barcode'];
  $sql = new AddPurchase;
  $info = $sql->stockShow($barcode);
  $info= json_encode($info);
  echo $info;
}
function showProductCode(){
  $barcode = $_POST['barcode'];
  $sql = new AddPurchase;
  $info = $sql->showProductCode($barcode);
  $info= json_encode($info);
  echo $info;
}


function costPriceFind(){
  $invoice = $_POST['invoice'];
  $sql = new AddPurchase;
  $info = $sql->costPriceFind($invoice);
  $info= json_encode($info);
  echo $info;
}

function pDeleteItem(){
  $id = $_POST['id'];
  $sql = new AddPurchase;
  $sql->pDeleteItem($id);
  echo "200";
}