<?php
$conn = mysqli_connect("localhost", "root", "", "sphermanager");
$result = mysqli_query($conn, "SELECT * FROM task");

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

echo json_encode($data);
exit();
?>

<script type="text/javascript">
	// $(document).ready(function(){
	// 	$.getJSON("task.php", function(data))
	// 	 var employee_data = '';
	// 	 $.each(data, function(key, value){
	// 	 	employee_data += '<tr>';
	// 	 })
	// })
</script>