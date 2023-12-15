<?php
$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['update'])){
    $TeacherID = $_POST['TeacherID'];
    $TeacherSalary = $_POST['TeacherSalary'];
    $TeacherTel = $_POST['TeacherTel'];

    $sql = "UPDATE teachers SET TeacherSalary= '$TeacherSalary', TeacherTel= '$TeacherTel'
    WHERE TeacherID= '$TeacherID'";
if($link->query($sql)=== TRUE){
    echo"Record Updated Successfully";
} else{
    echo"Error in Updating Records:". $link->error;
}
$link-> $close();
//}
?>