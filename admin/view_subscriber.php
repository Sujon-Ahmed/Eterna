<?php
    $page = 'subscribe';
    $sub_page = 'subscribers';
    include 'header.php';
    $get_subscribers = $obj->get_subscriber();
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
    <h1 class="h3 mb-1 text-gray-800">View Subscribers</h1>
    <p class="mb-4">Dashboard / View Subscribers</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View Subscribers</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Email</th>
                                    <th>Subscribe_at</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                if( $get_subscribers->num_rows > 0){
                                    $si = 1;
                                    while($row =  $get_subscribers->fetch_object()){
                                        ?>
                                            <tr>
                                                <td><?php echo $si; ?></td>
                                                <td><?php echo $row->sub_email; ?></td>
                                                <td><?php echo date('M-d-Y h:I A',strtotime($row->sub_time)); ?></td>
                                                <td><a onclick="javascript:return confirm('Are You Sure?')" href="delete_sub.php?id=<?php echo $row->sub_id; ?>" class="btn btn-danger btn-sm">Delete</a></td>
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