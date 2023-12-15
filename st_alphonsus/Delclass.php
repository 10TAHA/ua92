<?php
$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['Del'])){
    $ClassID = $_POST['ClassID'];


    $sql = "DELETE from class WHERE ClassID= '$ClassID'";
if($link->query($sql)=== TRUE){
    echo"Record Deleted Successfully";
} else{
    echo"Error in Deleting Records:" . $link->error;
}
$link->close();
//}
?>