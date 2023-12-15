<?php

$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//$TeacherName = $_POST['Name'];
//echo $TeacherName;

if(isset($_POST['submit'])){
    $TeacherID = $_POST['ID'];
    $TeacherName = $_POST['Name'];
    $TeacherAddress = $_POST['Address'];
    $TeacherSalary = $_POST['Salary'];
    $TeacherEmail = $_POST['Email'];
    $TeacherTel = $_POST['Tel'];
    


  //echo $TeacherName;

    $sql = "INSERT INTO teachers (TeacherID, TeacherName,TeacherAddress,TeacherSalary,TeacherEmail,TeacherTel) 
     VALUES('$TeacherID','$TeacherName',' $TeacherAddress','$TeacherSalary','$TeacherEmail','$TeacherTel')";

    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error adding record ";
      }
  
  }
?>