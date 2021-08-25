<?php 
    $page = "skill";
    $sub_page = "skill_desc";
    include 'header.php'; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $description = $obj->get_skill_desc_with_author_id($id);
        if($description->num_rows > 0){
            while($view = $description->fetch_object()){
                $id = $view->skill_desc_id;
                $desc = $view->skill_desc;
            }
        }
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Description</h1>
    <p class="mb-4">Dashboard / Description / Edit</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Fade In Utility -->
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
        <!-- form start -->
        <div class="col-lg-10 m-auto">
            <form action="skill_desc_update.php" method="POST" id="card">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Skills Description</h6>
                            <a href="view_skill_desc.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- description -->
                        <label class="mt-2" for="card_desc">Description</label>
                        <textarea name="skill_desc" id="card_desc" cols="10" rows="5" class="form-control" placeholder="write something for card description... "><?php if(!empty($desc)){echo $desc;} ?></textarea>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>      
<?php include 'footer.php';?>