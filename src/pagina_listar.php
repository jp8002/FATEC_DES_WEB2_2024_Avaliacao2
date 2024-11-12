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
    <title>Lista de Cadastro</title>
</head>
<body>

    <center>
        <h1>LISTA DE VAGAS</h1>
    </center>
    


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome da empresa</th>
                <th scope="col">Número de Whatsapp</th>
                <th scope="col">Email de contato</th>
                <th scope="col">Descrição da vaga</th>
                <th scope="col">Curso</th>
            </tr>
        </thead>
        <tbody>
  
        <?php
            $query = $cadastro->listar_cadastros();
            
            while($row = $query->fetch()){
                echo"<tr>".PHP_EOL;
                    echo "<th scope='row'>". $row["id"] ."</th>";
                    echo "<td>".$row["nome_empresa"]."</td>";
                    echo "<td>".$row["numero_whatsapp"]."</td>";
                    echo "<td>".$row["email_contato"]."</td>";
                    echo "<td>".$row["descritivo_vaga"]."</td>";
                    echo "<td>".$row["curso"]."</td>";
                echo"</tr>";
            }
        ?>
    
        </tbody>
    </table>    
    
</body>
</html>
