<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection to the Database failed due to " . mysqli_connect_error());
}
else{
     echo "Successfully connected to the Database";
 }
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=$_POST['message'];

$sql="INSERT INTO `food`.`food1` (`name`, `email`, `contact`, `message`, `datetime`) VALUES ('$name','$email',
'$contact','$message',current_timestamp());";
// echo $sql;
// $rs = mysqli_query($con, $sql);
if($con->query($sql) == true){
    echo "Inserted Successfully";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
?>