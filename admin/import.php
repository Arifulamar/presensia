<?php
//connect database
include ('../config/config.php');

$pdo = new PDO (
    "mysql:host=".$dbHost.";dbname=".$dbName.";charset=".$dbChar,
  $dbUser, $dbPass, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// (B) READ UPLOAD CSV
$fh = $fopen ($_FILES["upcsv"]["tmp_name"], "r");
if ($fh === false) {
    exit("failed to open uploaded CSV");
}
// (C) IMPORT ROW BY ROW
while (($row = fgetcsv($fh))!==false){
    //print_r($row);
    $tmt = $pdo-> prepare("INSERT INTO 'data_siswa'('nama_siswa', 'kelas') VALUES 
    (?,?)");
    $stmt->execute([$row[0],$row[1]]);
}
fclose($fh);
echo "DONE.";
?>