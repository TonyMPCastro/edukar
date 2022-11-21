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
            <div class="table-reponsive">
                <table id="tbCurso" class="table" style="color: white;">
                    <thead>
                        <tr style="color: white !important;">
                            <th scope="col"></th>
                            <th scope="col">Código</th>
                            <th scope="col">Curso</th>
                            <th scope="col">carga_horaria</th>
                            <th scope="col">Modelo Certificado</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php $cont = 0;
                        foreach ($cursos as $curso) { ?>
                            <tr>

                                <td>
                                    <a href="#" title="Editar" data-toggle="popover" data-trigger="hover" data-content="Some content">
                                        <i style="color:#0090e7;" class='far fa-edit' style='font-size:14px'></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="#" title="Apagar" data-toggle="popover" data-trigger="hover" data-content="Some content">
                                        <i style="color:red;" class='far fa-trash-alt' style='font-size:14px'></i>
                                    </a>

                                </td>
                                <td><?php echo $curso['id_curso']; ?></td>
                                <td><?php echo $curso['nome_curso']; ?></td>
                                <td><?php echo $curso['carga_horaria'] . 'H'; ?></td>
                                <td><?php echo $curso['modelo_certificado']; ?></td>
                                <td>
                                    <a href="<?php echo URL . "adm_curso/curso?id=" . $curso['id_curso']; ?>" type="button" class="btn btn-outline-primary me-2">VISUALIZAR</a>
                                    <!-- <a href="<?php //echo URL . "adm_curso/onDelete?id=" . $curso['id_curso']; 
                                                    ?>" type="button" class="btn btn-outline-danger me-2">EXCLUIR</a> -->
                                </td>

                            </tr>
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
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>