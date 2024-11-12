<?php
    require('classes/login.php');
    require_once('header.html');
    $validador = new Login();
    $validador->verificar_logado();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Cadasstro</title>
</head>
<body>

    


    <form class="input-group mb-3 mx-auto" action="realizar_cadastro.php" method="post" style="width:700px;">
        <h1>CADASTRAR VAGA</h1>
        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Nome da Empresa</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="empresa">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Número do Whatsapp</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="whats">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">E-mail de Contato</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="email">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Descrição da Vaga</span>
            </div>
            <textarea  class="form-control" id="basic-url" aria-describedby="basic-addon3" name="descricao" row="4"></textarea>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Cursos</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="curso">
                <option selected hidden>Escolher...</option>
                <option value="1">DSM</option>
                <option value="2">GE</option>
            </select>
        </div>

        
        <button class="btn btn-primary" type="submit">Cadastrar</button>
        <a href="home.php" class="btn btn-warning">Voltar</a>

    </form>
    
    
</body>
</html>
