<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

if(isset($_POST['next']))
{
	$conn = mysqli_connect("localhost:3307","root","","ex");

	$client_id= $_GET["cid"];
	$p_title = $_POST["position_title"];
	$salary = $_POST["salary"];
	$location = $_POST["location"];
	$experience = $_POST["experience"];
	$position_status = $_POST["position_status"];


	// echo $p_title." ".$location;
	$qes="INSERT INTO open_positions(client_id,position_title,salary,location,experience,position_status ) VALUES('$client_id', '$p_title', '$salary', '$location', '$experience','$position_status')";
	$qry=$conn->query($qes);

			echo ("<script>location.href='form3.php?cid=$client_id'</script>");

}



?>



	<form method="post">
	<div>
    <h4><u><i>Open Position</i></u></h4>
		
    <label for="text">Position Title: <span class="required">*</span> </label>
    <input type="text" name="position_title" placeholder="Position Title" required="required">
	  <br>
	  <br>
	   <label for="text">Salary: <span class="required">*</span> </label>
    <input type="text" name="salary" placeholder="Salary" required="required">
	  <br>
	  <br>
	   <label for="text">Location: <span class="required">*</span> </label>
    <input type="text" name="location" placeholder="Location" required="required">
	  <br>
	  <br>
	   <label for="text">Experience: <span class="required">*</span> </label>
    <input type="text" name="experience" placeholder="Experience(in years)" required="required">
	  <br>
	  <br>

  </div>
	
	
	<div class="input-group" id="radiobtn"><b><i><u>
    Position Status
		</u></i></b><i><u>
		</u></i><u>
		</u>
		<br>
		<br>
    <label for="op">Open Position</label>
    <input name="position_status" type="radio" id="" tabindex="10" value="open-position">
		<br>
		<br>
		<label for="poh">Position On Hold</label>
    <input name="position_status" type="radio" id="" tabindex="10" value="position-on-hold">
		<br>
		<br>
	<label for="pc">Position Closed</label>
    <input name="position_status" type="radio" id="" tabindex="10" value="position-closed">
		<br>
		
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


<script>
function disableTxt() {
  document.getElementById("radiobtn").disabled = true;
}

function undisableTxt() {
  document.getElementById(element).disabled = false;
}
</script>