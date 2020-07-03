<?php
session_start();
header('location:index.php');
$con=mysqli_connect('Localhost','root','1TIgux950');
mysqli_select_db($con,'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s="SELECT * from usertable where name='$name'";
$result= mysqli_query($con , $s);
$num= mysqli_num_rows($result);
if($num == 1){
	echo "Username already taken";
}
else{
	$reg="insert into usertable(name , password ) values('$name' , '$pass') ";
	mysqli_query($con,$reg);
	echo "Registration succeesfull";
}




?>