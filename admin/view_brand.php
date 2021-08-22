<?php
    $page = 'clients';
    $sub_page = 'brand';
    include 'header.php';
    $id = $_SESSION['id'];
    $get_brands_data = $obj->get_brands($id);
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
    <h1 class="h3 mb-1 text-gray-800">View Brands</h1>
    <p class="mb-4">Dashboard / View Brands</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">View Brands</h6>
                        <a href="create_brand.php" class="btn btn-primary btn-sm">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Image</th>
                                    <th>Created_at</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                 if($get_brands_data->num_rows > 0){
                                     $si = 1;
                                     while($row = $get_brands_data->fetch_object()){
                                        ?>
                                            <tr>
                                                <td><?php echo $si; ?></td>
                                                <td> <img class="img-fluid" src="<?php echo 'uploads/brands/'.$row->brand_img; ?>" width="150" height="auto" alt=""></td>
                                                <td><?php echo date('M-d-Y h:I A',strtotime($row->brand_created_at)); ?></td>
                                                <td>
                                                <a href="brand_delete.php?id=<?php echo $row->brand_id; ?>" title="Image Delete" onclick="javascript:return confirm('Delete This Image?')" class="btn btn-danger btn-sm">Delete</a>
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