<?php 
    $page = "abs";
    $sub_page = "create_abs";
    include 'header.php'; 
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Create About Card</h1>
    <p class="mb-4">Dashboard / Create Card</p>
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
            <form action="abs_insert.php" method="POST" id="abs">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Create About Card</h6>
                            <a href="view_abs.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- icon -->
                        <label class="mb-2" for="abs_icon">Card Icon <small><a style="text-decoration: none;" href="https://fontawesome.com/v5.15/icons?d=gallery&p=2" target="_blank">Visit Site</a></small></label>
                        <input type="text" name="abs_icon" id="abs_icon" class="form-control" placeholder="Example: fa fa-user" required />
                        <!-- value -->
                        <label class="mb-2 mt-2" for="card_value">Card Title</label>
                        <input type="number" name="abs_value" id="card_title" class="form-control" placeholder="max value " required />
                        <!-- title -->
                        <label class="mb-2 mt-2" for="abs_title">Card Title</label>
                        <input type="text" name="abs_title" id="card_title" class="form-control" placeholder="Card title here" required />
                        <!-- description -->
                        <label class="mt-2" for="card_desc">Description</label>
                        <textarea name="abs_desc" id="card_desc" cols="10" rows="5" class="form-control" placeholder="write something for card description... "></textarea>
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>      
<?php include 'footer.php';?>