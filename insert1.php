<?php

 $con = mysqli_connect('127.0.0.1','root','');
 
 if(!$con)
 {
	echo 'not connected to server'; 
 }
 
 if(!mysqli_select_db($con,'mihir'))
 {
	 echo 'Database Not Selected';	 
 }
 $Name = $_Post['username'];
 $Gender = $_Post['Gender'];
 $Email = $_Post['mail'];
 $PhoneNumber = $_Post['phone'];
 $Address = $_Post['address'];
 $CarModel = $_Post['carmodel'];
 $CarNumber = $_Post['carnumber'];
 $Appointment = $_Post['appointment'];
 $sql = "INSERT INTO Customers (Name,Gender,Email,Phonenumber,Address,CarModel,CarNumber,Appointment) VALUES('$Name','$Gender','$Email','$Phone Number','$Address','$Car Model', '$Car Number','$Appointment')";
 if(!mysqli_query($con,$sql))
  {
	 echo 'Not Inserted';
  }
 else
 {
	 echo 'Inserted';
 }
 header("refresh:2; url=index.html")
 
?>