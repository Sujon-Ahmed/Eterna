<?php
    $page = 'address';
    $sub_page = 'map';
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $get_value = $obj->get_location_value($id);
        if($get_value->num_rows > 0){
            while($row = $get_value->fetch_object()){
                $id = $row->address_id;
                $title = $row->address_title;
                $map = $row->map_link;
            }
        }
    }
?>
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Edit Location</h1>
    <p class="mb-4">Dashboard / Edit Location</p>
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
            <form action="location_update.php" method="POST" id="card">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Map Location</h6>
                            <a href="view_location.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- title -->
                        <label class="mb-2 mt-2" for="pricing_title">Address Title</label>
                        <input type="text" name="address_title" value="<?php echo $title; ?>" id="pricing_title" class="form-control" placeholder="Address title here" required />
                        <!-- map location -->
                        <label class="mt-2" for="card_desc">Map Location [ Note: Just paste iframe src https link ]</label>
                        <input type="text" name="map_location" value="<?php echo $map; ?>" id="pricing_title" class="form-control" placeholder="Map Location link here" required />
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  
<?php include 'footer.php'; ?>