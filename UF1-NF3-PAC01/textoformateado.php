<!DOCTYPE html>
<html>
<head>
    <title>Texto Formateado</title>
</head>
<body>
    <h1>Texto Formateado</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_text = $_POST["input_text"];
        $text_color = $_POST["text_color"];
        $font_family = $_POST["font_family"];
        $font_size = $_POST["font_size"];
        $save_data = $_POST["save_data"];

        // Aplicar estilos CSS en línea al texto
        $formatted_text = "<p style=\"color: $text_color; font-family: $font_family; font-size: $font_size;\">$input_text</p>";

        // Mostrar el texto formateado
        echo $formatted_text;

        // Guardar información en una cookie si el usuario eligió "Sí"
        if ($save_data == "yes") {
            setcookie("formatted_text", $formatted_text, time() + 3600 * 24 * 7); // Cookie válida por 7 días
        }
    }
    ?>
</body>
</html>
