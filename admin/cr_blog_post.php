<?php 
    $page = "blog";
    $sub_page = "create_blog_post";
    include 'header.php'; 
    $get_cat = $obj->get_cat();
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Create Blog Post</h1>
    <p class="mb-4">Dashboard / Create Post</p>
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
            <form action="blog_action.php" method="POST" id="blog" enctype="multipart/form-data">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create Post</h6>
                    </div>
                    <div class="card-body">
                        <!-- title -->
                        <label for="ab_title">Blog Title</label>
                        <input type="text" name="blog_title" id="ab_title" class="form-control" placeholder="Blog Title" required />
                        <!-- category -->
                        <!-- category -->
                        <label for="cat_name" class="mb-2 mt-2">Blog Category</label>
                        <select name="blog_cat_id" class="form-control" required>
                            <option value="">Select Category</option>
                            <?php
                                if($get_cat->num_rows > 0){
                                    while($row = $get_cat->fetch_object()){
                                        ?>
                                            <option value="<?php echo $row->blog_cat_id; ?>"><?php echo $row->blog_cat_name; ?></option>
                                        <?php
                                    }
                                }
                            ?>                           
                        </select>
                        <!-- thumbnail -->
                        <div class="form-row mt-2"> 
                            <div class="form-group col-md-12">
                                <label for="blog-file-img" class="btn btn-primary mt-2">Uploads Image</label>
                                <input type="file" name="file" id="blog-file-img" class="file-control form-control" style="display: none;">
                            </div>
                            <div id="blog-test-img" class="form-group col-md-6 mt-3"></div>
                        </div>
                        <!-- Post Description -->
                        <label for="about_desc">Blog Description</label>
                        <textarea name="blog_desc" id="about_desc" cols="10" rows="5" class="form-control" placeholder="write something about "></textarea>
                        <!-- submit -->
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