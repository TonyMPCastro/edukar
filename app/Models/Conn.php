<?php

namespace App\Models;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: 404 -> Pagina Não Existe!");
}

use PDO;
use PDOException;

class Conn
{
    private string $db = "mysql";
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "edukar_gestao";
    public object $connect;
    
    protected function connect() {
        try {

             $this->connect = new PDO($this->db . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
            return $this->connect;
       
            } catch (PDOException $e) {
        echo $e->getMessage();
        }
           
    }
}


