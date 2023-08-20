<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title> CAR WORKSHOP || HOME</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>


<body>

	<nav style="background-color:#334756; height: 60px; " class="navbar bg-header navbar-expand-sm  fixed-top">
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

                <div style="height:100px; color:white; margin-top:10px; " class="col-12 col-sm-6">
                    <h1>car workshop</h1>
                    <p>We have professional automobile care service partners with Skilled mechanics. We are making a one-stop car care service solution because your flexibility is our main priority.</p>
                </div>
                <div class="col-12 col-sm align-self-center"></div>
                <div class="col-4 col-sm align-self-center">
                    <a href="#makeAppointment" type="button" class="btn btn-block btn-success">Make Appointment</a>                   
                </div>
                
            </div>
        </div>
    </header>



    <div class="container">    
        <div class="row row-content">
            <div class="col-md-12 col-sm-6">

                <h2>Mechanic List </h2>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Mechanic Name</th>   
                                <th></th>                              
                                <th>Free places</th>                                                      
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sadik Mohammad Omi</td>
                                <td></td>
                             
                                <td>
                                    <form action="mechanicList.php" method="POST">  
                                        <input type="hidden" name="mechanic" value="Sadik Mohammad Omi">    
                                        <button type="submit" class="btn btn-outline-secondary">view</button>
                                    </form>  
                                </td>   
                            </tr>
                            <tr>
                                <td>Ashraful Shuvon</td>
                                <td></td>
                                <td>
                                    <form action="mechanicList.php" method="POST">  
                                        <input type="hidden" name="mechanic" value="Ashraful Shuvon">  
                                        <button type="submit" class="btn btn-outline-secondary">view</button>
                                    </form>  
                                </td>
                            </tr>     
                            <tr>
                                <td>Chinmoy Mojumder</td>
                                <td></td>
                                <td>
                                    <form action="mechanicList.php" method="POST">  
                                        <input type="hidden" name="mechanic" value="Chinmoy Mojumder">  
                                        <button type="submit" class="btn btn-outline-secondary">view</button>
                                    </form>  
                                </td>
                            </tr>
                            <tr>
                                <td>Kazi Sazid Ahmed</td>
                                <td></td>
                                <td>
                                    <form action="mechanicList.php" method="POST">
                                    <input type="hidden" name="mechanic" value="Kazi Sazid Ahmed">    
                                        <button type="submit" class="btn btn-outline-secondary">view</button>
                                    </form>  
                                </td>
                            </tr>    
                            <tr>
                                <td>Sufian Leon</td>
                                <td></td>
                                <td>
                                    <form action="mechanicList.php" method="POST">
                                        <input type="hidden" name="mechanic" value="Sufian Leon">    
                                        <button type="submit" class="btn btn-outline-secondary">view</button>
                                    </form>  
                                </td>
                            </tr>                                               
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-md-12 col-sm-6">

                <h2>Timing &amp; Prices</h2>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>&nbsp;</th>
                                <th>Opening Hour</th>
                                <th>Working Days</th>
                                <th>Price(Including Vat)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Oil/oil filter changed</td>
                                <td>9am-10pm</td>
                                <td>Sunday-Thursday</td>
                                <td>100.00TK</td>
                            </tr>
                            <tr>
                                <td >Wiper blades replacement</td>
                                <td>9am-10pm</td>
                                <td>Friday-Thursday</td>
                                <td>200.00TK</td>
                            </tr>
                            <tr>
                                <td>Replace air filter</td>
                                <td>9am-10pm</td>
                                <td>Friday-Thursday</td>
                                <td>300.00TK</td>
                            </tr>
                            <tr>
                                <td>Scheduled maintenance</td>
                                <td>9am-10pm</td>
                                <td>Friday-Thursday</td>
                                <td>400.00TK</td>
                            </tr>
                            <tr>
                                <td>New tires</td>
                                <td>9am-10pm</td>
                                <td>Friday-Thursday</td>
                                <td>500.00TK</td>
                            </tr>
                            <tr>
                                <td>Battery replacement</td>
                                <td>9am-10pm</td>
                                <td>Friday-Thursday</td>
                                <td>600.00TK</td>
                            </tr>
                            <tr>
                                <td>Brake work</td>
                                <td>9am-10pm</td>
                                <td>Friday-Thursday</td>
                                <td>700.00TK</td>
                            </tr>
                            <tr>
                                <td>Antifreeze added</td>
                                <td>9am-10pm</td>
                                <td>Friday-Thursday</td>
                                <td>800.00TK</td>
                            </tr>
                            <tr>
                                <td>Engine tune-up</td>
                                <td>9am-10pm</td>
                                <td>Friday-Thursday</td>
                                <td>900.00TK</td>
                            </tr>
                            <tr>
                                <td>Wheels aligned/balanced</td>
                                <td>9am-10pm</td>
                                <td>Friday-Thursday</td>
                                <td>1000.00TK</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 

        <div class="row row-content " id="makeAppointment" align-items-center>  
            <div class="card col-12 col-sm-12 col-md-12" id="reserveform" >
                <h3 class="card-header bg-success text-white align-items-center">Make Appointment</h3>
                <div class="card-body col-12 col-sm-10 col-md-12">


                    <form action="makeappointment.php" method="POST">         
                            <div class="form-group row">
                                <label for="name" class="col-12 col-md-3 col-form-label">Name</label>                          
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="" name="name" placeholder="Full-Name" required>
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label for="phone" class="col-12 col-md-3 col-form-label">Phone Number</label>
                                <div class="col-10 col-md-9">
                                    <input type="number" class="form-control" id="" name="phon_num" placeholder="Phone Number" required>
                                </div>
                            </div>  

                            <div class="form-group row ">
                                <label for="email" class="col-12 col-md-3 col-form-label">Email</label>
                                <div class="col-10 col-md-9">
                                    <input type="email" class="form-control" id="" name="email" placeholder="Email" required>
                                </div>
                            </div>    

                            <div class="form-group row ">
                                <label for="address" class="col-12 col-md-3 col-form-label">Address</label>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="" name="address" placeholder="Address" required> 
                                </div>
                            </div>  


                            <div class="form-group row ">
                                <label for="licensenumber" class="col-12 col-md-3 col-form-label">Car-License-Number</label>
                                <div class="col-12 col-md-9">
                                    <input type="number" class="form-control" id="" name="car_licence_num" placeholder="Car License Number" required>
                                </div>
                            </div>  

                            <div class="form-group row ">
                                <label for="enginenumber" class="col-12 col-md-3 col-form-label">Car-Engine-Number</label>
                                <div class="col-12 col-md-9">
                                    <input type="number" class="form-control" id="" name="car_engine_num" placeholder="Car Engine Number" required>
                                </div>
                            </div>  

                            <div class="form-group row ">
                                <label for="mechanicname" class="col-12 col-md-3 col-form-label">Mechanic Name</label>
                                <div class="col-12 col-md-9">                                 
                                    <select class="form-control" name="machanic_name" >
                                        <option selected>Select a Machanic</option>
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
                                    <input type="date" class="form-control" id="dateandtime" name="date">
                                </div>
                            </div>

                            <div class="form-group row" style="margin-bottom:50px"></div>

                            <div class="form-group row offset-11 ">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                       
                    </form>                    

                    <div style="color:blue; margin-left:30%"><?php echo($_SESSION['appointment']); $_SESSION['appointment']='' ?></div>
                  


                </div>
            </div>
        </div>

    </div>




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