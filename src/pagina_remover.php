<?php
    require_once('classes/login.php');
    require_once('classes/cadastro.php');
    require_once('header.html');
    $validador = new Login();
    $validador->verificar_logado();

    $cadastro = new Cadastro();
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Cadasstro</title>
</head>
<body>

    


    <form class="input-group mb-3 mx-auto" style="width:700px;" action="realizar_remocao.php" method="post">
        <h1>REMOVER VAGA</h1>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Cursos</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="vaga">
                <option selected hidden>Escolher...</option>
                <?php
                    $query = $cadastro->listar_cadastros();
                    var_dump($query);
                    while($row = $query->fetch()){
                        echo "<option value=". $row["id"] .">".$row["id"]." - " . $row["nome_empresa"]."</option>";
                    }
                ?>
            </select>
        </div>

        
        <button class="btn btn-primary" type="submit">Remover</button>
        <a href="home.php" class="btn btn-warning">Voltar</a>

    </form>
    
    
</body>
</html>
