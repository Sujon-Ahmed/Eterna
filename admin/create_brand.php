<?php 
    $page = "clients";
    $sub_page = "brand";
    include 'header.php'; 
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Brands</h1>
    <p class="mb-4">Dashboard / Clients / Create Brand</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Fade In Utility -->
        <!-- toastr success message -->
        <?php
            if(isset($_SESSION['msg']['success'])){
                ?>
                    <script>
                        toastr.success("<?php echo Flash_data::show_error(); ?>");
                    </script>
                <?php
            }
        ?>
        <!-- toastr error message -->
        <?php
            if(isset($_SESSION['msg']['error'])){
                ?>
                    <script>
                        toastr.error("<?php echo Flash_data::show_error(); ?>");
                    </script>
                <?php
            }
        ?>
        <!-- form start -->
        <div class="col-lg-10 m-auto">
            <form action="insert_brand.php" method="POST" id="add_image" enctype="multipart/form-data">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Clients Brand</h6>
                            <a href="view_desc.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body m-auto text-center">
                        <div class="row">
                            <div class="col-md-8 m-auto text-center mt-3">
                                <div class="form-row mt-3 mb-3"> 
                                        <div class="form-group col-md-12">
                                            <label for="add_img"><i class="fa fa-upload fa-3x"></i></label>
                                            <input style="display: none" type="file" name="file" class="form-control mb-3 mt-1" id="add_img" required>
                                        </div>
                                        <div id="test_img" class="form-group col-md-6 mt-5 m-auto">
                                        </div>
                                    </div>                                  
                                <input style="display: block; text-align:center" type="submit" value="Submit" name="submit" class="btn btn-success btn-sm mt-4 mb-5 m-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>      
<?php include 'footer.php';?>