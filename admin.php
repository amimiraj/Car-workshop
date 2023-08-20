<?php
session_start();

if ($_SESSION['login']==true) {
    header("Location:admin_dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> CAR WORKSHOP||LOGIN</title>
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

    <header style=" background-color: black; height:250px;" > </header>



    <div class="container">
        <div class="row row-content ">
            <div class="col-12 col-md-12 ">

                <form action="aprocess.php" method="POST">
                    <div class="form-group row">                    
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="firstname" name="user_name" placeholder="User Name">
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="lastname" name="password" placeholder="Password">
                        </div>
                    </div>
  
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>

            </div>
       </div>
    </div>


    <div style=" height:100px;" > </div>

    
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