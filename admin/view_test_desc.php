<?php
    $page = 'testimonials';
    $sub_page = 'desc_testimonial';
    include 'header.php';
    $id = $_SESSION['id'];
    $get_testimonial_desc = $obj->get_testimonial_desc_with_author();
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
    <h1 class="h3 mb-1 text-gray-800">Description</h1>
    <p class="mb-4">Dashboard / Description / View</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">View Description</h6>
                        <a href="create_testimonial_desc.php" class="btn btn-primary btn-sm">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Description</th>
                                    <th>Author</th>
                                    <th>Created_at</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if($get_testimonial_desc->num_rows > 0){
                                        $si = 1;
                                        while($row = $get_testimonial_desc->fetch_object()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $si; ?></td>
                                                    <td><?php echo $row->testimonial_desc; ?></td>
                                                    <td><?php echo $row->admin_name; ?></td>
                                                    <td><?php echo date('M-d-Y h:I A',strtotime($row->created_at)); ?></td>
                                                    <td><a href="edit_test_desc.php?id=<?php echo $row->testimonial_desc_id;?>" class="btn btn-primary btn-sm">Edit</a></td>
                                                    <td><a href="details_testimonial_desc.php?id=<?php echo $row->testimonial_desc_id;?>" class="btn btn-success btn-sm">View</a></td>
                                                    <td><a onclick="javascript:return confirm('Are You Sure?')" href="delete_test_desc.php?id=<?php echo $row->testimonial_desc_id;?>" class="btn btn-danger btn-sm">Delete</a></td>
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