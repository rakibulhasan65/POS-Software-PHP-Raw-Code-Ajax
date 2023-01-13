<?php 
	class Sales{
		private $cont = "";
		function __construct(){
		$this->cont = new mysqli("localhost","root","","db_inventory_pos");
		} 

		function salesBarcode($barcode){
			$sql =$this->cont->query("SELECT * FROM tbl_purchase WHERE barcode = '$barcode'");
			$sql = $sql->fetch_assoc();
			return $sql;
		}
		function salesStock($barcode){
			$sql =$this->cont->query("SELECT * FROM tbl_stock WHERE barcode = '$barcode'");
            $sql = $sql->fetch_assoc();
            return $sql;
		}

		function salesReportPrint($invoice,$barcode,$sPrice,$sTotalQuantity,$srTotalAmount,$desPursent,$sAmount,$grandTotal,$payment,$deu){
			$sql = $this->cont->query("INSERT INTO tbl_salesDetails(invoice,barcode,productPrice,TotalQty,totalAmount,desPersent,desAmount,gradeTotal,payment,deu) VALUES('$invoice','$barcode','$sPrice','$sTotalQuantity','$srTotalAmount','$desPursent','$sAmount','$grandTotal','$payment','$deu')");
			return $sql;
		}

		function salesSummary($invoice){
			$sql= $this->cont->query("SELECT * FROM tbl_salesDetails WHERE invoice = '$invoice'");
			return $sql;
		}




    }