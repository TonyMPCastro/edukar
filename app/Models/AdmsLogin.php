<?php

namespace App\Models;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;
class AdmsLogin extends Conn
{

    private $dados;
    private bool $resultado = false;
    private $resultadoBd;
    private object $conn;

    function getResultado(): bool {
        return $this->resultado;
    }

    public function login(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT id, nome, email, senha,tipouser
                FROM usuarios
                WHERE email =:email LIMIT 1";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":email", $this->dados['usuario'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetch();
        if ($this->resultadoBd) {
            $this->validarSenha();
        } else {
            $_SESSION['nao_autenticado'] = true;
            $this->resultado = false;
        }
    }

    private function validarSenha() {
        if (password_verify($this->dados['senha'], $this->resultadoBd['senha'])) {
            
            $_SESSION['tipouser'] = $this->resultadoBd['tipouser'];
            $_SESSION['usuario_id'] = $this->resultadoBd['id'];
            $_SESSION['usuario_nome'] = $this->resultadoBd['nome'];
            $_SESSION['usuario_email'] = $this->resultadoBd['email'];
            $this->resultado = true;
        } else {
            $_SESSION['nao_autenticado'] = true;
            $this->resultado = false;
        }
    }

}
