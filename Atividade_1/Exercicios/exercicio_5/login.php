<?php
ini_set('display_errors', 1);
error_reporting(1);
require_once '../inc/cabecalho.php';
session_start();

?>

<div class="main align-items-center justify-content-center" id="flex-container">
    <div class="container">
        <hr class="invisible">
        <h1 class="display-6 tw-bold mb-5">Login</h1>
        <?php if ($_GET['fail'] == 2) { ?>
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger alert-sm" role="alert"> Erro: E-mail ou senha inválidos. </div>
            </div>
        <?php } ?>
        <?php if ($_GET['fail'] == 3) { ?>
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger alert-sm" role="alert"> Erro: Email não cadastrado. </div>
            </div>
        <?php } ?>
        <div class="lg d-flex align-items-center justify-content-center">
            <form class="form" method="post" action="./loginHandler.php" style="min-width: 50vh;">
                <!-- Name input -->
                <div class="">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" class="form-control" name="email" />
                </div>

                <!-- Age input -->
                <div class="">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="form-control" />
                </div>


                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>

            </form>

        </div>
    </div>
    <hr class="vr invisible" style="height: 50;">
    <div class="d-flex justify-content-center">
        <a href="./index.php" class="btn btn-primary btn-rounded ">Voltar</a>
    </div>
</div>