<?php
    $page = 'portfolio';
    $sub_page = 'port_image';
    include 'header.php';
    $result = $obj->get_port_cat_data();
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
    <h1 class="h3 mb-1 text-gray-800">View Category Image</h1>
    <p class="mb-4">Dashboard / View Category Image</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">View Category Image</h6>
                        <a href="port_image.php" class="btn btn-primary btn-sm">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Title</th>
                                    <th>Category Name</th>
                                    <th>Created_at</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                if($result->num_rows > 0){
                                    $si = 1;
                                    while($row = $result->fetch_object()){
                                        ?>
                                            <tr>
                                                <td><?php echo $si; ?></td>
                                                <td><?php echo $row->portfolio_title; ?></td>
                                                <td><?php echo $row->cat_name; ?></td>
                                                <td><?php echo date('M-d-Y h:i A',strtotime($row->portfolio_img_created)); ?></td>
                                                <td>
                                                    <a href="edit_port_img.php?id=<?php echo $row->portfolio_id;?>" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="details_port_img.php?id=<?php echo $row->portfolio_id;?>" class="btn btn-success btn-sm">View</a>
                                                </td>
                                                <td>
                                                    <a href="delete_port_img.php?id=<?php echo $row->portfolio_id;?>" class="btn btn-danger btn-sm">Delete</a>
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