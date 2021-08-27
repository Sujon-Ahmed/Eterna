<?php 
    $page = "portfolio";
    $sub_page = "port_image";
    include 'header.php'; 
    $get_cat = $obj->get_port_cat();
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Portfolio Image</h1>
    <p class="mb-4">Dashboard / Portfolio Image</p>
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
        <div class="col-lg-8 m-auto">
            <form action="port_image_insert.php" method="POST" id="abs" enctype="multipart/form-data">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Create Portfolio Image</h6>
                            <a href="view_port_image.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- title -->
                        <label class="mb-2 mt-2" for="abs_title">Portfolio Title</label>
                        <input type="text" name="port_title" id="card_title" class="form-control" placeholder="portfolio title" required />
                        <!-- category -->
                        <label for="cat_name" class="mb-2 mt-2">Portfolio Category</label>
                        <select name="port_cat_id" class="form-control" required>
                            <option value="">Select Category</option>
                            <?php
                                if($get_cat->num_rows > 0){
                                    while($row = $get_cat->fetch_object()){
                                        ?>
                                            <option value="<?php echo $row->portfolio_cat_id; ?>"><?php echo $row->cat_name; ?></option>
                                        <?php
                                    }
                                }
                            ?>                           
                        </select>
                        <!-- image -->
                        <div class="form-row mt-3"> 
                            <div class="form-group col-md-12">
                                <label for="file" class=" mb-1">Portfolio Image</label>
                                <input type="file" name="file" id="port-file-img" class="file-control form-control">
                            </div>
                            <div id="port-test-img" class="form-group col-md-6 mt-3">
                                
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>      
<?php include 'footer.php';?>