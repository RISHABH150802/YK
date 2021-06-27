	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
.error {color: #FF0000;}
</style>
</head>

<body>
		
	<table border="1">
		<tr>
			<th></th>
			<th></th>	
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>

		</tr>

		<tr>
<?php
	$conn = mysqli_connect("localhost:3306","root","","ex");

	$qes="Select * from master;";
	$qry=$conn->query($qes);
	while($res=$qry->fetch_assoc())
	{
		$c_id = $res["client_id"];
		$qes_f2="Select * from open_positions where client_id = '$c_id';";
		$qry_f2=$conn->query($qes_f2);
		$res_f2=$qry_f2->fetch_assoc();

		$qes_f3="Select * from agreemeent_status where client_id = '$c_id';";
		$qry_f3=$conn->query($qes_f3);
		$res_f3=$qry_f3->fetch_assoc();
?>

			<td><?php echo $res["Client_name"];?></td>
			<td><?php echo $res["contact_person_name"];?></td>
			<td><?php echo $res["contact_person_designation"];?></td>
			<td><?php echo $res["contact_person_number"];?></td>
			<td><?php echo $res["r_percent"];?></td>

			<td><?php echo $res_f2["position_title"];?></td>
			<td><?php echo $res_f2["salary"];?></td>
			<td><?php echo $res_f2["location"];?></td>
			<td><?php echo $res_f2["experience"];?></td>
			<td><?php echo $res_f2["position_status"];?></td>


			<td><?php echo $res_f3["agreemeent_status"];?></td>
<?php
	}

?>
		
			
		</tr>


	</table>
  
</body>
</html>