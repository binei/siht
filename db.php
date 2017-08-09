<?php
// A simple PHP script demonstrating how to connect to MySQL.
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console.

global $db;

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dbport = 3306;

// Create connection
$db = new mysqli($servername, $username, $password, $database, $dbport);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
echo "Connected successfully (".$db->host_info.")";
    
// naredimo tabele

$sql = "CREATE TABLE kvizi (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
ime_kviza VARCHAR(255) NOT NULL
)";

if ($db->query($sql) === TRUE) {
    echo "Table kvizi created successfully";
} else {
    //echo "Error creating table: " . $db->error;
}

$sql = "CREATE TABLE vprasanja (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
id_kviza INT(6) NOT NULL,
vprasanje VARCHAR(255) NOT NULL
)";

if ($db->query($sql) === TRUE) {
    echo "Table vprasanja created successfully";
} else {
    //echo "Error creating table: " . $db->error;
}

$sql = "CREATE TABLE odgovori (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
id_vprasanja INT(6) NOT NULL,
odgovor VARCHAR(255) NOT NULL,
tocke INT(6) NOT NULL 
)";

if ($db->query($sql) === TRUE) {
    echo "Table odgovori created successfully";
} else {
    //echo "Error creating table: " . $db->error;
}


/*
//vnos v tabele in izpis
$sql = "INSERT INTO vprasanja (id_kviza, vprasanje)
VALUES (1,'saj ne vem kaj bi sploh rekel.')";
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}



$sql = "SELECT id, id_kviza, vprasanje FROM vprasanja";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["id_kviza"]. " " . $row["vprasanje"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
?>