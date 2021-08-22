<?php
    $page = 'banner';
    $sub_page = 'view_banner';
    include 'header.php';
    $id = $_SESSION['id'];
    $banner = $obj->get_banner($id);

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
        <h6 class="m-0 font-weight-bold text-primary">View Banner</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Created_at</th>
                        <th>Edit</th>
                        <th>View</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if($banner->num_rows > 0){
                        $si = 1;
                        while($banners = $banner->fetch_object()){
                            ?>
                                <tr>
                                    <td><?php echo $si; ?></td>
                                    <td><?php echo $banners->banner_title; ?></td>
                                    <td>
                                        <a href="<?php echo 'uploads/banner/'.$banners->banner_img; ?>" target="_blank">
                                        <img class="img-fluid" src="<?php echo 'uploads/banner/'.$banners->banner_img; ?>" width="150" height="150" alt="">
                                        </a>
                                    </td>
                                    <td><?php echo date('M-d-Y h:i A',strtotime($banners->banner_careated_at)); ?></td>
                                    <td><a href="banner_edit.php?id=<?php echo $banners->banner_id; ?>" class="btn btn-primary btn-sm">Edit</a></td>
                                    <td><a href="banner_view.php?id=<?php echo $banners->banner_id; ?>" class="btn btn-success btn-sm">View</a></td>
                                    <td><a onclick="javascript:return confirm('Are You Sure?')" href="banner_delete.php?id=<?php echo $banners->banner_id; ?>" class="btn btn-danger btn-sm">Delete</a></td>
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