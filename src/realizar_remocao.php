<?php
    require_once("classes/cadastro.php");
    if($_SERVER["REQUEST_METHOD"] != "POST" || empty($_POST["vaga"])){
        header("location:pagina_remover.php");
    }

    $cadastro = new Cadastro();

    $cadastro->remover_cadastro($_POST["vaga"]);

    

?>