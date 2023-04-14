<?php

$username = "aportillo";
$password = "aportillo";  
$servername = "172.21.0.2";
$database = "dedu_webiusm";

echo($username);
echo($password);
echo($servername);
echo "<br>";
echo($database);

// Creamos la conexión
$con = mysqli_connect($servername, $username, $password, $database);

// Comprobamos la conexión
if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
echo "Conexión satisfactoria";
mysqli_close($con);

?>
