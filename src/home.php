<?php
require_once('classes/login.php');
require_once('header.html');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
</head>
<body>
    <div class="container-fluid">
        <div>

            <h2>Vagas de Estágio</h2>
            
            <div style="margin:10px">
                <a href="pagina_cadastro.php"><button class="btn btn-primary">Cadastrar vaga</button></a>
            </div>

            <div style="margin:10px">
                <a href="pagina_remover.php"><button class="btn btn-primary">Remover Vaga</button></a>
            </div>
            
            <div style="margin:10px">
                <a href="pagina_listar.php"><button class="btn btn-primary">Visualizar vagas</button></a>
            </div>

            
            <!--
            Espera-se botões aqui
            -->
            <a href="login.php">Logout</a>
        </div>
    </div>
    
    
</body>
</html>