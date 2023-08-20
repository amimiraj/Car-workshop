<?php
require_once('db.php');

$mechanic_name = $_POST['mechanic'];

$client_free_place= "SELECT machanic_name,date,COUNT(date) FROM `appointment_info`  WHERE machanic_name='$mechanic_name' GROUP by date";
$result3 = mysqli_query($conn, $client_free_place);

?>

<!DOCTYPE html>
<html>
<head>
    <title> CAR WORKSHOP</title>
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


    <div class="container">    
        <div class="row row-content">
            <div class="col-md-12 col-sm-6">

            <h2><?php echo $mechanic_name;?> </h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Date</th>
                                <th>Availability (Free places)</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                while ($client = mysqli_fetch_assoc($result3)) {
                                    echo "<tr>";
                                    echo "<td>".$client['date']."</td>";					
                                    echo "<td>".(4-$client['COUNT(date)'])."</td>";
                                }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>

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