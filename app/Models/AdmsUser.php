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
        $query_val_login = "SELECT *
                FROM menu_item
                WHERE tipo_user_id =:id";
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

    public function qtn_cursos_adm(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT COUNT(id_user)
                FROM curso
                WHERE id_user =:id";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":id", $this->dados['id'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetch();
        if ($this->resultadoBd) {
          return $this->resultadoBd;
        }else{
            return $this->resultadoBd;
        }
    }

    public function qtn_user_adm(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT COUNT( DISTINCT id_user)
                FROM view_cursos_user
                WHERE id_adm =:id";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":id", $this->dados['id'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetch();
        if ($this->resultadoBd) {
          return $this->resultadoBd;
        }else{
            return $this->resultadoBd;
        }
    }

    public function qtn_cc_adm(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT COUNT(DISTINCT id_curso,id_user)
                FROM view_cursos_user
                WHERE progresso = 100 and id_adm =:id";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":id", $this->dados['id'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetch();
        if ($this->resultadoBd) {
          return $this->resultadoBd;
        }else{
            return $this->resultadoBd;
        }
    }

    public function qtn_cert_adm(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT COUNT(DISTINCT id_curso,id_user)
                FROM view_cert_user
                WHERE  id_adm =:id";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":id", $this->dados['id'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetch();
        if ($this->resultadoBd) {
          return $this->resultadoBd;
        }else{
            return $this->resultadoBd;
        }
    }

    

    public function cursos_adm(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT *
                FROM curso
                WHERE id_user =:id";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":id", $this->dados['id_user'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetchAll();
        if ($this->resultadoBd) {
          return $this->resultadoBd;
        }else{
            return $this->resultadoBd;
        }
    }

    public function cursos_aluno(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT *
                FROM view_cursos_user
                WHERE id_user =:id ORDER BY progresso ASC";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":id", $this->dados['id_user'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetchAll();
        if ($this->resultadoBd) {
          return $this->resultadoBd;
        }else{
            return $this->resultadoBd;
        }
    }
    
    public function getCurso(array $dados = null) {
        $query_val_login = "SELECT *
        FROM curso
        WHERE id_curso =:id";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":id", $this->dados['id_curso'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetch();

        if ($this->resultadoBd) {
            return $this->resultadoBd;
          }else{
              return $this->resultadoBd;
          }

    }

    public function getModulosAll(array $dados = null) {
        $this->dados = $dados; //recebe Id curso
        $this->conn = $this->connect();

        $query_val_login = "SELECT *
        FROM modulos
        WHERE id_curso =:id ORDER BY posicao ASC";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":id", $this->dados['id_curso'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetchAll();

        if ($this->resultadoBd) {
            return $this->resultadoBd;
            }else{
                return $this->resultadoBd;
            }
    }

    public function getAulasAll(array $dados = null) {
        $this->dados = $dados; //recebe Id curso
        $this->conn = $this->connect();
        $query_val1 = "SELECT *
        FROM view_cursos_modulos_aulas
        WHERE id_modulo =:id ";
        $result_val1 = $this->conn->prepare($query_val1);
        $result_val1->bindParam(":id", $dados['id_modulo'], PDO::PARAM_STR);
        $result_val1->execute();
        $this->resultadoBd = $result_val1->fetchAll();

        if ($this->resultadoBd) {
            return $this->resultadoBd;
            }else{
                return $this->resultadoBd;
            }
    }

        public function getAtividadesAll(array $dados = null) {
        $this->dados = $dados; //recebe Id curso
        $this->conn = $this->connect();
        $query_val2 = "SELECT *
        FROM view_cursos_modulos_atividades
        WHERE id_modulo =:id ";
        $result_val2 = $this->conn->prepare($query_val2);
        $result_val2->bindParam(":id", $dados['id_modulo'], PDO::PARAM_STR);
        $result_val2->execute();
        $this->resultadoBd = $result_val2->fetchAll();

        if ($this->resultadoBd) {
            return $this->resultadoBd;
            }else{
                return $this->resultadoBd;
            }
    }
    

}
