<?php
include_once("php_includes/check_login_status.php");
if($user_ok != true){
    header("location: login.php");
    exit();
}

?>
<?php 
// After uploading to online server, change this connection accordingly
include 'php_includes/db_conx.php';

 
$ContactPerson = $_POST['ContactPerson'];
$address = $_POST['address'];
$city = $_POST['city'];
$state_province = $_POST['state_province'];
$username = $_POST['username'];
$email = $_POST['email'];
// $password = $_POST['password'];
$CompanyName = $_POST['CompanyName'];
$website = $_POST['website'];
$country = $_POST['country'];
$PostalCode = $_POST['PostalCode'];
$phone = $_POST['phone'];
$ALTphone = $_POST['ALTphone'];

// $userlevel = $_POST['userlevel'];
// $avatar = $_POST['avatar'];
// $ip = $_POST['ip'];
// $signup = $_POST['signup'];
// $lastlogin = $_POST['lastlogin'];
// $notescheck = $_POST['notescheck'];
// $activated = $_POST['activated'];
// $service = $_POST['service'];



// $sql = "SELECT * FROM users WHERE company_id = '$log_username' AND user_id = '$log_id'";
// $query = mysqli_query($db_conx, $sql);
// $count_employee = mysqli_num_rows($query);

// while ($row = mysqli_fetch_array($query)) {
// 	# code...
// 	$e_email = $row['c_email'];
// 	$e_phone = $row['c_phone'];

// }

// echo $count_employee;

// if ($e_email == $email || $e_phone == $phone) {
// 	# code...
// 	echo "this Client details already exists";
// } else{

	$sql = "UPDATE users SET ContactPerson = '$ContactPerson', address = '$address', city = '$city', state_province = '$state_province', username = '$username', email = '$email', CompanyName = '$CompanyName', website = '$website', country = '$country', PostalCode = '$PostalCode', phone = '$phone', ALTphone = '$ALTphone'";

	$query = mysqli_query($db_conx, $sql);
	if ($query) {
		# code...
		echo "Company Account Updated!";
	}else{

		echo "error";
	}
// }

// if ($query == TRUE) {
	
// 	$sql = "SELECT * FROM videos WHERE id = '$id'";
// 	$query = mysqli_query($con, $sql);
// 	while ($row = mysqli_fetch_array($query)) {
		
// 		$id = $row['id'];
// 		$title = $row['title'];
      
// 	echo '<p><a href="add_category.php">'.$title.' Uploaded, add another video.</p>';
// } 
// }else{
// 	echo "error";
// }

?>

