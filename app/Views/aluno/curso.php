<?php

if (!defined('4578S9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
if (isset($this->dados['menu'])) {
    $menu = $this->dados['menu'];
}

if (isset($this->dados['curso'])) {
    $curso = $this->dados['curso'];
}

if (isset($this->dados['curso_modulos'])) {
    $curso_modulos = $this->dados['curso_modulos'];

   // print_r($this->dados);
}

?>
<?php include "menu.php"; ?>


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h1>CURSO :: <?php echo $curso['nome_curso']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
    
            <?php $cont = 0; foreach( $this->dados['curso_modulos'] as $mol){

            echo '<h3> MODULO '. $mol['posicao']."   ::   ". $mol['nome_modulo']."</h3>";
            echo "<p> <br>".$mol['descricao']."<br><br><span style='fonte-size:25;'><b>"."Aulas</b></span>";
            foreach( $this->dados['aulas_modulo_'.$mol['id_modulo']] as $au){
                echo "<br> <span style='color:#00ed1c;'><b>".$au['descricao']."   ::   ".$au['tipo_aula']."</b></span>";
                echo "<br>".$au['aula_conteudo'];
               // print_r( $this->dados);
            }
            echo "<br><br><span style='fonte-size:25;'><b>"."Atividades</b></span>";
            foreach( $this->dados['atividades_modulo_'.$mol['id_modulo']] as $at){
                echo "<br> <span style='color:#00ed1c;'><b>".$at['descricao']."   ::   ".$at['tipo_atividade']."</b></span>";
                echo "<br>".$at['conteudo'];
            }
            $cont++;
            echo '</p>';
        } if($cont == 0){  echo "<h3>VAZIO</h3>";}?>

                
        </div>
    </div>
</div>

<?php include "footer.php"; ?>