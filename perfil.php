<?php
include 'topo.php';
?>

<!-- INCLUIR OU CRIAR AQUI SEUS ESTILOS -->
<style>
    img#perfil {
        margin-top: 10%;

    }

    div#menu {
        text-align: center;
    }

    a.list-group-item {
        text-align: left;
    }
</style>

<!-- CRIAR AQUI O HTML DA SUA PAGINA -->
<div class="container">
    <!-- Card -->
    <div class="card testimonial-card">

        <!-- Background color -->
        <div class="card-up indigo lighten-1"></div>

        <!-- Avatar -->
        <div class="avatar mx-auto white">
            <img src="img/perfil-sem-foto.png" id="perfil" class="rounded-circle" alt="woman avatar">
        </div>

        <!-- Content -->
        <div class="card-body">
            <!-- Name -->
            <h4 class="card-title">Nome</h4>
            <hr>
            <!-- Card -->
            <div class="card">
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                    <form name="cad-usuario" method="POST" action="control/usuario.php">
                        <p class="h4 text-center py-4">Meu Perfil</p>

                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="materialFormCardNameEx" required name="nome" class="form-control">
                            <label for="materialFormCardNameEx" class="font-weight-light">Seu Nome</label>
                        </div>

                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="date" id="materialFormCardNameEx" required name="date-nascimento" class="form-control">
                        </div>

                        <!-- Material input email -->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="materialFormCardEmailEx" required name="email" class="form-control">
                            <label for="date-nascimento" class="font-weight-light">Seu email</label>
                        </div>

                        <!-- Material input password -->
                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="materialFormCardPasswordEx" name="senha" class="form-control">
                            <label for="materialFormCardPasswordEx" class="font-weight-light">Sua senha</label>
                        </div>

                        <div class="text-center py-4 mt-3">;
                            <button class="btn btn-cyan deep-orange darken-1" name="cadastro-usuario" type="submit">Registrar</button>
                        </div>
                    </form>
                    <!-- Material form register -->

                </div>
                <!-- Card -->
            </div>

        </div>

        <!-- Card -->
    </div>

    <?php
    include 'rodape.php';
    ?>

    <!-- FAZER AQUI A INCLUSAO DE SCRIPTS OU SEUS PROPIOS SCRIPTS -->
    <script>

    </script>

</div>
<!--Main layout-->