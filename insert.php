<?php include('server.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form method="post" action="server.php">
	<?php include('errors.php'); ?>
  <div>
    <h4><i><u>Client Details</i></u></h4>
	  <label for="int">Client ID: <span class="required">*</span> </label>
    <input type="text" id="CID" name="client_id" value="" placeholder="Client ID" required="required" autofocus />
	  <br>
	  <br>
    <label for="name">Client Name: <span class="required">*</span> </label>
    <input type="text" id="name" name="Client_name" value="" placeholder="Client Name" required="required" autofocus />
	  
	  
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
	  <label for="tex">Contact Person Nunber: <span class="required">*</span> </label>
    <input type="int" id="cpno" name="contact_person_number" value="" placeholder="Contact Person Number" required="required" />
  </div>
  </div>
  </div>
  
  <div>
    <h4><u><i>Open Position</u></i></h4>
    <label for="text">Position Title: <span class="required">*</span> </label>
    <input type="text" id="pt" name="position_title" value="" placeholder="Position Title" required="required" />
	  <br>
	  <br>
	   <label for="text">Salary: <span class="required">*</span> </label>
    <input type="float" id="pt" name="salary" value="" placeholder="Salary" required="required" />
	  <br>
	  <br>
	   <label for="text">Location: <span class="required">*</span> </label>
    <input type="text" id="lo" name="location" value="" placeholder="Location" required="required" />
	  <br>
	  <br>
	   <label for="text">Experience: <span class="required">*</span> </label>
    <input type="float" id="ex" name="experience" value="" placeholder="Experience(in years)" required="required" />
	  <br>
	  <br>

  </div>
	
	
	<div ><b><i><u>
    Position Status
		</b>
		</i>
		</u>
		<br>
		<br>
		
		<label for="text">Position ID: <span class="required">*</span> </label>
    <input type="int" id="pid" name="pid" value="" placeholder="Position ID" required="required" />
		<br>
		<br>
		<label for="text">Client ID: <span class="required">*</span> </label>
    <input type="int" id="cid" name="cid" value="" placeholder="Client ID" required="required" />
		<br>
		<br>
		<div class="input-group" id="radiobtn">
    <label for="op">Open Position</label>
    <input type="radio" name="position_status" id="op" tabindex="10" value="open-position">
		<br>
		<br>
		<label for="poh">Position On Hold</label>
    <input type="radio" name="position_status" id="poh" tabindex="10" value="position-on-hold">
		<br>
		<br>
	<label for="pc">Position Closed</label>
    <input type="radio" name="position_status" id="pc" tabindex="10" value="position-closed">
		<br>
		</div>
  </div>
  
  <div>
	  
    <h4><i><b><u>Agreement Status</i></b></u></h4>
	  
    <label for="agreement status">Status: <span class="required">*</span></label>
	  
    <select id="status" name="agreemeent_status">
      <option value="pps">Profile And Proposal Sent</option>
      <option value="ppr">Profile and Proposal Revised</option>
      <option value="as">Agreement Signed</option>
		<option value="ar">Agreement Revised</option>
    </select>
	  <br>
	  <br>
	  <label for="text">Client ID: <span class="required">*</span> </label>
    <input type="int" id="cid" name="cid" value="" placeholder="Client ID" required="required" />
	  <br>
	  <br>
	  <label for="text">Agreement ID: <span class="required">*</span> </label>
    <input type="int" id="aid" name="aid" value="" placeholder="Agreement ID" required="required" />
  </div>
  
  <div>
    <h4><b><i><u>Revenue Percentage</u></i></b></h4>
	   <label for="text">Revenue Percentage: <span class="required">*</span> </label>
    <input type="float" id="rp" name="rp" value="" placeholder="Revenue Percentage" required="required" />
	  <br>
	  <br>
	  <label for="text">Client ID: <span class="required">*</span> </label>
    <input type="int" id="cid" name="cid" value="" placeholder="Client ID" required="required" />
</div>
  
  <div>
    <h4><b><i><u>Payment Terms</u></i></b></h4>
    <label for="text">Payment: <span class="required">*</span> </label>
    <input type="int" id="pay" name="pay" value="" placeholder="In Days Or Months" required="required" />
  </div>
  
  <div>
    <h4><i><u><b>CV Ownership</b></u></i></h4>
     <label for="text">CV Ownership: <span class="required">*</span> </label>
    <input type="int" id="cvo" name="cvo" value="" placeholder="In Days Or Months" required="required" />
  </div>
	
	 <div>
    <h4><i><u><b>Replacement Validity</b></u></i></h4>
     <label for="text">Relpacement Validity: <span class="required">*</span> </label>
    <input type="int" id="rv" name="rv" value="" placeholder="In Days" required="required" />
  </div>
  <br>
  <div class="submit-group">
	  <button type="submit" class="btn" name="insert">Insert</button>
</div>	  
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