<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php


if (isset($_POST['btn']))
{
	$conn = mysqli_connect("localhost:3307","root","","ex");


	$c_id = $_GET["cid"];
	$st = $_POST["status"];

	$qes="INSERT INTO agreemeent_status(client_id,agreemeent_status ) VALUES('$c_id','$st' )";
	$qry=$conn->query($qes);

	echo ("<script>location.href='view.php'</script>");

}


?>



	<form method="post">
	 <div>
	  
    <h4><i><b><u>Agreement Status</u></b></i></h4>
	  
    <label for="agreement status">Status: <span class="required">*</span></label>
	  
    <select name="status" id="status">
      <option value="pps">Profile And Proposal Sent</option>
      <option value="ppr">Profile and Proposal Revised</option>
      <option value="as">Agreement Signed</option>
		<option value="ar">Agreement Revised</option>
    </select>
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
		<input type="submit" name="btn" class="button" value="SUBMIT">
		</form>
		</center>
  
</body>
</html>