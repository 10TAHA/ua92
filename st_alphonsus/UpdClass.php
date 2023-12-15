<?php
$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['update'])){
    $ClassID = $_POST['ClassID'];
    $ClassName = $_POST['ClassName'];
    $ClassCapacity = $_POST['ClassCapacity'];
    $TeacherID = $_POST['TeacherID'];

    $sql = "UPDATE class SET ClassName= '$ClassName', ClassCapacity= '$ClassCapacity', TeacherID='$TeacherID'
    WHERE ClassID= '$ClassID'";
 if($link->query($sql)=== TRUE){
    echo"Record Updated Successfully";
 } else{
    echo"Error in Updating Records:" . $link->error;
 }
//}
$link->close();
?>