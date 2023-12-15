<?php
$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['Del'])){
    $ParentsID = $_POST['ParentsID'];


    $sql = "DELETE from parents WHERE ParentsID= '$ParentsID'";
if($link->query($sql)=== TRUE){
    echo"Record Deleted Successfully";
} else{
    echo"Error in Deleting Records:" . $link->error;
}
$link->close();
//}
?>