<?php 
    $page = "team";
    $sub_page = "create_team";
    include 'header.php'; 
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Create Team</h1>
    <p class="mb-4">Dashboard / Create Team</p>
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
            <form action="team_insert.php" method="POST" id="team" enctype="multipart/form-data">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                         <h6 class="m-0 font-weight-bold text-primary">Create Team</h6>
                         <a href="view_team.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <label for="b_title">Name</label>
                        <input type="text" name="name" id="b_title" class="form-control" placeholder="Name" required />
                        <label for="b_title" class="mt-2">Profession</label>
                        <input type="text" name="profession" id="b_title" class="form-control" placeholder="Profession" required />
                        <div class="form-row mt-2"> 
                            <div class="form-group col-md-12">
                                <label for="team-file-img" class="btn btn-primary mt-2">Uploads Image</label>
                                <input type="file" name="file" id="team-file-img" class="file-control form-control" style="display: none;">
                            </div>
                            <div id="team-test-img" class="form-group col-md-6 mt-3"></div>
                        </div>
                        <label for="ban_desc">About us</label>
                        <textarea name="about_msg" id="ban_desc" cols="10" rows="5" class="form-control" placeholder="write something about yourself "></textarea>
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