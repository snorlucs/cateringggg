<!DOCTYPE html>
<html>
<head>
    <title>Elenco Menù</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Elenco Tutti i Menù</h1>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
 
$servername = "localhost";
$username = "masterchef";
$password = "123qwe";
$dbname = "DBCatering";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
 
// Check connection
if ($conn->connect_errno) {
  echo("Impossibile connettersi: " . $conn->connect_error ."\n");
  exit();
}

$sql = "SELECT * FROM Menu where Nome = 'fisso' ";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  // output data of each row
while($row = $result->fetch_assoc()) {
    echo "Cod_M: " . $row["Cod_M"]. " - Nome: " . $row["Nome"] . " - Prezzo: " . $row["Prezzo"] . "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

</body>
</html>
