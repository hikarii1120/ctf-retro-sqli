<?php
// Conexión a MySQL (usando los valores de Docker Compose)
$conn = new mysqli("db", "ctfuser", "ctfpass", "ctf");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Captura de datos (no sanitizados — vulnerable a SQLi)
$user = $_POST['username'];
$pass = $_POST['password'];

// Consulta vulnerable
$query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($query);

// Verificación de resultados
if ($result && $result->num_rows > 0) {
    header("Location: flag.php");
    exit();
} else {
    echo "<link rel='stylesheet' href='style.css'>";
    echo "<div style='text-align:center;margin-top:100px;color:red;'>
            <h2>🛑 Acceso denegado</h2>
            <p>El club retro no acepta impostores.</p>
          </div>";
}

$conn->close();
?>
