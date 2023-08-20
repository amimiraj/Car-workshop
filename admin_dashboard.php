<?php
session_start();
require_once('db.php');

if ($_SESSION['login']==true) {
    $sql = "SELECT * from `appointment_info`";
    $appointment_info = mysqli_query($conn, $sql);

}else{
    header("Location:admin.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title> CAR WORKSHOP: Admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>


<body>

    <nav style="background-color: #334756; height: 60px;" class="navbar bg-header navbar-expand-sm  fixed-top">
        <div class="container">
            <div class="collapse navbar-collapse" id="Navbar">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-link active"><a class="nav-link text-white" href="index.php"><b>Home</b></a></li>
                    <li class="nav-link"><a class="nav-link text-white" href="admin.php"><b>Admin</b></a></li>
                </ul>
                
            </div>
        </div>
    </nav>
	<header style=" background-color:black" class="jumbotron">
        <div class="container">
            <div class="row row-header">                   
                <a href="logout.php"  style="width:10%; margin-left:88%; margin-top:30px;"  type="button" class="btn btn-block btn-danger">Logout</a>
                
            </div>
        </div>
    </header>


    <!-- ====================================================================================== -->
    <div class="container">    
        <div class="row row-content">
            <div class="col-md-12 col-sm-6">

            <h2>Appointment List </h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Client Name</th>
                                <th>Phone Number</th>
                                <th>Car Registration Number</th>
                                <th>Appointment Date</th>
                                <th>Mechanic Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                while ($client = mysqli_fetch_assoc($appointment_info)) {
                                    echo "<tr>";
                                    echo "<td>".$client['name']."</td>";					
                                    echo "<td>".$client['phon_num']."</td>";
                                    echo "<td>".$client['car_licence_num']."</td>";
                                    echo "<td>".$client['date']."</td>";
                                    echo "<td>".$client['machanic_name']."</td>";

                                    echo "<td><a href=\"admin_edit.php?id=$client[id]\">Edit</a> </td>";
                                    echo "</tr>";

                                }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> 

    </div>

    <!-- ====================================================================================== -->

    <div style=" height: 600px; " > </div>



    <footer style=" background-color:black " class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-7 col-sm-5 text-white">
                    <h5>Our Office Address</h5>
                    <address>
                        Mazar-Raoad, Mirpur-1<br>
		              Dhaka-1216, Bangladesh<br>		              
		           </address>
                </div>
           </div>

           <div class="row justify-content-center">             
                <div class="col-auto" style="color:rgb(138, 134, 134); font-size:12px;">
                    <p>© Copyright 2022 MD MIRAJ HOSSAIN</p>
                </div>
           </div>
        </div>
    </footer> 

</body>
</html>