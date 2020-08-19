<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "sphermanager");
$query = "SELECT * FROM invoice";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["invoice_date"]."', profit:".$row["order_total_amount_due"].", purchase:".$row["grand_total"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);

?>