<?php 
    $page = "about";
    $sub_page = "create_about";
    include 'header.php'; 
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Create About</h1>
    <p class="mb-4">Dashboard / Create About</p>
    <!-- Content Row -->
    <div class="row">
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
        <!-- form start here -->
        <div class="col-lg-10 m-auto">
            <form action="about_action.php" method="POST" id="about" enctype="multipart/form-data">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create About</h6>
                    </div>
                    <div class="card-body">
                        <label for="ab_title">About Title</label>
                        <input type="text" name="about_title" id="ab_title" class="form-control" placeholder="About Title" required />
                        <div class="form-row mt-2"> 
                            <div class="form-group col-md-12">
                                <label for="about-file-img" class="btn btn-primary mt-2">Uploads Image</label>
                                <input type="file" name="file" id="about-file-img" class="file-control form-control" style="display: none;">
                            </div>
                            <div id="about-test-img" class="form-group col-md-6 mt-3"></div>
                        </div>
                        <label for="about_desc">About us</label>
                        <textarea name="about_desc" id="about_desc" cols="10" rows="5" class="form-control" placeholder="write something about "></textarea>
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>     
<?php
 include 'footer.php';
?>