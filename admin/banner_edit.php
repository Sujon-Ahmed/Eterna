<?php 
    include 'header.php'; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $banner = $obj->get_single_banner($id);
        if($banner->num_rows>0){
            while($banners = $banner->fetch_object()){
                $id = $banners->banner_id;
                $title = $banners->banner_title;
                $image = $banners->banner_img;
                $body = $banners->banner_desc;
                // $author = $banners->admin_name;
            }
        }
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Create Banner</h1>
    <p class="mb-4">Dashboard / Create Banner</p>
    <!-- Content Row -->
    <div class="row">
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
        <div class="col-lg-10 m-auto">
            <form action="update.php" method="POST" id="banner" enctype="multipart/form-data">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <div><h6 class="m-0 font-weight-bold text-primary">Create Banner</h6></div>
                            <div><a href="view_banner.php" class="btn btn-primary btn-sm">View</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <label for="b_title">Banner Title</label>
                        <input type="text" name="title" value="<?php echo $title; ?>" id="b_title" class="form-control" placeholder="Banner Title" required />
                        <div class="form-row mt-2"> 
                            <div class="form-group col-md-12">
                                <label for="banner-file-img" class="btn btn-primary mt-2">Uploads Image</label>
                                <input type="file" name="file" id="banner-file-img" class="file-control form-control" style="display: none;">
                                <input type="hidden" value="<?php echo $image;?>" class="file-control" name="oldfile" id="img">
                            </div>
                            <div id="banner-test-img" class="form-group col-md-6 mt-3">
                                <img class="img-fluid" src="<?php echo 'uploads/banner/'.$image; ?>" alt="">
                            </div>
                        </div>
                        <label for="ban_desc">About us</label>
                        <textarea name="banner_desc" id="ban_desc" cols="10" rows="5" class="form-control" placeholder="write something about yourself "><?php if(!empty($body)){echo $body;} ?></textarea>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  
<?php include 'footer.php'; ?>