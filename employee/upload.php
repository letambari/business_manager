<!-- 
<?php 
/*
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbName     = "sphermanager"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}

?>


<?php 
$uploadDir = 'test_uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['file'])){ 
    // Get the submitted form data 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
     
    // Check whether submitted data is not empty 
    if(!empty($name) && !empty($email)){ 
        // Validate email 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
            $response['message'] = 'Please enter a valid email.'; 
        }else{ 
            $uploadStatus = 1; 
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["name"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
            } 
             
            if($uploadStatus == 1){ 
                // Include the database config file 
                include_once 'dbConfig.php'; 
                 
                // Insert form data in the database 
                $insert = $db->query("INSERT INTO form_data (name,email,file_name) VALUES ('".$name."','".$email."','".$uploadedFile."')"); 
                 
                if($insert){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully!'; 
                } 
            } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
    } 
} 
 
// Return response 
echo json_encode($response); -->
*/
?>
-->

<?php
 include 'php_includes/db_conx.php';
$img_info = '';
if(!empty($_FILES['images']) && isset($_POST['s_company_id']) && isset($_POST['r_company_id']) && isset($_POST['sender_id']) && isset($_POST['sender_fullname']) && isset($_POST['reciever_id'])){
    // File upload configuration
        $s_company_id = $_POST['s_company_id'];
        $r_company_id = $_POST['r_company_id'];
        $sender_id = $_POST['sender_id'];
        $sender_fullname = $_POST['sender_fullname'];
        $reciever_id = $_POST['reciever_id'];
        $title = $_POST['msg'];
      // $msg = $_POST['msg'];
        $msg = mysqli_real_escape_string($db_conx, $title);

    // echo $msg;//
    // exit();
     $targetDir = "test_uploads/";
    $allowTypes = array('jpg','png','jpeg','gif','csv','sql','pdf','docx','xls','xlsx');
    
    $images_arr = array();
    foreach($_FILES['images']['name'] as $key=>$val){
        $image_name = $_FILES['images']['name'][$key];
        $tmp_name   = $_FILES['images']['tmp_name'][$key];
        $size       = $_FILES['images']['size'][$key];
        $type       = $_FILES['images']['type'][$key];
        $error      = $_FILES['images']['error'][$key];
        

        // File upload path
        $fileName = basename($_FILES['images']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){    
            // Store images on the server
            if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$targetFilePath)){
                $images_arr[] = $targetFilePath;
//
               $query = "INSERT INTO `chat_msg`(`sender_id`, `sender_fullname`, `s_company_id`, `r_company_id`, `reciever_id`, `msg`, `file`, `fileSize`, `fileType`, `date_time`) VALUES ('$sender_id', '$sender_fullname','$s_company_id', '$r_company_id', '$reciever_id', '$msg', '$image_name', '$size', '$type', NOW()) ";
 //      
        $run = $db_conx->query($query);

            }
        }
    }
    
    // Generate gallery view of the images
    if(!empty($images_arr)){ ?>
        <ul>
        <?php foreach($images_arr as $image_src){ ?>
            <li><img width="182" height="137" alt="" src="<?php echo $image_src; ?>"> 
             </li>

        <?php } ?>
        </ul>
    <?php }
}
?>

<?php

// $images_arr = array();
// foreach($_FILES['images']['name'] as $key=>$val){
//     $image_name = $_FILES['images']['name'][$key];
//     $tmp_name   = $_FILES['images']['tmp_name'][$key];
//     $size       = $_FILES['images']['size'][$key];
//     $type       = $_FILES['images']['type'][$key];
//     $error      = $_FILES['images']['error'][$key];
    

//     // File upload path
//     $fileName = basename($_FILES['images']['name'][$key]);
//     $targetFilePath = $targetDir . $fileName;
    

//     // Check whether file type is valid
//     $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
//     if(in_array($fileType, $allowTypes)){    
//         // Display images without storing in the server
//         $img_info = getimagesize($_FILES['images']['tmp_name'][$key]);
//         $images_arr[] = "data:".$img_info["mime"].";base64,".base64_encode(file_get_contents($_FILES['images']['tmp_name'][$key]));
//     }
// }

?>