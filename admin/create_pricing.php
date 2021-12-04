<?php
    $page = 'pricing';
    $sub_page = 'cr_pricing';
    include 'header.php';
?>
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Create Pricing Table</h1>
    <p class="mb-4">Dashboard / Create Pricing Table</p>
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
            <form action="pricing_insert.php" method="POST" id="card">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Create Pricing Table</h6>
                            <a href="view_pricing.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- title -->
                        <label class="mb-2 mt-2" for="pricing_title">Pricing Title</label>
                        <input type="text" name="title" id="pricing_title" class="form-control" placeholder="Pricing title here" required />
                        <!-- price -->
                        <label class="mb-2 mt-2" for="pricing_price">Pricing Price</label>
                        <input type="number" name="price" id="pricing_price" class="form-control" placeholder="Pricing Price" required />
                        <!-- description -->
                        <label class="mt-2" for="card_desc">Description</label>
                        <textarea name="pricing_desc" id="card_desc" cols="10" rows="5" class="form-control" placeholder="write something..."></textarea>
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  
<?php include 'footer.php'; ?>