<?php 
session_start();
require_once('db.php');

$name=$_POST['name'];
$phon_num=$_POST['phon_num'];
$email=$_POST['email'];
$address=$_POST['address'];
$car_licence_num=$_POST['car_licence_num'];
$car_engine_num=$_POST['car_engine_num'];
$machanic_name=$_POST['machanic_name'];
$date=$_POST['date'];


$assignd_availability_checking= "SELECT * FROM appointment_info WHERE machanic_name='$machanic_name' and date='$date' ";
$result = mysqli_query($conn, $assignd_availability_checking);
$count_ap = mysqli_num_rows( $result );

$another_appointment_checking="SELECT * FROM appointment_info WHERE car_engine_num='$car_engine_num' and date='$date' ";
$result2 = mysqli_query($conn, $another_appointment_checking);
$count = mysqli_num_rows( $result2);



if ($count==0) {
    if ($count_ap<4) {
    
        $sql="INSERT INTO `appointment_info`(`name`, `phon_num`, `email`, `address`, `car_licence_num`, `car_engine_num`, `machanic_name`, `date`) VALUES ('$name','$phon_num','$email','$address','$car_licence_num','$car_engine_num','$machanic_name','$date')"; 
        $reg_q = mysqli_query($conn, $sql);
    
        if(($reg_q) == 1){
            $_SESSION['appointment']='Assigned Successfull';
            header("Location:index.php#makeAppointment");
        }
        else{
            echo ("<SCRIPT>
            window.alert('Failed to Assign')
            window.location.href='javascript:history.go(-1)';
            </SCRIPT>");
        }
    
    }else{
        echo ("<SCRIPT>
        window.alert('The mechanic is not available on that day')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
    }
}else{
    echo ("<SCRIPT>
    window.alert('You already taken an appointment on that date.')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>