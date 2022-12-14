<?php

// Iniciar a sessão
session_start(); 

// Definir um fuso horário padrão
date_default_timezone_set('America/Sao_Paulo');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de registrar ponto</title>
</head>

<body>

    <h2>Registrar ponto</h2>

    <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <p id="horario"><?php echo date("d/m/Y H:i:s"); ?></p>

    <a href="registrar_ponto.php">Registrar</a>

    <script>
        // var apHorario = document.getElementById("horario");

        function atualizarHorario() {
            var data = new Date().toLocaleString("pt-br", {
                timeZone: "America/Sao_Paulo"
            });

            // var formatarData = data.replace(", ", " - ");
            // apHorario.innerHTML = formatarData;
            document.getElementById("horario").innerHTML = data.replace(", ", " - ");
        }

        setInterval(atualizarHorario, 1000);
    </script>

</body>

</html>