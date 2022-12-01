<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "formhack");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fullname = mysqli_real_escape_string($link, $_REQUEST['name']);
$relationship = mysqli_real_escape_string($link, $_REQUEST['relationship']);
$guardian = mysqli_real_escape_string($link, $_REQUEST['guardianname']);
 
// Attempt insert query execution
$sql = "INSERT INTO formdata (first_name, last_name, email) VALUES ('$fullname', '$relationship', '$guardian')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>