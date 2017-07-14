<?php
$podatki=$_POST['podatki'];
$obj = json_decode($podatki);


//var_dump($obj);

//$testniprimer=array(5, 8, 9, 12, 13, 16, 17);

//tale doda vprasanja v datoteko ko bo baza delala je treba odstranit!
//file_put_contents("vprasanja.js","var vsavprasanja=".$podatki.";",LOCK_EX);






$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dbport = 3306;

// Create connection
$db = new mysqli($servername, $username, $password, $database, $dbport);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}



$skupajtock = 0;

foreach ($obj as $value) {
    $sql = "SELECT tocke FROM odgovori WHERE id= $value";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " tukaj je se odgovor ".$row["odgovor"]. " in se tocke " . $row["tocke"]." - id vprasanja: " . $row["id_vprasanja"]. "<br>";
        $skupajtock = $skupajtock +$row["tocke"];
    }
} else {
    echo "0 results";
}
    
}

echo "skupaj tock je :" . $skupajtock;
//file_put_contents("vprasanja.js","var skupajtock= " .json_encode($skupajtock).";\n",FILE_APPEND | LOCK_EX);
echo "OK";

?>