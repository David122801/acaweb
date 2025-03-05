<?php
$servername = "localhost";
$database = "ordenes";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$documentType = $_POST['documentType'];
$documentNumber = $_POST['documentNumber'];
$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$tableNumber = (int) $_POST['tableNumber'];
$serviceType = $_POST['serviceType'];


if (empty($documentType) || empty($documentNumber) || empty($fullName) || empty($phoneNumber) || empty($email) || empty($tableNumber) || empty($serviceType)) {
    die("Todos los campos son obligatorios.");
}


$stmt = $conn->prepare("INSERT INTO ordenes (Documento, NoDocumento, Name, Celular, Correo, NumeroMesa, Servicio) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssis", $documentType, $documentNumber, $fullName, $phoneNumber, $email, $tableNumber, $serviceType);

if ($stmt->execute()) {
    echo "<script>
            alert('Pedido registrado con éxito.');
            window.location.href = '../servicios.html';
          </script>";
} else {
    echo "<script>
            alert('Error al registrar pedido: " . $stmt->error . "');
          </script>";
}



$stmt->close();
$conn->close();
?>