<?php
    include 'includes/header.php';

    include 'includes/loader.php';
  ?>



<!-- Navbar -->
<?php 
    include 'includes/navbar.php';
  ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php 
     include 'includes/sidebar.php';
    ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header ">
        <div class="container-fluid">
            <div class=" row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Purchase Product Summary</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="deshboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Purchase Summary</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                </div>
                <!-- My Content Area -->
                <div class="productManage table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <th>#SL</th>
                            <th>Date</th>
                            <th>Barcode</th>
                            <th>Invoice</th>
                            <th>Company Name</th>
                            <th>Product Qty</th>
                            <th>Unit Price</th>
                            <th>Cost Price</th>
                            <th>Total Amount</th>
                            <th>Brance Id</th>
                            <th>Product Code</th>
                            <th>action</th>
                        </thead>

                        <tbody class="PurchaseShowItem">
                            <?php
                            include "classes/purchase.php";
                            $data = new AddPurchase;
                            $data = $data->PurchaseShowItem();
                            $tdata ="";
                            $sl=1;
                            while($info = $data->fetch_assoc()){
                                $tdata.='
                                <tr>
                                    <td>'.$sl++.'</td>
                                    <td>'.$info['pdate'].'</td>
                                    <td>'.$info['barcode'].'</td>
                                    <td>'.$info['invoice'].'</td>
                                    <td>'.$info['company_name'].'</td>
                                    <td>'.$info['pQuantity'].'</td>
                                    <td>'.$info['unitPrice'].'</td>
                                    <td>'.$info['costPrice'].'</td>
                                    <td>'.$info['total_amoun'].'</td>
                                    <td>'.$info['br_id'].'</td>
                                    <td>'.$info['product_code'].'</td>
                                    <td>'."<button class='btn bg-danger rounded' id='pDelete' value=".$info['id']."><i class='fas fa-trash'></i></button>".'</td>
                                </tr>
                                ';
                            }
                            echo $tdata;
                            ?>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <!--/. container-fluid -->
    </section>


    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<?php 
include 'includes/scripts.php';
?>
<?php 
     include 'includes/footer.php';
    ?>
</div>
<!-- ./wrapper -->