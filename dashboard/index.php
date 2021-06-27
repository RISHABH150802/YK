<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<form method="post">
    
    <input type="text" name="search">
    <input type="submit" name="btn" value="search">

</form>

<?php
/*
if (isset($_POST["btn"]))
{*/
    ?>

    <center>
        <table border="1">
            
            <tr>
                <td>1</td>
                <td>1</td>
            </tr>

            <tr>
                <td>2</td>
                <td>2</td>
            </tr>

        </table>
    </center>

    <?php
/*}*/

?>

</body>
</html> -->







<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="border-color: var(--bs-red);background: var(--bs-dark);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div><img src="assets/img/IMG-20210604-WA0000%20(1)%20(2).jpg">
                    <div class="sidebar-brand-text mx-3"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="table.html"><i class="fas fa-table"></i><span>View Details</span></a></li>
                    <!--<li class="nav-item"><a class="nav-link" href="login.html"><i class="far fa-user-circle"></i><span>Login</span></a></li> -->
                    <li class="nav-item"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Client Register</span></a></li>
                </ul>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
                </div>
                <h3 class="text-dark mb-0"><center>WELCOME !!!</center></h3>

               

<form method="post">
    
    <input type="text" name="search">
    <input type="submit" name="btn" value="search">
    <input type="submit" name="btn2" value="insert">

</form>
<center>


<?php
$conn = mysqli_connect("localhost:3307","root","","ex");

$search="";


if (isset($_POST["btn"]))
{
    $search=$_POST['search'];
    $qes="select m.*, o.*, a.* from master m, open_positions o, agreemeent_status a where m.client_name LIKE'$search' and m.client_id=o.client_id and m.client_id=a.client_id;";

$qry=$conn->query($qes);
while($res=$qry->fetch_assoc())
{
?>
<table border="1|1">
        <tr>
            <th>Client Name</th>
            <th>Person Name</th>   
            <th>Designation</th>
            <th>Number</th>
            <th>Percent</th>
            <th>title</th>
            <th>Salary</th>
            <th>Location</th>
            <th>Experience</th>
            <th>Position Status</th>
            <th>Agreemeent Status</th>

        </tr>

        <tr>

    <td><?php echo $res["Client_name"];?></td>
            <td><?php echo $res["contact_person_name"];?></td>
            <td><?php echo $res["contact_person_designation"];?></td>
            <td><?php echo $res["contact_person_number"];?></td>
            <td><?php echo $res["r_percent"];?></td>
            <td><?php echo $res["position_title"];?></td>
            <td><?php echo $res["salary"];?></td>
            <td><?php echo $res["location"];?></td>
            <td><?php echo $res["experience"];?></td>
            <td><?php echo $res["position_status"];?></td>
            <td><?php echo $res["agreemeent_status"];?></td>

<?php
}
}


if (isset($_POST['btn2'])) {
    echo ("<script>location.href='../form1.php'</script>");
}

?>
</center>


            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>