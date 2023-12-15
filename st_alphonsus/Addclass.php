<?php

$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
if(isset($_POST['submit'])){
    $ClassID = $_POST['ClassID'];
    $ClassName = $_POST['ClassName'];
    $ClassCapacity = $_POST['ClassCapacity'];
    $ClassArea = $_POST['ClassArea'];

    $sql=" INSERT INTO class (ClassID, ClassName,ClassCapacity,ClassArea)
    VALUES('$ClassID', '$ClassName', '$ClassCapacity', '$ClassArea')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error adding record ";
      }
  
  }
?>