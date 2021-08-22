<?php 
    $page = "clients";
    $sub_page = "desc";
    include 'header.php'; 

    $id = $_GET['id'];
    $get_desc = $obj->get_desc($id);
    if($get_desc->num_rows > 0){
        while($row = $get_desc->fetch_object()){
            $desc = $row->client_desc;
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
            <form action="desc_update.php" method="POST" id="card">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Clients Description</h6>
                            <a href="view_desc.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- description -->
                        <label class="mt-2" for="card_desc">Description</label>
                        <textarea name="client_desc" id="card_desc" cols="10" rows="5" class="form-control" placeholder="write something for card description... "><?php if(!empty($desc)){echo $desc;} ?></textarea>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>      
<?php include 'footer.php';?>