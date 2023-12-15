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

<h3>See all Students</h3>
	
		<table>
		
			<tr>
                <th width="150px">StudentID <br><hr></th>
				<th width="150px">StudentName <br><hr></th>
                <th width="250px">StudentAddress<br><hr></th>
                <th width="250px">StudentMedInfo<br><hr></th>
			</tr>
			</tr>
				
			<?php
			 $sql = mysqli_query($link, "SELECT StudentID,StudentName,StudentAddress, StudentMedInfo FROM students");
    

			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>

                <th>{$row['StudentID']}</th>
				<th>{$row['StudentName']}</th>
                <th>{$row['StudentAddress']}</th>
                <th>{$row['StudentMedInfo']}</th>






			</tr>";
			}
			?>
            </table>
        </body>
        </html>