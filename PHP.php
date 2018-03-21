<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "assignment");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_GET['firstname']);
$last_name = mysqli_real_escape_string($link, $_GET['lastname']);
$email_address = mysqli_real_escape_string($link, $_GET['email']);
$phone = mysqli_real_escape_string($link, $_GET['phone']); 
// attempt insert query execution
$sql = "INSERT INTO employee (First_Name, Last_Name, email, phone) VALUES ('$first_name', '$last_name', '$email_address', '$phone')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
