<?php



?>

<!DOCTYPE html>
<html>

<head>
    <title>Ejercicios HTML</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../scripts/html_1.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/estilos.css">
</head>

<body>
    <header>
        <h1>Proyecto</h1>
        <div>
            <label for="email">Correo electrónico</label><input type="text" id="email">
            <label for="password">Contraseña</label><input type="text" id="password">
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="html_1.php">HTML</a></li>
            <li><a href="java_1.php">Java</a></li>
            <li><a href="php_1.php">PHP</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
    <main>
        <div>
            <button id="bt_html_eje_1" class="bt_eje_html">Ejercicio 1</button>
        </div>
        <div id="container_html_eje_1" class="container_eje_html oculto">
            <p>Crea un título</p>
            <span>&lt;html&gt;</span><br>
            <span>&lt;body&gt;</span><br>
            <span>&lt;</span> <input type='text' maxLength='2' size='1' id='texto_eje1_1'>
            <span>&gt; Título &lt;</span> <input type='text' maxLength='2' size='1' id='texto_eje1_2'>
            <span>&gt;</span> <br>
            <span>&lt;body&gt;</span><br>
            <span>&lt;html&gt;</span><br><br><br>
            <button id='comprobar_html_1'>Comprobar</button>

        </div>
    </main>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>