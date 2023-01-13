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
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-md-10 offset-1">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="deshboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Purchase Product</li>
                    </ol>
                </div>

            </div>
            <div class="col-sm-12">
                <h1 class="ml-5 mb-2">Add New Purchase</h1>
                <div class="row">
                    <div class="addPurchase ml-5">

                        <div class="row">
                            <div class=" col-md-3 mt-2">
                                <input type="date" class="pdate form-control text-uppercase" name="pdate" id="">
                            </div>
                            <div class=" col-md-3 mt-2">
                                <input type="text" class="form-control barcode" name="barcode" id=""
                                    placeholder="Enter Barcode Number">
                            </div>
                            <div class="  col-md-3 mt-2">
                                <input type="text" class="invoice form-control" name="invoice" id=""
                                    placeholder="Enter Product invoice">
                            </div>
                            <div class=" col-md-3 mt-2">
                                <input type="text" readonly class="form-control availbleStock" name="availbleStock"
                                    placeholder="Available Stock">
                            </div>



                        </div>

                        <div class="row">
                            <div class=" col-md-3 mt-2">
                                <input type="text" class="company_name form-control" name="company_name" id=""
                                    placeholder="Enter Company Name">
                            </div>
                            <div class=" col-md-3 mt-2">
                                <input type="text" class="pQuantity form-control" name="pQuantity" id=""
                                    placeholder="Enter Product Quantity">
                            </div>
                            <div class=" col-md-3 mt-2">
                                <input type="text" class="unitPrice form-control" name="unitPrice" id=""
                                    placeholder="Enter Product Unit Price">
                            </div>


                            <div class=" col-md-3 mt-2">
                                <input type="text" class="costPrice form-control" name="costPrice" id=""
                                    placeholder="Enter Product Cost">
                            </div>


                        </div>
                        <div class="row">

                            <div class="  col-md-3 mt-2">
                                <input type="text" class="total_amoun form-control" name="total_amoun" id=""
                                    placeholder="Enter Product Total Amount">
                            </div>
                            <div class="  col-md-3 mt-2">
                                <input type="text" class="br_id form-control" name="br_id" id=""
                                    placeholder="Enter Branch Id">
                            </div>
                            <div class="  col-md-3 mt-2">
                                <input type="text" class="product_code form-control" name="product_code" id=""
                                    placeholder="Enter Product Code">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" name="addPurchase" class="form-control btn bg-success mt-2"
                                    id="addPurchase">Save
                                    Purchase</button>
                            </div>

                        </div>



                    </div>

                    <!-- /.card-body -->

                </div>



            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- /.content-wrapper -->

                            <!-- Control Sidebar -->
                            <aside class="control-sidebar control-sidebar-dark">
                                <!-- Control sidebar content goes here -->
                            </aside>
                            <!-- /.control-sidebar -->

                            <!-- Main Footer -->
                            <?php 
     include 'includes/footer.php';
    ?>
                        </div>
                        <!-- ./wrapper -->
                        <?php 
     include 'includes/scripts.php';
    ?>