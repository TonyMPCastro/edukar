<?php

namespace App\Models;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;

class AdmsUser extends Conn
{

    private $dados;
    private $resultadoBd;
    private object $conn;

    public function menu_adm(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT id,nome,ico,comandoUrl
                FROM menu_user
                WHERE tipouser =:id";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":id", $this->dados['id'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetchAll();
        if ($this->resultadoBd) {
          return $this->resultadoBd;
        }else{
            return $this->resultadoBd;
        }
    }

}
