<?php

if (!defined('4578S9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
if (isset($this->dados['menu'])) {
    $menu = $this->dados['menu'];
}

if (isset($this->dados['cursos'])) {
    $cursos = $this->dados['cursos'];
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
                        <h1>MEUS CURSOS</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <?php $cont = 0; foreach ($cursos as $curso) { ?>

                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">


                                

                                        <div class="card">
      
                                               <a href="<?php echo URL . "aluno/curso?id=" . $curso['id_curso']; ?>"> <h5 class="mb-0 text-justify"> <?php echo $curso['nome_curso']; ?></h5> </a>

                                            <div id="collapseGa<?php echo $curso['id_curso']; ?>"  aria-labelledby="heading22" data-parent="#accordian-3">
                                                <div class="card-body alert  text-justify" style="font-family: arial; color: black; font-size: 14;">
                                                    <p style="font-size: 6;"><span style="color: blue;"><b><?php echo $curso['progresso']; ?>% COMPLETE</b></span> <span style="color: white;"><?php echo $curso['progresso']; ?>/100 Steps </span></p>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $curso['progresso']; ?>%;" aria-valuenow="<?php echo $curso['progresso']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $curso['progresso']; ?>%</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="badge badge-pill badge-primary"><?php echo $curso['status']; ?></div>
                                        </div>


                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $cont++;
            }

            if ($cont == 0) {
            ?>
                <tr>
                    <td colspan="5" style="text-align: center;"><?php echo "NENHUM REGISTRO ENCONTRADO" ?></td>
                </tr>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>