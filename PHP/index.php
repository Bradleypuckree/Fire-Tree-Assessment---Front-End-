<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "property");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO listing 
(id, province, suburb, price, bedrooms) VALUES ('3', 'KZN', 'Durban', '900000', '3')";


if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>