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

        $visualizarLogin = new \App\Models\AdmsUser();
        $this->dados['id'] = $_SESSION['tipouser'];
        $this->dados['menu'] = $visualizarLogin->menu_adm($this->dados);

       //print_r($this->dados['menu']);
        //die;
       $carregarView = new \Core\ConfigView("Views/adm_curso/home", $this->dados);
       $carregarView->renderizar();
    }
}
