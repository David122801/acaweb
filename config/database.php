 
<?php
$serverName = "localhost";
$database = "acaweb";
$username = "dbo";  
$password = "SISCP4102"; 

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa!";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
