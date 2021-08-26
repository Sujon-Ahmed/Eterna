<?php 
    $page = "skill";
    $sub_page = "content_test";
    include 'header.php'; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $details = $obj->get_content_details($id);
        if($details->num_rows > 0){
            while($row = $details->fetch_object()){
                $content_id = $row->content_id;
                $title = $row->content_title;
                $body = $row->content_desc;
                $image = $row->content_image;
            }
        }
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Edit Content</h1>
    <p class="mb-4">Dashboard / Edit Content</p>
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
        <!-- form start here -->
        <div class="col-lg-10 m-auto">
            <form action="skill_content_update.php" method="POST" id="test-content" enctype="multipart/form-data">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Content</h6>
                            <a href="view_content_test.php" class="btn btn-primary btn-sm">View</a>
                        </div>                       
                    </div>
                    <div class="card-body">
                        <label for="content_title">Content Title</label>
                        <input type="text" name="content_title" value="<?php echo $title; ?>" id="content_title" class="form-control" placeholder="Content Title" required />
                        <div class="form-row mt-2"> 
                            <div class="form-group col-md-12">
                                <label for="content-file-img" class="btn btn-primary mt-2">Uploads Image</label>
                                <input type="file" name="file" id="content-file-img" class="file-control form-control" style="display: none;">
                                <input type="hidden" name="oldfile" value="<?php echo $image; ?>" >
                            </div>
                            <div id="content-test-img" class="form-group col-md-6 mt-3">
                                <img class="img-fluid" src="<?php echo 'uploads/skill/'.$image; ?>" alt="">
                            </div>
                        </div>
                        <label for="about_desc">Content Description</label>
                        <textarea name="content_desc" id="about_desc" cols="10" rows="5" class="form-control" placeholder="write something Content "><?php if(!empty($body)){echo $body;} ?></textarea>
                        <input type="hidden" name="id" value="<?php echo  $content_id; ?>">
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>     
<?php
 include 'footer.php';
?>