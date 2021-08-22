<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $status_check = $obj->check_email($email);

        if($status_check->num_rows > 0){
            while($row = $status_check->fetch_object()){
                $id = $row->admin_id;
                $name = $row->admin_name;
                $db_pass = $row->admin_password;
            }
            if($db_pass === $password){
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                header('location:index.php');
            }else{
                Flash_data::error("Invalid Email or Password");
                header("location:login.php");
            }
        }else{
            Flash_data::error("Invalid Email or Password");
            header("location:login.php");
        }
    }else{
        header("location:register.php");
    }


?>