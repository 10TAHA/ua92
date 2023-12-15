<?php
$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['Del'])){
    $StudentID = $_POST['StudentID'];


    $sql = "DELETE from students WHERE StudentID= '$StudentID'";
if($link->query($sql)=== TRUE){
    echo"Record Deleted Successfully";
} else{
    echo"Error in Deleting Records:" . $link->error;
}
$link->close();
//}
?>