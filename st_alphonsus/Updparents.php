<?php
$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['update'])){
    $ParentsID = $_POST['ParentsID'];
    $ParentsName = $_POST['ParentsName'];
    $ParentsEmail = $_POST['ParentsEmail'];

    $sql = "UPDATE parents SET ParentsName= '$ParentsName', ParentsEmail= '$ParentsEmail'
    WHERE ParentsID= '$ParentsID'";
if($link->query($sql)=== TRUE){
    echo"Record Updated Successfully";
} else{
    echo"Error in Updating Records:". $link->error;
}
$link-> $close();
//}
?>