<?php
    $page = 'clients';
    $sub_page = 'desc';
    include 'header.php';
    $id = $_SESSION['id'];
    $get_client_desc = $obj->get_desc_with_author($id);
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
                        <a href="client_desc.php" class="btn btn-primary btn-sm">Create</a>
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
                                    if($get_client_desc->num_rows > 0){
                                        $si = 1;
                                        while($row = $get_client_desc->fetch_object()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $si; ?></td>
                                                    <td><?php echo $row->client_desc; ?></td>
                                                    <td><?php echo $row->admin_name; ?></td>
                                                    <td><?php echo date('M-d-Y h:i A',strtotime($row->client_created_at)); ?></td>
                                                    <td><a href="desc_edit.php?id=<?php echo $row->client_id; ?>" class="btn btn-primary btn-sm">Edit</a></td>
                                                    <td><a href="desc_view.php?id=<?php echo $row->client_id ?>" class="btn btn-success btn-sm">View</a></td>
                                                    <td><a onclick="javascript:return confirm('Are You Sure?')" href="desc_delete.php?id=<?php echo $row->client_id ?>" class="btn btn-danger btn-sm">Delete</a></td>
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