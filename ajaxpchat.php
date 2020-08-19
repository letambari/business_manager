   <?php 
//   include 'php_includes/check_login_status.php';
      include 'php_includes/db_conx.php';
     
   // date_time   
        $s_company_id = $_POST['s_company_id'];
        $r_company_id = $_POST['r_company_id'];
        $sender_id = $_POST['sender_id'];
        $sender_fullname = $_POST['sender_fullname'];
        $reciever_id = $_POST['reciever_id'];
        $title = $_POST['msg'];
      // $msg = $_POST['msg'];
        $msg = mysqli_real_escape_string($db_conx, $title);

        // echo $msg;
        // exit();
       // $sender_fullname = $_POST['sender_fullname'];

   //, `name`, `msg`, `date`, `cproject_id`
        //,'$name','$msg','$pidss'
        // $query = "INSERT INTO `direct_messages`(`s_company_id`, `r_company_id`, `sender_id`, `sender_fullname`, `reciever_id`, `message`,`date_time`) VALUES ('$s_company_id','$r_company_id','$sender_id','$sender_fullname','$reciever_id','$msg',NOW())";

           $query = "INSERT INTO `chat_msg`(`sender_id`, `sender_fullname`, `s_company_id`, `r_company_id`, `reciever_id`, `msg`, `date_time`) VALUES ('$sender_id', '$sender_fullname','$s_company_id', '$r_company_id', '$reciever_id', '$msg', NOW()) ";
        
        $run = $db_conx->query($query);
        
         if($run){
             echo "<embed loop='false' src='chat.WAV' hidden='true' autoplay='true'/>";
         } else {

             echo "error";
         }
        
     //, `sender_fullname`, `s_company_id`, `r_company_id`, `reciever_id`, `msg`, 'status', `date_time`
        //,'$sender_fullname','$s_company_id','$r_company_id', '$reciever_id', '$msg', '1', NOW()
        ?>