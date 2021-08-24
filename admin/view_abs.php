<?php
    $page = 'abs';
    $sub_page = 'view_abs';
    include 'header.php';
    $id = $_SESSION['id'];
    $result = $obj->get_abs_card();
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
    <h1 class="h3 mb-1 text-gray-800">View About Card</h1>
    <p class="mb-4">Dashboard / View Card</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">View Card</h6>
                        <a href="create_abs.php" class="btn btn-primary btn-sm">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Icon</th>
                                    <th>Value</th>
                                    <th>Title</th>
                                    <th>Description</th>
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
                                                    <td><i class="<?php echo $row->ab_icon; ?>"></i></td>
                                                    <td><?php echo $row->ab_max_value; ?></td>
                                                    <td><?php echo $row->ab_title; ?></td>
                                                    <td><?php echo $row->ab_desc; ?></td>
                                                    <td><?php echo date('M-d-Y h:I A',strtotime($row->ab_created_at)); ?></td>
                                                    <td>
                                                        <a href="edit_abs.php?id=<?php echo $row->ab_id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="view_abs_details.php?id=<?php echo $row->ab_id; ?>" class="btn btn-success btn-sm">View</a>
                                                    </td>
                                                    <td>
                                                        <a href="delete_abs.php?id=<?php echo $row->ab_id; ?>" class="btn btn-danger btn-sm">Delete</a>
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