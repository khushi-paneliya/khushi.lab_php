<table border="1" bgcolor="lightblue">
	<tr>
		<td>Enr_no</td>
		<td>name</td>
		<td>dept</td>
	</tr>
<?php 
$con=mysqli_connect("localhost","root","","computer");
if(!$con)
{
	die("not");
}
$qry="SELECT * FROM student";

$result=mysqli_query($con,$qry);

if(mysqli_num_rows($result) >0)
{
	while ($row=mysqli_fetch_assoc($result))
   {
		echo "<tr>";
		echo "<td>" . $row['Enr_no']."</td>";
		echo "<td>" . $row['name']."</td>";
		echo "<td>" . $row['dept']."</td>";
		echo "</tr>";
	}
}
echo "</table>";
?>