   <?php 
//   include 'php_includes/check_login_status.php';
      include 'php_includes/db.php';
        
        $name = $_POST['name'];
        $title = $_POST['msg'];
        $pidss = $_POST['pid'];
        $company_id = $_POST['company_id'];

        $msg = mysqli_real_escape_string($con, $title);

   //, `name`, `msg`, `date`, `cproject_id`
        //,'$name','$msg','$pidss'
        $query = "INSERT INTO `chat`(`ursercode`, `name`, `msg`, `cproject_id`) VALUES ('$company_id', '$name', '$msg', '$pidss')";
        
        $run = $con->query($query);
        
        if($run){
            echo "<embed loop='false' src='chat.WAV' hidden='true' autoplay='true'/>";
        } else {

            echo "error";
        }
        
     
        ?>