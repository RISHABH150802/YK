<?php include('server.php') ?>
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
		
	<form method="post" action="server.php">  
		
  Id: <input type="number" name="id" value="<?php echo $id;?>">
  <br><br>
		
		<div class="submit-group">
						<button type="submit" class="btn" name="submit">Submit</button>
					</div>
		</form>
</body>
</html>