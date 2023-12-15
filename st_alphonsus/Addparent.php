<?php

$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//$ParentsID = $_POST['ID'];
//echo  $ParentsID;

if(isset($_POST['submit'])){
    $ParentsID = $_POST['ParentsID'];
    $ParentsName = $_POST['ParentsName'];
    $ParentsAddress = $_POST['ParentsAddress'];
    $ParentsEmail = $_POST['ParentsEmail'];
    $ParentsTel = $_POST['ParentsTel'];

    $sql=" INSERT INTO parents (ParentsID, ParentsName,ParentsAddress,ParentsEmail,ParentsTel)
    VALUES('$ParentsID', '$ParentsName','$ParentsAddress', '$ParentsEmail','ParentsTel')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error adding record ";
      }
  
  }
?>