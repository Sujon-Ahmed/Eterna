<?php
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
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">View Details Team</h1>
    <p class="mb-4">Dashboard / Team / Details</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
        <!-- DataTales Example -->
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-lg-between">
                        <div> <h6 class="m-0 font-weight-bold text-primary">Testimonials Details</h6></div>
                        <div><a href="view_team.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="col-md-4">
                            <h5 class="mb-3 text-primary">Image</h5>
                            <img class="img-fluid" src="<?php echo 'uploads/team/'.$image; ?>" width="200" height="auto" alt="">
                        </div>
                        <div class="col-md-8"> 
                            <h5 class="mb-3 text-primary">Name</h5>
                            <strong><?php echo $name; ?></strong>
                            <h5 class="mb-2 text-primary mt-2">Profession</h5>
                            <p><?php echo $profession; ?></p>
                            <h5 class="mb-2 text-primary mt-2">About</h5>
                            <i><?php echo $about; ?></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
    </div>
</div>
<?php include 'footer.php'; ?>