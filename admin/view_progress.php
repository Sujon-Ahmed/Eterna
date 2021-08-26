<?php
    $page = 'skill';
    $sub_page = 'skill_progress';
    include 'header.php';
    $result = $obj->get_progress();
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
    <h1 class="h3 mb-1 text-gray-800">View Progress</h1>
    <p class="mb-4">Dashboard / View Progress</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">View Progress</h6>
                        <a href="create_progress.php" class="btn btn-primary btn-sm">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Name</th>
                                    <th>Value</th>
                                    <th>Created_at</th>
                                    <th>Edit</th>
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
                                                    <td class="text-uppercase"><?php echo $row->skill_cat_name; ?></td>
                                                    <td><?php echo $row->skill_cat_mx_val; ?></td>
                                                    <td><?php echo date('M-d-Y h:i A',strtotime($row->skill_cat_created)); ?></td>
                                                    <td><a class="btn btn-primary btn-sm" href="edit_progress.php?id=<?php echo $row->skill_cat_id;?>">Edit</a></td>
                                                    <td><a onclick="javascript:return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="delete_progress.php?id=<?php echo $row->skill_cat_id;?>">Delete</a></td>
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