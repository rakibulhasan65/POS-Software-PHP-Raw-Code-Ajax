<?php
include "salesConnection.php";
$action = $_POST['action'];
$action();
function salesBarcode(){
    $barcode = $_POST['barcode'];
    $sql = new Sales;
    $info = $sql->salesBarcode($barcode);
    $info = json_encode($info);
    echo $info;
    
}
function salesStock(){
    $barcode = $_POST['barcode'];
    $sql = new Sales;
    $info = $sql->salesStock($barcode);
    $info = json_encode($info);
    echo $info;
    
}

function salesReportPrint(){
    $invoice = $_POST['invoice'];
    $barcode = $_POST['barcode'];
    $sPrice = $_POST['sPrice'];
    $sTotalQuantity = $_POST['sTotalQuantity'];
    $srTotalAmount = $_POST['srTotalAmount'];
    $desPursent = $_POST['desPursent'];
    $sAmount = $_POST['sAmount'];
    $grandTotal = $_POST['grandTotal'];
    $payment = $_POST['payment'];
    $deu  = $_POST['deu'];

    $salesData = new Sales;
    $salesData = $salesData->salesReportPrint($invoice,$barcode,$sPrice,$sTotalQuantity,$srTotalAmount,$desPursent,$sAmount,$grandTotal,$payment,$deu);
    echo "200";
}

function salesSummary(){
    $invoice = $_POST['invoice'];
    $data = new Sales;
    $data = $data->salesSummary($invoice);
    $tData = "";
    while($info = $data->fetch_assoc()){
        $tData .='<tr>
        <td>'.$info["invoice"].'</td>
        <td>'.$info["barcode"].'</td>
        <td>'.$info["productPrice"].'</td>
        <td>'.$info["TotalQty"].'</td>
        <td>'.$info["gradeTotal"].'</td>
        <td>'.$info["payment"].'</td>
        <td>'.$info["deu"].'</td>
        </tr>';
    }

    echo $tData;
}
