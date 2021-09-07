<?php
    $page = 'social';
    $sub_page = 'brand';
    include 'header.php';
    $social = $obj->get_social();
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
    <h1 class="h3 mb-1 text-gray-800"Pricing>View Social</h1>
    <p class="mb-4">Dashboard / View Social</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View Social</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Link</th>
                                    <th>Created_at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                if($social->num_rows > 0){
                                    $si = 1;
                                    while($row = $social->fetch_object()){
                                        ?>
                                            <tr>
                                                <td><?php echo $si; ?></td>
                                                <td><?php echo $row->social_name; ?></td>
                                                <td>
                                                    <i class="<?php echo $row->social_icon; ?>"></i>
                                                </td>
                                                <td><?php echo $row->social_link; ?></td>
                                                <td><?php echo date('M-d-Y h:i A',strtotime($row->social_created)); ?></td>
                                                <td>
                                                    <a href="edit_social.php?id=<?php echo $row->social_id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="delete_social.php?id=<?php echo $row->social_id; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
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