<?php
$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['Update'])){
    $StudentID = $_POST['StudentID'];
    $StudentName = $_POST['StudentName'];
    $StudentAddress = $_POST['StudentAddress'];

    $sql = "UPDATE students SET StudentName= '$StudentName', StudentAddress= '$StudentAddress'
    WHERE StudentID= '$StudentID'";
if($link->query($sql)=== TRUE){
    echo"Record Updated Successfully";
} else{
    echo"Error in Updating Records:" . $link->error;
}
$link->close();
//}
?>

