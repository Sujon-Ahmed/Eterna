<?php 
    $page = "team";
    $sub_page = "create_team";
    include 'header.php'; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $status = $obj->team_details($id);
        if($status->num_rows > 0){
            while($row = $status->fetch_object()){
                $image = $row->team_m_img;
                $name = $row->team_m_name;
                $profession = $row->team_m_profession;
                $about = $row->team_m_about;
            }
        }
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Edit Team</h1>
    <p class="mb-4">Dashboard / Edit Team</p>
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
            <form action="team_update.php" method="POST" id="team" enctype="multipart/form-data">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                         <h6 class="m-0 font-weight-bold text-primary">Edit Team</h6>
                         <a href="view_team.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <label for="b_title">Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>" id="b_title" class="form-control" placeholder="Name" required />
                        <label for="b_title" class="mt-2">Profession</label>
                        <input type="text" name="profession" value="<?php echo $profession; ?>" id="b_title" class="form-control" placeholder="Profession" required />
                        <div class="form-row mt-2"> 
                            <div class="form-group col-md-12">
                                <label for="team-file-img" class="btn btn-primary mt-2">Uploads Image</label>
                                <input type="file" name="file" id="team-file-img" class="file-control form-control" style="display: none;">
                                <input type="hidden" name="oldfile" value="<?php echo $image; ?>">
                            </div>
                            <div id="team-test-img" class="form-group col-md-6 mt-3">
                                <img class="img-fluid" src="<?php echo 'uploads/team/'.$image; ?>" alt="">
                            </div>
                        </div>
                        <label for="ban_desc">About us</label>
                        <textarea name="about_msg" id="ban_desc" cols="10" rows="5" class="form-control" placeholder="write something about yourself "><?php if(!empty($about)){echo $about;} ?></textarea>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
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