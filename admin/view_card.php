<?php
    $page = 'card';
    $sub_page = 'view_card';
    include 'header.php';
    $id = $_SESSION['id'];
    $get_card = $obj->get_data($id);
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
    <h1 class="h3 mb-1 text-gray-800">View Card</h1>
    <p class="mb-4">Dashboard / View Card</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View Card</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Created_at</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if($get_card->num_rows > 0){
                                        $si = 1;
                                        while($cards = $get_card->fetch_object()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $si; ?></td>
                                                    <td><i class="<?php echo $cards->card_icon; ?>"></i></td>
                                                    <td><?php echo $cards->card_title; ?></td>
                                                    <td><?php echo date('M-d-Y h:i A',strtotime($cards->card_created_at)); ?></td>
                                                    <td><a href="card_edit.php?id=<?php echo $cards->card_id; ?>" class="btn btn-primary btn-sm">Edit</a></td>
                                                    <td><a href="card_view.php?id=<?php echo $cards->card_id; ?>" class="btn btn-success btn-sm">View</a></td>
                                                    <td><a onclick="javascript:return confirm('Are You Sure?')" href="card_delete.php?id=<?php echo $cards->card_id; ?>" class="btn btn-danger btn-sm">Delete</a></td>
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