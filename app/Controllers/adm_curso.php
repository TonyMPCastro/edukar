<?php

namespace App\Controllers;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}


class Adm_Curso
{
    
    private $dados;
    
    public function index() {
        $montaradm = new \App\Models\AdmsUser();
        $this->dados['id'] = $_SESSION['tipo_user'];
        $this->dados['menu'] = $montaradm->menu_adm($this->dados);
        $this->dados['id_user'] = $_SESSION['usuario_id'];
        $this->dados['cursos'] = $montaradm->cursos_adm($this->dados);
       $carregarView = new \Core\ConfigView("Views/adm_curso/adm_curso", $this->dados);
       $carregarView->renderizar();
    }

    
    public function curso() {

        $this->dados['id_curso'] =  $_GET["id"]? $_GET["id"]:"-1";

        $montaradm = new \App\Models\AdmsUser();
        $this->dados['id'] = $_SESSION['tipo_user'];
        $this->dados['menu'] = $montaradm->menu_adm($this->dados);
        $this->dados['curso'] = $montaradm->getCurso($this->dados);
        $this->dados['curso_modulos'] = $montaradm->getModulosAll($this->dados);

        foreach( $this->dados['curso_modulos'] as $mol){
            $this->dados['id_modulo'] = $mol['id_modulo'];
            $this->dados['atividades_modulo_'.$mol['id_modulo']] = $montaradm->getAtividadesAll($this->dados);
            $this->dados['aulas_modulo_'.$mol['id_modulo']] = $montaradm->getAulasAll($this->dados);

        }

        $carregarView = new \Core\ConfigView("Views/adm_curso/curso_adm", $this->dados);
       $carregarView->renderizar();
    }
}
