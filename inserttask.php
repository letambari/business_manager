<?php

if(isset($_POST["insert"]))

	$insert = $_POST['insert'];
	$pid = $_POST['pid'];
	$userID = $_POST['user_ids'];
	$companyID = $_POST['company_id'];
	$leader_id = $_POST['leader_id'];


 // echo $insert.'<br />'.$pid;
//   exit();
// {
// 	$conn = mysqli_connect("localhost", "root", "", "tut");
// 	$query = "INSERT INTO checkbox(name) VALUES ('".$_POST["insert"]."')";
// 	$result = mysqli_query($conn, $query);
// 	echo "Data Inserted Successfully!";
// }
$superherosting = $insert;
$superheroarray = explode(',', $superherosting);
// echo $superheroarray;

  for ($i = 0; $i < count($superheroarray); $i++) {

  	//echo $superheroarray[$i];

  	$conn = mysqli_connect("localhost", "root", "", "sphermanager");
	$query = "INSERT INTO projectteam(project_id, leader_id, employee_id, user_id, company_id) VALUES ('".$pid."', '".$leader_id."', '".$superheroarray[$i]."', '".$userID."', '".$companyID."')";
	$result = mysqli_query($conn, $query);
	echo "Data Inserted Successfully!";
//exit();
		// $put = "INSERT INTO invoice_order_item (invoicenumber, itemname, item_desc, order_item_price, order_item_quantity, order_item_final_amount) 

		// 	VALUES ('".$item."', '".$_POST['productCode'][$i]."', '".$_POST['productName'][$i]."', '".$_POST['price'][$i]."', '".$_POST['quantity'][$i]."', '".$_POST['total'][$i]."')";			
		// 	$dput = mysqli_query($db_conx, $put);

}
?>