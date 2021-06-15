<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
	<?php
	
	$conn = mysqli_connect("localhost:3307","root","","ex");

	if(isset($_POST["next"]))
	{
		$c_name = $_POST["Client_name"];
		$cp_name = $_POST["contact_person_name"];
		$cp_design = $_POST["contact_person_designation"];
		$cp_number = $_POST["contact_person_number"];
		$r_percent = $_POST["r_percent"];

		$qes_check_num="Select * from master where contact_person_number = '$cp_number';";
		$qry_check_num=$conn->query($qes_check_num);
		$cnt=mysqli_num_rows($qry_check_num);
		if($cnt==0)
		{
			$qes="INSERT INTO master(Client_name,contact_person_name,contact_person_designation,contact_person_number,r_percent ) VALUES('$c_name', '$cp_name', '$cp_design', '$cp_number', '$r_percent')";
			$qry=$conn->query($qes);



			$qes_get="Select client_id from master where contact_person_number = '$cp_number';";
			$qry_get=$conn->query($qes_get);
			$res_get=$qry_get->fetch_assoc();
			$c_id = $res_get["client_id"];



			echo ("<script>location.href='form2.php?cid=$c_id'</script>");
		}
		else
		{
			echo "data is there";
		}
		

		
	}
	
	
	
	?>
	
	
	
	<form method="post">
  <div>
    <h4><i><u>Client Details</i></u></h4>
    <label for="name">Client Name: <span class="required">*</span> </label>
    <input type="text" id="name" name="Client_name" value="" placeholder="Client Name" required="required" autofocus />
	  <br>
	  <br>
	  
  </div>
  
  <div>
    <h4><i><u>Contact Person Details</i></u></h4>
    <label for="tex">Contact Person Name: <span class="required">*</span> </label>
    <input type="text" id="cpn" name="contact_person_name" value="" placeholder="Contact Person Name" required="required" />
	  <br>
	  <br>
	  <label for="tex">Contact Person Designation: <span class="required">*</span> </label>
    <input type="text" id="cpd" name="contact_person_designation" value="" placeholder="Contact Person Designation" required="required" />
	  <br>
	  <br>
	  <label for="tex">Contact Person Number: <span class="required">*</span> </label>
    <input type="int" id="cpno" name="contact_person_number" value="" placeholder="Contact Person Number" required="required" />
  </div>
		<div>
    <h4><b><i><u>Revenue Percentage</u></i></b></h4>
	   <label for="text">Revenue Percentage: <span class="required">*</span> </label>
    <input type="float" id="rp" name="r_percent" value="" placeholder="Revenue Percentage" required="required">
	  
</div>

		
<style>
      .button {
        background-color: #1c87c9;
        border: none;
        color: white;
        padding: 3px 3px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
		<center>
		 <div class="submit-group">
				<button type="submit" class="btn" name="next">NEXT</button>
		</div>
			
			</center>
		</form>
</body>
</html>