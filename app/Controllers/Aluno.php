<?php

namespace App\Controllers;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}


class Aluno
{
    
    private $dados;
    
    public function index() {
        $mostraAluno = new \App\Models\AdmsUser();
        $this->dados['id'] = $_SESSION['tipo_user'];
        $this->dados['menu'] = $mostraAluno->menu_adm($this->dados);
        $this->dados['id_user'] = $_SESSION['usuario_id'];
        $this->dados['cursos'] = $mostraAluno->cursos_aluno($this->dados);
       $carregarView = new \Core\ConfigView("Views/aluno/aluno", $this->dados);
       $carregarView->renderizar();
    }

    public function curso() {

        $this->dados['id_curso'] =  $_GET["id"]? $_GET["id"]:"-1";

        $mostraAluno = new \App\Models\AdmsUser();
        $this->dados['id'] = $_SESSION['tipo_user'];
        $this->dados['menu'] = $mostraAluno->menu_adm($this->dados);
        $this->dados['curso'] = $mostraAluno->getCurso($this->dados);
        $this->dados['curso_modulos'] = $mostraAluno->getModulosAll($this->dados);

        foreach( $this->dados['curso_modulos'] as $mol){
            $this->dados['id_modulo'] = $mol['id_modulo'];
            $this->dados['atividades_modulo_'.$mol['id_modulo']] = $mostraAluno->getAtividadesAll($this->dados);
            $this->dados['aulas_modulo_'.$mol['id_modulo']] = $mostraAluno->getAulasAll($this->dados);

        }

       $carregarView = new \Core\ConfigView("Views/aluno/curso", $this->dados);
       $carregarView->renderizar();
    }
}
