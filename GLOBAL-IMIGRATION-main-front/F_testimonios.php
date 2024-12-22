<?php
include 'F_funcion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars($_POST['name']);
    $testimonio = htmlspecialchars($_POST['testimonial']);
    $rating = htmlspecialchars($_POST['rating']);

    $sql = "INSERT INTO testimonios (nombre, testimonio, rating ) VALUES ('$nombre', '$testimonio', '$rating')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Testimonio enviado correctamente."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error al enviar el testimonio: " . $conn->error]);
    }

    $conn->close();
}
