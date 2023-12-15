<?php
$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['Del'])){
    $TeacherID = $_POST['TeacherID'];


    $sql = "DELETE from teachers WHERE TeacherID= '$TeacherID'";
if($link->query($sql)=== TRUE){
    echo"Record Deleted Successfully";
} else{
    echo"Error in Deleting Records:" . $link->error;
}
$link->close();
//}
?>