<?php
$podatki=$_POST['podatki'];
file_put_contents("vprasanja.js","vsavprasanja=".$podatki,LOCK_EX);

echo "OK";
?>