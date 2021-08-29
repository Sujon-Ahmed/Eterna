<?php 
    include 'header.php'; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $message = $obj->get_contact_msg($id);
        if($message->num_rows > 0){
            while($row = $message->fetch_object()){
                $email = $row->msg_email;
                $msg = $row->msg_message;
            }
        }
        
    }


?>

<div class="container-fluid mb-5">

    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Contact Message</h1>
    <p class="mb-4">Dashboard / View / Message</p>

    <!-- Content Row -->
    <div class="row">

        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">

        <!-- DataTales Example -->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <div class="d-flex justify-content-lg-between">
                    <div> <h6 class="m-0 font-weight-bold text-primary">Message Details</h6></div>
                    <div><a href="view_msg.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                </div>
               
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div class="col-md-8"> 
                        <h5 class="text-primary"><?php echo $email; ?></h5>
                        <p><?php echo $msg; ?></p>
                    </div>
                </div>
            </div>
        </div>

        </div>
    <!-- /.container-fluid -->

    </div>

</div>
<?php include 'footer.php'; ?>