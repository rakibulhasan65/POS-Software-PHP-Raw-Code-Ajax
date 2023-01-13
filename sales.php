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
                        <li class="breadcrumb-item active">Sales</li>
                    </ol>
                </div>

            </div>
            <div class="col-sm-12">
                <h1 class="ml-2 mb-2">Add New Sales</h1>
                <div class="row">
                    <div class="salesForm">

                        <div class="row">
                            <div class=" col-md-2 mt-2">
                                <input type="text" class="invoice form-control" name="invoice" id="invoice"
                                    placeholder="Invoice Number">
                            </div>
                            <div class=" col-md-2 mt-2">
                                <input type="text" class="form-control barcode" name="barcode" id=""
                                    placeholder="Barcode Number">
                            </div>
                            <div class="  col-md-2 mt-2">
                                <input type="text" readonly class="sPrice form-control" name="sPrice" id="sPrice"
                                    placeholder="Product Price">
                            </div>
                            <div class=" col-md-2 mt-2">
                                <input type="text" class="form-control sQuentity" name="sQuentity"
                                    placeholder="Product Quantity">
                            </div>

                            <div class=" col-md-2 mt-2">
                                <input type="text" class="sTotal form-control" name="sTotal" id=""
                                    placeholder="Total Amount">
                            </div>
                            <div class=" col-md-2 mt-2">
                                <input type="text" readonly class="stock form-control" name="stock" id="stock"
                                    placeholder="Total Stock">
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- sales Table Start -->
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <button type="submit"
                            class="salesAdd mt-2 ml-2 btn form-control bg-gradient-blue">Sales</button>
                    </div>
                </div>
                <!-- sales Table End  -->

                <!-- Sales Report Field Start -->

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="saleData bg-dark overflow-auto" style="height: 200px;>
                            <div class=" tTable pb-5">
                            <table class="table table-bordered text-center pb-5 table-hover">

                                <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>Barcode</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Payment</th>
                                        <th>Deu</th>
                                    </tr>

                                </thead>


                                <tbody class="tData">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Report Field End  -->

            <!-- Sale All Summary Report Input Field  Start -->
            <div class="row ml-5">
                <div class="salesForm ml-5">

                    <div class="row">
                        <div class=" col-md-3 mt-2">
                            <input type="text" class="sTotalQuantity form-control" name="sTotalQuantity"
                                id="sTotalQuantity" placeholder="Total Quantity">
                        </div>
                        <div class=" col-md-3 mt-2">
                            <input type="text" class="form-control srTotalAmount" name="barcode" id="srTotalAmount"
                                placeholder="Total Amount">
                        </div>
                        <div class="  col-md-3 mt-2">
                            <select id="desPursent" class="form-control text-center">
                                <option class="form-control" value="0">0%</option>
                                <option class="form-control" value="5">5%</option>
                                <option class="form-control" value="10">10%</option>
                                <option class="form-control" value="15">15%</option>
                                <option class="form-control" value="20">20%</option>
                                <option class="form-control" value="25">25%</option>
                                <option class="form-control" value="30">30%</option>
                            </select>
                        </div>
                        <div class=" col-md-3 mt-2">
                            <input type="text" class="form-control sAmount" name="sAmount" placeholder="Dis Amount">
                        </div>
                    </div>


                    <div class="row">
                        <div class=" col-md-3 mt-2">
                            <input type="text" class="grandTotal form-control" name="grandTotal" id="grandTotal"
                                placeholder="Grand Total">
                        </div>

                        <div class="  col-md-3 mt-2">
                            <input type="text" class="payment form-control" name="payment" id="payment"
                                placeholder="Payment">
                        </div>
                        <div class=" col-md-3 mt-2">
                            <input type="text" class="form-control deu" name="deu" id="deu" placeholder="Deu">
                        </div>
                        <div class=" col-md-3 mt-2">
                            <button type="submit" class="printSave form-control bg-gradient-blue">Print &
                                Save</button>
                        </div>

                    </div>
                </div>

                <!-- /.card-body -->



                <!-- /.card-body -->


                <!-- Sale All Summary Report Input Field  End -->
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