<?php
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






echo "<br> tole je tabela KVIZI: <br>";
$sql = "SELECT id, ime_kviza FROM kvizi";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - idkviza: " . $row["ime_kviza"]."<br>";
    }
} else {
    echo "0 results";
}

echo "<br> tole je tabela VPRASANJA: <br>";

$sql = "SELECT id, id_kviza, vprasanje FROM vprasanja";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - idkviza: " . $row["id_kviza"]. " in se vprasanje " . $row["vprasanje"]. "<br>";
    }
} else {
    echo "0 results";
}


echo "<br> tole je tabela ODGOVORI: <br>";

$sql = "SELECT id, id_vprasanja, odgovor, tocke FROM odgovori";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " tukaj je se odgovor ".$row["odgovor"]. " in se tocke " . $row["tocke"]." - id vprasanja: " . $row["id_vprasanja"]. "<br>";
    }
} else {
    echo "0 results";
}


/*

$sql = "SELECT id, id_kviza, vprasanje FROM vprasanja";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - idkviza: " . $row["id_kviza"]. " in se vprasanje " . $row["vprasanje"]. "<br>";
    }
} else {
    echo "0 results";
}




$sql = "DELETE FROM vprasanja WHERE id_kviza='1'";
if(mysqli_query($db, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}




$sql = "SELECT id, id_kviza, vprasanje FROM vprasanja";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - idkviza: " . $row["id_kviza"]. " in se vprasanje " . $row["vprasanje"]. "<br>";
    }
} else {
    echo "0 results";
}

*/
?>