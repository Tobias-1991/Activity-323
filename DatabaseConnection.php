<?php

class DatabaseConnection
{
    function getConnection() {
        
        $servername = "localhost:3307";
        $username = "root";
        $password = "root";
        $dbname = "activitydb";
       
        // Create connection
        $conn = new DatabaseConnection();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

?>