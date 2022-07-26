<?php

namespace Core;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Description of ConfigController
 *
 * @author Celke
 */
class ConfigController
{

    private string $url;
    private array $urlConjunto;
    private string $urlController;
    private string $urlMetodo;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->urlConjunto = explode("/", $this->url);
            
            if ((isset($this->urlConjunto[0])) AND (isset($this->urlConjunto[1]))) {
                $this->urlController = $this->urlConjunto[0];
                $this->urlMetodo = $this->urlConjunto[1];
            } else {
                $this->urlController = "erro";
                $this->urlMetodo = "index";
            }
        } else {
            $this->urlController = "login";
            $this->urlMetodo = "index";
        }
    }
    
    public function carregar() {
        $this->config();
        $valPermissao = new \Core\Permissao();
        $valPermissao->index($this->urlController);
        $urlController = ucwords($this->urlController);
        $classe = "\\App\\Controllers\\" . $urlController;
        
        $classeCarregar = new $classe;

        if($this->urlMetodo == "index"){
          $classeCarregar->index();  
        }

        if($this->urlMetodo == "onShow"){
            $classeCarregar->onShow();  
          }

          
          if($this->urlMetodo == "onInsert"){
            $classeCarregar->onInsert();  
          }

          if($this->urlMetodo == "onDelete"){
            $classeCarregar->onDelete();  
          }

          if($this->urlMetodo == "onEdit"){
            $classeCarregar->onEdit();  
          }

          if($this->urlMetodo == "onUpdate"){
            $classeCarregar->onUpdate();  
          }

          if($this->urlMetodo == "curso"){
            $classeCarregar->curso();  
          }

          
          
          
        
    }
    
    private function config() {
        define('URL', 'http://localhost/edukar/');
    }

}
