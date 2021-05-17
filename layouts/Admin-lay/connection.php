<?php
//$con=mysqli_connect("127.0.0.1","root","","appzforetell");
$con = mysqli_connect('localhost','root','','vvportal');
if($con){
	echo "Connected Successfully";
}else{
	echo "Not Connected Successfully";
}
?>