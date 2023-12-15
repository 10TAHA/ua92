<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
		<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h3 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: green;
            color: white;
        }
    </style>
    </head>


<body> 


<?php

$link = mysqli_connect("localhost", "root", "", "st_alphonsus");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Teachers</h3>
	
		<table>
		
			<tr>
			<th width="150px">TeacherID <br><hr></th>
				<th width="150px">TeacherName <br><hr></th>
				<th width="250px">TeacherAddress<br><hr></th>
                <th width="250px">TeacherSalary<br><hr></th>
                <th width="250px">TeacherEmail<br><hr></th>
			</tr>
			</tr>
				
			<?php
			 $sql = mysqli_query($link, "SELECT TeacherID,TeacherName,TeacherAddress,TeacherSalary,TeacherEmail FROM teachers");
    

			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
			    <th>{$row['TeacherID']}</th>
				<th>{$row['TeacherName']}</th>
				<th>{$row['TeacherAddress']}</th>
                <th>{$row['TeacherSalary']}</th>
                <th>{$row['TeacherEmail']}</th>






			</tr>";
			}
			?>
            </table>
        </body>
        </html>