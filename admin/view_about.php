<?php
    $page = 'about';
    $sub_page = 'view_about';
    include 'header.php';
    $id = $_SESSION['id'];
    $get_about_data = $obj->get_about($id);
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
    <h1 class="h3 mb-1 text-gray-800">View About</h1>
    <p class="mb-4">Dashboard / View About</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View About</h6>
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
                                    if($get_about_data->num_rows > 0){
                                        $si = 1;
                                        while($about_row = $get_about_data->fetch_object()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $si; ?></td>
                                                    <td><img class="img-fluid" src="<?php echo 'uploads/about/'.$about_row->about_image; ?>" width="200" height="auto" alt=""></td>
                                                    <td><?php echo $about_row->about_title; ?></td>
                                                    <td><?php echo date('M-d-Y h:I A',strtotime($about_row->about_created_at)); ?></td>
                                                    <td><a href="about_edit.php?id=<?php echo $about_row->about_id; ?>" class="btn btn-primary btn-sm">Edit</a></td>
                                                    <td><a href="about_details.php?id=<?php echo $about_row->about_id; ?>" class="btn btn-success btn-sm">View</a></td>
                                                    <td><a onclick="javascript:return confirm('Are You Sure?')" href="about_delete.php?id=<?php echo $about_row->about_id; ?>" class="btn btn-danger btn-sm">Delete</a></td>
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