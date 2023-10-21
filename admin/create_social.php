<?php
    $page = 'social';
    $sub_page = 'brand';
    include 'header.php';
?>
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Create Social</h1>
    <p class="mb-4">Dashboard / Create Social</p>
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
            <form action="social_insert.php" method="POST" id="card">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Create Social</h6>
                            <a href="view_social.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- social name -->
                        <label class="mb-2 mt-2" for="social_name">Social Name</label>
                        <input type="text" name="social_name" id="pricing_title" class="form-control" placeholder="Social Name Here" required />
                        <!-- social icon -->
                        <label class="mb-2 mt-2" for="social_icon">Social Icon</label>
                        <input type="text" name="social_icon" id="pricing_title" class="form-control" placeholder="Ex: fab fa-facebook" required />
                         <!-- social link -->
                         <label class="mb-2 mt-2" for="social_link">Social Link</label>
                        <input type="text" name="social_link" id="pricing_title" class="form-control" placeholder="Social Link Here" required />
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  
<?php include 'footer.php'; ?>