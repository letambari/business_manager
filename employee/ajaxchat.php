   <?php 
  // include 'php_includes/check_login_status.php';
      include 'db.php';
        
        $name = $_POST['name'];
        $title = $_POST['msg'];
        $pidss = $_POST['pid'];
        $company_id = $_POST['company_id'];
        $username = $_POST['username'];
        
        $msg = mysqli_real_escape_string($con, $title);
        // echo $msg;
        // exit();

   //, `name`, `msg`, `date`, `cproject_id`
        //,'$name','$msg','$pidss'
        $query = "INSERT INTO `chat` (`ursercode`, `username`, `name`, `msg`, `cproject_id`) VALUES ('$company_id', '$username', '$name', '$msg', '$pidss')";
        
        $run = mysqli_query($con, $query);
        
        if($run){
            echo "<embed loop='false' src='chat.WAV' hidden='true' autoplay='true'/>";
        } else {

            echo "error";
        }
        
     
        ?>