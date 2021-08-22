<?php 
    $page = "services";
    $sub_page = "create_service";
    include 'header.php'; 
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Create Service</h1>
    <p class="mb-4">Dashboard / Create Service</p>
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
            <form action="service_action.php" method="POST" id="service">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create Service</h6>
                    </div>
                    <div class="card-body">
                        <!-- icon -->
                        <label class="mb-2" for="card_icon">Service Icon <small><a style="text-decoration: none;" href="https://fontawesome.com/v5.15/icons?d=gallery&p=2" target="_blank">Visit Site</a></small></label>
                        <input type="text" name="ser_icon" id="ser_icon" class="form-control" placeholder="Example: fa fa-user" required />
                        <!-- title -->
                        <label class="mb-2 mt-2" for="ser_title">Service Title</label>
                        <input type="text" name="ser_title" id="ser_title" class="form-control" placeholder="Service title here" required />
                        <!-- description -->
                        <label class="mt-2" for="ser_desc">Description</label>
                        <textarea name="ser_desc" id="ser_desc" cols="10" rows="5" class="form-control" placeholder="write something for service description... "></textarea>
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>      
<?php include 'footer.php';?>