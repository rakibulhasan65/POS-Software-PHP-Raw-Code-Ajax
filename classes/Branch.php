<?php 
	class Branch
	{
		private $cont = "";
    	function __construct(){
        $this->cont = new mysqli("localhost","root","","db_inventory_pos");
    	}
		function insertRegister($rData){
		$br_id = $rData['br_id'];
		$branch_name = $rData['branch_name'];
		$manager = $rData['manager'];
		$phone = $rData['phone'];
		$email = $rData['email'];
		$pass = $rData['pass'];
        $sql = $this->cont->query("INSERT INTO tbl_branch(br_id,branch_name,manager,phone,email,pass)VALUES('$br_id','$branch_name','$manager','$phone','$email','$pass')");
		return $sql;
		}
		function loginSystem($manager,$br_id,$pass){
			$sql = $this->cont->query("SELECT * FROM tbl_branch WHERE manager='$manager' AND br_id = '$br_id' AND pass = '$pass'");
			if($sql->num_rows > 0){
				$data = $sql->fetch_assoc();
				session_start();
				$_SESSION['br_id'] = $data["br_id"];
				$_SESSION['manager'] = $data["manager"];
            	header('location:deshboard.php');
       	 	}else{
            	return "<div class='alert alert-danger'>Invalid Branch Id or Manager or password</div>";
       		 }
			
		
		}
}