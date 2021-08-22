<?php 

    include 'header.php'; 
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $description = $obj->get_desc_with_author_id($id);
        if($description->num_rows > 0){
            while($view = $description->fetch_object()){
                $desc = $view->client_desc;
                $author = $view->admin_name;
            }
        }
    }


?>

<div class="container-fluid mb-5">

    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Clients Description</h1>
    <p class="mb-4">Dashboard / View / Description Details</p>

    <!-- Content Row -->
    <div class="row">

        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">

        <!-- DataTales Example -->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <div class="d-flex justify-content-lg-between">
                    <div> <h6 class="m-0 font-weight-bold text-primary">Description Details</h6></div>
                    <div><a href="view_desc.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                </div>
               
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div class="col-md-8"> 
                        <?php
                            if(!empty($desc)){
                                echo $desc;
                            }else{
                                echo "";
                            }
                        ?>
                        <br>
                        <cite>___ <?php echo $author; ?></cite>
                    </div>
                </div>
            </div>
        </div>

        </div>
    <!-- /.container-fluid -->

    </div>

</div>
<?php include 'footer.php'; ?>