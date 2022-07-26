<?php

namespace App\Controllers;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Home
{
    
    private $dados;

    public function onShow() {

        $montaruser = new \App\Models\AdmsUser();
        $this->dados['id'] = $_SESSION['tipo_user'];
        $this->dados['menu'] = $montaruser->menu_adm($this->dados);
        $this->dados['id_user'] = $_SESSION['usuario_id'];
        $this->dados['countCursos'] = $montaruser->qtn_cursos_adm($this->dados);
        $this->dados['countUsers'] = $montaruser->qtn_user_adm($this->dados);
        $this->dados['countCc'] = $montaruser->qtn_cc_adm($this->dados);
        $this->dados['countCert'] = $montaruser->qtn_cert_adm($this->dados);
       $carregarView = new \Core\ConfigView("Views/adm_curso/home", $this->dados);
       $carregarView->renderizar();
    }
}
