<!DOCTYPE html>
<html>
<head>
    <title>Formateador de Texto</title>
</head>
<body>
    <h1>Formateador de Texto</h1>
    <form action="textoformateado.php" method="post">
        <!-- ... (resto del formulario) -->
        
        <label for="save_data">Guardar información para la próxima vez:</label>
        <input type="radio" name="save_data" value="yes" id="save_data_yes"> Sí
        <input type="radio" name="save_data" value="no" id="save_data_no" checked> No
        <br><br>

        <input type="submit" value="Formatear">
    </form>
</body>
</html>
