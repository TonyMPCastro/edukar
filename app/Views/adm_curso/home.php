<?php

if (!defined('4578S9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
if (isset($this->dados['menu'])) {
    $menu = $this->dados['menu'];
}

if (isset($this->dados['countCursos'])) {
    $countCursos = $this->dados['countCursos'];
}

if (isset($this->dados['countUsers'])) {
    $countUsers = $this->dados['countUsers'];
}

if (isset($this->dados['countCc'])) {
    $countCc = $this->dados['countCc'];
}

if (isset($this->dados['countCert'])) {
    $countCert = $this->dados['countCert'];
}
?>

<?php include "menu.php"; ?>


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="app/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h4 class="mb-1 mb-sm-0">Quer ainda mais recursos?</h4>
                                <p class="mb-0 font-weight-normal d-none d-sm-block">Confira nossa versão Pro...</p>
                            </div>
                            <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                                <span>
                                    <a href="#" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h4 class="text-muted font-weight-normal">QTN CURSOS</h4>
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0"> <?php echo $countCursos[0]; ?></h3>
                                    <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-certificate"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h4 class="text-muted font-weight-normal">QTN Alunos</h4>
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0"> <?php echo $countUsers[0]; ?></h3>
                                    <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-account-group-outline"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h4 class="text-muted font-weight-normal">QTN Concluidos</h4>
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0"> <?php echo $countCc[0]; ?></h3>
                                    <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-check-decagram"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h4 class="text-muted font-weight-normal">QTN Certificados</h4>
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0"> <?php echo $countCert[0]; ?></h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium" style="font-size:24 !important;"><?php echo ((($countCc[0] - $countCert[0]) / $countCc[0]) * 100); ?>%</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-file-pdf-outline"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>