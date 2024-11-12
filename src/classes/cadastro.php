<?php
    class Cadastro{
        public $pdo;
        public $stmt;
        public function __construct(){
            try{
                $this->pdo = new PDO("mysql:host=localhost;dbname=vagas", "root","");
            }
            catch(PDOException $e){
                echo "Não foi possível conectar com o banco: ".$e.PHP_EOL;
            }
        } 

        public function cadastrar_vaga($empresa, $whats, $email, $descricao, $curso){
            $this->stmt = $this->pdo->prepare("INSERT INTO vagas (nome_empresa, numero_whatsapp, email_contato, descritivo_vaga, curso) VALUES (:empresa, :whats, :email, :descricao, :curso)");

            $this->stmt->execute([
                ":empresa" => $empresa,
                ":whats" => $whats,
                ":email" => $email,
                ":descricao" => $descricao,
                ":curso" => $curso
            ]);
            
            header("location:pagina_cadastro.php");
            
        }

        public function remover_cadastro($idvaga){
            $this->stmt = $this->pdo->prepare("DELETE FROM vagas WHERE vagas.id = :idvaga");
            $this->stmt->execute([
                ":idvaga" =>$idvaga
            ]);

            header("location:pagina_remover.php");
        } 

        public function listar_cadastros(){
            $this->stmt = $this->pdo->prepare("Select * from vagas");
            $this->stmt->execute();
            return $this->stmt;
        } 

        public function __destruct(){
            $this->pdo = null;
            exit();
        }
    }
?>