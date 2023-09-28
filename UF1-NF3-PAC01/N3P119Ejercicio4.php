<!DOCTYPE html>
<html>
<head>
    <title>Formateador de Texto</title>
</head>
<body>
    <h1>Formateador de Texto</h1>
    <form action="textoformateado.php" method="post">
        <label for="input_text">Texto:</label><br>
        <textarea name="input_text" id="input_text" rows="6" cols="50"></textarea><br><br>

        <label for="text_color">Color del Texto:</label>
        <select name="text_color" id="text_color">
            <option value="black">Negro</option>
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select><br><br>

        <label for="font_family">Fuente:</label>
        <select name="font_family" id="font_family">
            <option value="Arial, sans-serif">Arial</option>
            <option value="Times New Roman, serif">Times New Roman</option>
            <option value="Verdana, sans-serif">Verdana</option>
            <option value="Courier New, monospace">Courier New</option>
        </select><br><br>

        <label for="font_size">Tamaño de Fuente:</label>
        <select name="font_size" id="font_size">
            <option value="12px">12px</option>
            <option value="16px">16px</option>
            <option value="20px">20px</option>
            <option value="24px">24px</option>
        </select><br><br>

        <input type="submit" value="Formatear">
    </form>
</body>
</html>
