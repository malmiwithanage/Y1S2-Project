<?php
require 'index.php'; ?>


<html>
<head><title>Customer details</title>

<style>
    th {
        background-color:blue;
    }

    tr{
        background-color:orange;
    }
    </style>
</head>
    
<body>
    
    <center><h1>Contact us Data</h1></center>
    <center><table border='1' cellspacing='0' cellpadding='5' width = '75%' ></center>
        <tr>
            <th>NIC</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Message</th>
            <th>Opertion</th>
        </tr>

        <?php

            $sql = "select * from contact" ;

            $result = mysqli_query($con, $sql);

            


            // Loop through the data and display it
            while ($row = mysqli_fetch_assoc($result)) {

                echo '<tr>';
                echo '<td>' . $row['nic'] . '</td>';
                echo '<td>' . $row['firstName'] . '</td>';
                echo '<td>' . $row['lastName'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['phoneNumber'] . '</td>';
                echo '<td>' . $row['message'] . '</td>';
                echo '</tr>';
            }

       

        ?>

    </table>

</html> 