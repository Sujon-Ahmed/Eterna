<?php
    $page = 'address';
    $sub_page = 'map';
    include 'header.php';
    $location = $obj->get_location();
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
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
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800"Pricing>View Location</h1>
    <p class="mb-4">Dashboard / View Location</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View Location</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Address</th>
                                    <th>Map</th>
                                    <th>Update</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                if($location->num_rows > 0){
                                    $si = 1;
                                    while($row = $location->fetch_object()){
                                        ?>
                                            <tr>
                                                <td><?php echo $si; ?></td>
                                                <td><?php echo $row->address_title; ?></td>
                                                <td>
                                                    <iframe class="map" src="<?php echo $row->map_link; ?>" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                </td>
                                                <td><?php echo date('M-d-Y h:i A',strtotime($row->address_created)); ?></td>
                                                <td>
                                                    <a href="edit_location.php?id=<?php echo $row->address_id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                    <a onclick="javascript:return confirm('Are You Sure?')"  href="delete_location.php?id=<?php echo $row->address_id; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        $si++;
                                    }
                                }
                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<?php include 'footer.php'; ?>