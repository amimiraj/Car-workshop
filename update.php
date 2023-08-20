<?php
require_once('db.php');

$mechanicName= $_POST['machanic_name'];
$date=$_POST['date'];
$id=$_POST['id'];





$assignd_availability_checking= "SELECT * FROM appointment_info WHERE machanic_name='$mechanicName' and date='$date' ";
$result = mysqli_query($conn, $assignd_availability_checking);
$count = mysqli_num_rows( $result );


if ($count<4) {  
    $sql="UPDATE `appointment_info` SET `machanic_name` = '$mechanicName', `date` = '$date' WHERE `appointment_info`.`id` = '$id'";
    $result = mysqli_query($conn,$sql);	  
    header("Location:admin_dashboard.php");

}else{

    echo ("<SCRIPT>
    window.alert('The mechanic is not available on that day.')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}





?>
