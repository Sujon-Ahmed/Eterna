<?php
    $page = 'testimonials';
    $sub_page = 'view_testimonial';
    include 'header.php';
    $result = $obj->get_testimonial();
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
<h1 class="h3 mb-1 text-gray-800">View Banner</h1>
<p class="mb-4">Dashboard / View Banner</p>

<!-- Content Row -->
<div class="row">

     <!-- Begin Page Content -->
     <div class="container-fluid mb-5">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">View Banner</h6>
            <a href="create_testimonial.php" class="btn btn-primary btn-sm">Create</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Profession</th>
                        <th>Edit</th>
                        <th>View</th>
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
                                        <td><img class="img-fluid" src="<?php echo 'uploads/testimonial/'.$row->test_img; ?>" style="width: 100px; height:100px;" alt=""></td>
                                        <td><?php echo $row->test_name; ?></td>
                                        <td><?php echo $row->test_profession; ?></td>
                                        <td>
                                            <a href="edit_testimonial.php?id=<?php echo $row->test_id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href="details_testimonial.php?id=<?php echo $row->test_id; ?>" class="btn btn-success btn-sm">View</a>
                                        </td>
                                        <td>
                                            <a href="delete_testimonial.php?id=<?php echo $row->test_id; ?>" class="btn btn-danger btn-sm">Delete</a>
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
<?php 
    include 'footer.php';
?>