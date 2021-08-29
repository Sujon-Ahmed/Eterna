<?php
    $page = "blog";
    $sub_page = "create_blog_category";
    include 'header.php';
    $get_blog_category = $obj->get_cat();
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
    <h1 class="h3 mb-1 text-gray-800">View Blog Category</h1>
    <p class="mb-4">Dashboard / Blog Category</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">View Category</h6>
                        <a href="cr_port_cat.php" class="btn btn-primary btn-sm">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Name</th>
                                    <th>Created_at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                if($get_blog_category->num_rows > 0){
                                    $si = 1;
                                    while($row = $get_blog_category->fetch_object()){
                                        ?>
                                            <tr>
                                                <td><?php echo $si; ?></td>
                                                <td><?php echo $row->blog_cat_name; ?></td>
                                                <td><?php echo date('M-d-Y h:i A',strtotime($row->blog_cat_created_at)); ?></td>
                                                <td>
                                                    <a href="edit_blog_cat.php?id=<?php echo $row->blog_cat_id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="delete_blog_cat.php?id=<?php echo $row->blog_cat_id; ?>" class="btn btn-danger btn-sm">Delete</a>
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