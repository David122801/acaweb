<?php
$servername = "localhost";
$database = "ordenes";
$username = "root";
$password = "";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
$documentType = $_POST['documentType'];
$documentNumber = $_POST['documentNumber'];
$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$tableNumber = $_POST['tableNumber'];
$serviceType = $_POST['serviceType'];

// Validación básica
if (empty($documentType) || empty($documentNumber) || empty($fullName) || empty($phoneNumber) || empty($email) || empty($tableNumber) || empty($serviceType)) {
    die("Todos los campos son obligatorios.");
}

// Insertar en la base de datos con consulta preparada
$stmt = $conn->prepare("INSERT INTO ordenes (TipoDocumento, NoDocumento, Nombre, Celular, Correo, NumeroMesa, Servicio) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssis", $documentType, $documentNumber, $fullName, $phoneNumber, $email, $tableNumber, $serviceType);

if ($stmt->execute()) {
    echo "Pedido registrado con éxito.";
} else {
    echo "Error al registrar pedido: " . $stmt->error;
}

// Cerrar conexiones
$stmt->close();
$conn->close();
?>
