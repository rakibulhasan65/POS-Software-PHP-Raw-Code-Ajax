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
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">add product</li>
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
                <!-- My Addproduct Area -->
                <div class="col-md-12">
                    <div class="addProduct">

                        <div class="row">
                            <div class=" col-md-2 mt-2 offset-1">
                                <input type="text" class="barcode form-control" name="barcode" id=""
                                    placeholder="Enter Barcode Number">
                            </div>
                            <div class=" col-md-2 mt-2">
                                <input type="text" class="name form-control" name="name" id=""
                                    placeholder="Enter Product Name">
                            </div>
                            <div class=" col-md-2 mt-2">
                                <input type="text" class="pQty form-control" name="pQty" id=""
                                    placeholder="Enter Product Quantity">
                            </div>

                            <div class=" col-md-2 mt-2">
                                <input type="text" class="des form-control" name="des" id=""
                                    placeholder="Enter Product Descount">
                            </div>
                            <div class=" col-md-2 mt-2">
                                <input type="text" class="size form-control" name="size" id=""
                                    placeholder="Enter Product Size">
                            </div>

                        </div>

                        <div class="row">

                            <div class="  col-md-2 mt-2 offset-1">
                                <input type="text" class="color form-control" name="color" id=""
                                    placeholder="Enter Product Color">
                            </div>
                            <div class="  col-md-2 mt-2">
                                <input type="text" class="product_code form-control" name="product_code" id=""
                                    placeholder="Enter Product Code">
                            </div>

                            <div class="  col-md-2 mt-2">
                                <input type="text" class="cost_price form-control" name="cost_price" id=""
                                    placeholder="Enter Product Cost Price">
                            </div>
                            <div class="  col-md-2 mt-2">
                                <input type="text" class="sale_price form-control" name="sale_price" id=""
                                    placeholder="Enter Product Sale Price">
                            </div>
                            <div class="date col-md-2 mt-2">
                                <input type="" class="form-control text-uppercase" name="pdate" id="pdate">
                            </div>

                        </div>




                        <div class="row">
                            <div class="col-md-2 offset-1"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <button type="submit" name="addProduct" class="form-control btn bg-success mt-2"
                                    id="addProduct">Save
                                    Product</button>
                            </div>





                        </div>
                        <!-- /.card-body -->

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
     include 'includes/footer.php';
    ?>
</div>
<!-- ./wrapper -->
<?php 
     include 'includes/scripts.php';
    ?>