<?php
    $page = 'skill';
    $sub_page = 'content_test';
    include 'header.php';
    $get_content_data = $obj->get_content();
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
    <h1 class="h3 mb-1 text-gray-800">View Content</h1>
    <p class="mb-4">Dashboard / View Content</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">View Content</h6>
                        <a href="content_create_test.php" class="btn btn-primary btn-sm">Create</a>
                    </div>                   
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Created_at</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if($get_content_data->num_rows > 0){
                                        $si = 1;
                                        while($row = $get_content_data->fetch_object()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $si; ?></td>
                                                    <td><img class="img-fluid" src="<?php echo 'uploads/skill/'.$row->content_image; ?>" width="100" height="100" alt=""></td>
                                                    <td><?php echo $row->content_title; ?></td>
                                                    <td><?php echo date('M-d-Y h:I A',strtotime($row->content_created_at)); ?></td>
                                                    <td><a class="btn btn-primary btn-sm" href="edit_content.php?id=<?php echo $row->content_id; ?>">Edit</a></td>
                                                    <td><a class="btn btn-success btn-sm" href="details_content.php?id=<?php echo $row->content_id; ?>">View</a></td>
                                                    <td><a onclick="javascript:return confirm('Are You Sure?')" class="btn btn-danger btn-sm" href="delete_content.php?id=<?php echo $row->content_id; ?>">Delete</a></td>
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