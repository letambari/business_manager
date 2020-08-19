<?php
if(isset($_POST["insert"]))

	$insert = $_POST['insert'];
  echo $insert;
  exit();
{
	$conn = mysqli_connect("localhost", "root", "", "tut");
	$query = "INSERT INTO checkbox(name) VALUES ('".$_POST["insert"]."')";
	$result = mysqli_query($conn, $query);
	echo "Data Inserted Successfully!";
}
?>