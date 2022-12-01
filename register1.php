<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "register1");
 
// Check connection
if($link==false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}
 
// Escape user inputs for security
$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$relationship = mysqli_real_escape_string($link, $_REQUEST['relationship']);
$guardian = mysqli_real_escape_string($link, $_REQUEST['guardian']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobilenumber = mysqli_real_escape_string($link, $_REQUEST['mobilenumber']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$farmertype = mysqli_real_escape_string($link, $_REQUEST['farmertype']);
$occupation = mysqli_real_escape_string($link, $_REQUEST['occupation']);
$idnumber = mysqli_real_escape_string($link, $_REQUEST['idnumber']);
$ifsccode = mysqli_real_escape_string($link, $_REQUEST['ifsccode']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$district = mysqli_real_escape_string($link, $_REQUEST['district']);
$bankname = mysqli_real_escape_string($link, $_REQUEST['bankname']);
$bankbranchnumber = mysqli_real_escape_string($link, $_REQUEST['bankbranchnumber']);
$savings = mysqli_real_escape_string($link, $_REQUEST['savings']);
$confirms = mysqli_real_escape_string($link, $_REQUEST['confirms']);
$pincode = mysqli_real_escape_string($link, $_REQUEST['pincode']);
$address2 = mysqli_real_escape_string($link, $_REQUEST['address2']);
$subdistrict = mysqli_real_escape_string($link, $_REQUEST['subdistrict']);
$village = mysqli_real_escape_string($link, $_REQUEST['village']);
// Attempt insert query execution
$sql = "INSERT INTO formdata(fullname,relationship,guardian,email,mobilenumber,age,gender,farmertype,occupation,idnumber,ifsccode,state,district,bankname,bankbranchnumber,savings,confirms,pincode,address2,subdistrict,village) VALUES ('$fullname', '$relationship', '$guardian','$email',,'$mobilenumber',,'$age',,'$gender',,'$farmertype',,'$occupation',,'$idnumber',,'$ifsccode',,'$state',,'$district',,'$bankname',,'$bankbranchnumber',,'$savings',,'$confirms',,'$pincode',,'$address2',,'$subdistrict',,'$village')";
/*$sql = "INSERT INTO formhack1(fullname, relationship, guardianname,email,mobilenumber,age,gender,farmertype,occupation,idnumber,ifsccode,state,district,bankname,bankbranchnumber,savings,confirms,pincode,address2,subdistrict,village) VALUES ('John', 'Unmarried', 'Suresh Choudhary','sudikshasharma108@gmail.com','700453784','21','Female','bpl','harvester','19','436785895','Jharkhand','adityapur','SBI','490968266','6969310648','6969310648','831007','12 HNO.,Khandagiri','12','Jamshedpur')";*/
if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
} else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>