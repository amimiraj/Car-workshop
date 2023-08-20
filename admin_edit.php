<?php 
session_start();
require_once('db.php');

$client_id = $_GET['id'];

$sql = "SELECT * FROM `appointment_info` WHERE id =$client_id ";
$info = mysqli_query($conn, $sql);
$client = mysqli_fetch_assoc($info);

?>
 
<!DOCTYPE html>
<html>
<head>
    <title> CAR WORKSHOP: Edit</title>
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

    <header style=" background-color: black; height:150px;" > </header>



 <!-- ====================================================================================== -->
    <div class="container">    


        <div class="row row-content " id="makeAppointment" align-items-center>       
            <div class="card col-12 col-sm-12 col-md-12" id="reserveform" >
                <h3 class="card-header bg-success text-white align-items-center">Make Appointment</h3>
                <div class="card-body col-12 col-sm-10 col-md-12">

                    <form action="update.php" method="POST">
          
                            <div class="form-group row">
                                <label for="name" class="col-12 col-md-3 col-form-label">Name</label>                          
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="" name="name" placeholder="Full-Name" value="<?php echo $client['name'];?>"  readonly>
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label for="phoneandaddress" class="col-12 col-md-3 col-form-label">Phone Number</label>
                                <div class="col-10 col-md-9">
                                    <input type="number" class="form-control" id="" name="phon_num" placeholder="Phone Number" value="<?php echo $client['phon_num'];?>"  readonly>
                                </div>
                            </div>  

                            <div class="form-group row ">
                                <label for="phoneandaddress" class="col-12 col-md-3 col-form-label">Email</label>
                                <div class="col-10 col-md-9">
                                    <input type="email" class="form-control" id="" name="email" placeholder="Email" value="<?php echo $client['email'];?>"  readonly>
                                </div>
                            </div>    

                            <div class="form-group row ">
                                <label for="phoneandaddress" class="col-12 col-md-3 col-form-label">Address</label>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="" name="address" placeholder="Address" value="<?php echo $client['address'];?>"  readonly>
                                </div>
                            </div>  


                            <div class="form-group row ">
                                <label for="phoneandaddress" class="col-12 col-md-3 col-form-label">Car-License-Number</label>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="" name="car_licence_num" placeholder="Car-License-Number" value="<?php echo $client['car_licence_num'];?>"  readonly>
                                </div>
                            </div>  

                            <div class="form-group row ">
                                <label for="phoneandaddress" class="col-12 col-md-3 col-form-label">Car-Engine-Number</label>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="" name="car_engine_num" placeholder="Car-Engine-Number" value="<?php echo $client['car_engine_num'];?>"  readonly>
                                </div>
                            </div>  

                            <div class="form-group row ">
                                <label for="phoneandaddress" class="col-12 col-md-3 col-form-label">Mechanic-Name</label>
                                <div class="col-12 col-md-9">                                 
                                    <select class="form-control" name="machanic_name" >
                                        <option selected><?php echo $client['machanic_name'];?></option>
                                        <option value="Sadik Mohammad Omi">Sadik Mohammad Omi</option>
                                        <option value="Ashraful Shuvon">Ashraful Shuvon</option>
                                        <option value="Chinmoy Mojumder">Chinmoy Mojumder</option>
                                        <option value="Kazi Sazid Ahmed">Kazi Sazid Ahmed</option>
                                        <option value="Sufian Leon">Sufian Leon</option>
                                    </select>

                                </div>
                            </div>  
                            
                            <div class="form-group row">
                                <label for="dateandtime" class="col-12 col-md-3 col-form-label">Appointment Date</label>
                                <div class="col-8 col-md-9">
                                    <input type="date" class="form-control" id="dateandtime" name="date" value="<?php echo $client['date'];?>">
                                </div>
                            </div>

                            <input type="hidden" name="id"  value="<?php echo $client['id'];?>"  >

                            <div class="form-group row" style="margin-bottom:50px"></div>

                            <div class="form-group row offset-11 ">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                       
                    </form>

                </div>
            </div>
        </div>

    </div>

</body>
</html>