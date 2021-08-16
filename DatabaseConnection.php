<?php

class DatabaseConnection
{
    function getConnection() {
        
        $url = getenv('z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
        $dbparts = parse_url($url);
        
        $hostname = $dbparts['z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
        $username = $dbparts['hydassi67brqr6xz'];
        $password = $dbparts['x2oksfqgyajdcw9l'];
        $database = ltrim($dbparts['fsu8e516wvoz7kvx'],'/');
        
        
        
   
        
        $conn = new mysqli($hostname, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected <b>";
        $conn->close();
        echo "connection closed";
    }
}
?>