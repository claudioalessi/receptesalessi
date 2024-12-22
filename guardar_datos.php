<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['message']);

    // Crear una cadena con los datos
    $datos = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje\n\n";

    // Guardar los datos en un archivo de texto
    $archivo = 'consultas.txt'; // Nombre del archivo donde se guardarán los datos

    // Si el archivo no existe, lo crea. Si existe, agrega los datos al final.
    file_put_contents($archivo, $datos, FILE_APPEND);

    // Redirigir a una página de agradecimiento o confirmar la recepción del formulario
    echo "Gracias por tu consulta. Nos pondremos en contacto contigo pronto.";
} else {
    echo "Método de solicitud no permitido.";
}
?>
