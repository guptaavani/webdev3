<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Rnumber = $_POST['Rnumber'];
$Course = $_POST['Course'];
$Branch = $_POST['Branch'];
$Bday = $_POST['Bday'];
$Bmonth = $_POST['Bmonth'];
$Byear = $_POST['Byear'];
$Email = $_POST['Email'];
$Mobile_Number = $_POST['Mobile_Number'];
$Gender = $_POST['Gender'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];
$State = $_POST['State'];
$Afor = $_POST['Afor'];
$Reason = $_POST['Reason'];
if (!empty($Fname) || !empty($Lname) || !empty($Rnumber) || !empty($Course) || !empty($Branch) || !empty($Bday) || !empty($Bmonth) || !empty($Byear) || !empty($Email) || !empty($Mobile_Number) || !empty($Gender) || !empty($Address) || !empty($City) || !empty($Pincode) || !empty($State) ||  !empty($Afor)|| !empty($reason)){
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "form";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
} else {
 echo "All field are required";
 die();
}
?>