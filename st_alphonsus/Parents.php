<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: white;
        }

        h3 {
            text-align: center;
            color: black;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid ;
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

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">ParentsID<br><hr></th>
                <th width="250px">ParentsName<br><hr></th>
                <th width="250px">ParentsAddress<br><hr></th>
                <th width="250px">ParentsEmail<br><hr></th>
                <th width="250px">ParentsTel<br><hr></th>
			</tr>
			</tr>
				
			<?php
			 $sql = mysqli_query($link, "SELECT ParentsID,ParentsName,ParentsAddress,ParentsEmail,ParentsTel FROM parents");
    

			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      
				<th>{$row['ParentsID']}</th>
                <th>{$row['ParentsName']}</th>
                <th>{$row['ParentsAddress']}</th>
                <th>{$row['ParentsEmail']}</th>
                <th>{$row['ParentsTel']}</th>






			</tr>";
			}
			?>
            </table>
        </body>
        </html>