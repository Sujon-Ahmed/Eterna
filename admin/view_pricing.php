<?php
    $page = 'pricing';
    $sub_page = 'cr_pricing';
    include 'header.php';
    $pricing = $obj->get_data_pricing();
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
    <h1 class="h3 mb-1 text-gray-800"Pricing>View Pricing</h1>
    <p class="mb-4">Dashboard / View Pricing</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View Pricing</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Created_at</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                if($pricing->num_rows > 0){
                                    $si = 1;
                                    while($row = $pricing->fetch_object()){
                                        ?>
                                            <tr>
                                                <td><?php echo $si; ?></td>
                                                <td><?php echo $row->pricing_title; ?></td>
                                                <td><?php echo $row->pricing_price; ?></td>
                                                <td><?php echo date('M-d-Y h:i A',strtotime($row->pricing_created)); ?></td>
                                                <!-- edit -->
                                                <td><a href="edit_pricing.php?id=<?php echo $row->pricing_id; ?>" class="btn btn-primary btn-sm">Edit</a></td>
                                                <!-- details -->
                                                <td><a href="details_pricing.php?id=<?php echo $row->pricing_id; ?>" class="btn btn-success btn-sm">View</a></td>
                                                <!-- delete -->
                                                <td><a href="delete_pricing.php?id=<?php echo $row->pricing_id; ?>" class="btn btn-danger btn-sm">Delete</a></td>
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