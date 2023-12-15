<?php

$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
$StudentName = $_POST['Name'];
echo $StudentName;

//if(isset($_POST['submit'])){
    $StudentID = $_POST['ID'];
    $StudentName = $_POST['Name'];
    $StudentAddress = $_POST['Address'];
    $StudentMedInfo = $_POST['MedInfo'];
    $ParentsID = $_POST['ParentsID'];
    $ClassID = $_POST['ClassID'];


  echo $StudentName;


    //$StudentID = mysqli_real_escape_string($conn,)
    $sql=" INSERT INTO students (StudentID, StudentName,StudentAddress,StudentMedInfo,ParentsID,ClassID) 
     VALUES('$StudentID', '$StudentName','$StudentAddress','$StudentMedInfo','$ParentsID','$ClassID')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error adding record ";
      }
  
  //}
?>