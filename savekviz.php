<?php
$podatki=$_POST['podatki'];
$obj = json_decode($podatki);

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



//var_dump($obj);
//TOLE DELA!!!

$ime=end($obj);


array_pop($obj);




$stm = mysqli_prepare($db, "INSERT INTO kvizi (ime_kviza) VALUES (?)");
mysqli_stmt_bind_param($stm, "s",$ime);
mysqli_stmt_execute($stm);


$last_id = $db->insert_id;




//var_dump($last_id);

//TUDI TO ZE DELA!!


foreach ($obj as $value) {

    //var_dump($value->vprasanje);
    //var_dump($last_id);
    
    $stm = mysqli_prepare($db, "INSERT INTO vprasanja (id_kviza, vprasanje) VALUES ( ?, ?)");
    mysqli_stmt_bind_param($stm, "is",$last_id, $value->vprasanje);
    mysqli_stmt_execute($stm);

    $zadnje_vprid = $db->insert_id;
    
    for($x = 0; $x < count($value->odgovori); $x++) {
        $toc=$value->tocke[$x];
        $od=(string)$value->odgovori[$x];
       $stm = mysqli_prepare($db, "INSERT INTO odgovori (id_vprasanja,odgovor,tocke) VALUES (?, ?, ?)"); 
        mysqli_stmt_bind_param($stm, "isi",$zadnje_vprid ,$od,$toc);
        mysqli_stmt_execute($stm);

    }
    
    
    //var_dump($value->vprasanje);
}



//var_dump($obj);
//echo $podatki;

echo "OK";

?>