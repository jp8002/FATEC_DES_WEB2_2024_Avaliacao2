<?php
    session_start();
    require_once("classes/cadastro.php");
    $cadastro = new Cadastro();

    var_dump($_POST);
    if($_SERVER["REQUEST_METHOD"] != "POST" || empty($_POST["empresa"]) || empty($_POST["whats"]) || empty($_POST["email"]) || empty($_POST["descricao"]) || empty($_POST["curso"])){
        header("location: pagina_cadastro.php");
        return;
    }



    $cadastro->cadastrar_vaga($_POST["empresa"], $_POST["whats"], $_POST["email"], $_POST["descricao"], $_POST["curso"]);
?>