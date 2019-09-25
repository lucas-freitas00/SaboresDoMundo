<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style>
        @media only screen and (max-width: 600px) {
            p#icon_fade_mobile {
                display: none;
            }
        }

        form#form_principal {
            margin: 2% !important;
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        .bold-1 {
            font-weight: 500;
        }

        .list-group-item.active {
            background-color: #e64a19 !important;
            border-color: #e64a19 !important;
        }

        <style>.form-dark .font-small {
            font-size: 0.8rem;
        }

        .form-dark .md-form label {
            color: #fff;
        }

        .form-dark input[type=email]:focus:not([readonly]) {
            border-bottom: 1px solid #FF8C00;
            -webkit-box-shadow: 0 1px 0 0 #FF8C00;
            box-shadow: 0 1px 0 0 #FF8C00;
        }

        .form-dark input[type=email]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #FF8C00;
            -webkit-box-shadow: 0 1px 0 0 #FF8C00;
            box-shadow: 0 1px 0 0 #FF8C00;
        }

        .form-dark input[type=password]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark .modal-header {
            border-bottom: none;
        }

        #login {
            color: #FF8C00;
        }

        .form-dark .font-small {
            font-size: 0.8rem;
        }

        .form-dark .md-form label {
            color: #fff;
        }

        .form-dark input[type=email]:focus:not([readonly]) {
            border-bottom: 1px solid #FF8C00;
            -webkit-box-shadow: 0 1px 0 0 #FF8C00;
            box-shadow: 0 1px 0 0 #FF8C00;
        }

        .form-dark input[type=email]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #FF8C00;
            -webkit-box-shadow: 0 1px 0 0 #FF8C00;
            box-shadow: 0 1px 0 0 #FF8C00;
        }

        .form-dark input[type=password]:focus:not([readonly])+label {
            color: #fff;
        }

        .form-dark .modal-header {
            border-bottom: none;
        }
    </style>
    </style>
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <a class="navbar-brand waves-effect" href="#">
                    <strong class="bold-1" style="color: #f4511e;">Sabores do Mundo</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect bold-1" href="#">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect bold-1" href="#" target="">Novas Receitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect bold-1" href="#" target="">Mais Vistas</a>
                        </li>
                    </ul>
                </div>

                <form class="form-inline" id="busca_principal" style="padding: 0px!important;">
                    <input class="form-control" id="busca_principal" type="text" placeholder="Pesquise Aqui" aria-label="Pesquise Aqui">
                </form>

                <div class="collapse navbar-collapse" align="right">
                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link waves-effect" target="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <a class="logo-wrapper waves-effect">
                <p id="icon" style="text-shadow: rgb(179, 32, 16) 0px 0px 0px, rgb(181, 33, 16) 1px 1px 0px, rgb(183, 33, 17) 2px 2px 0px, rgb(186, 33, 17) 3px 3px 0px, rgb(188, 34, 17) 4px 4px 0px, rgb(190, 34, 17) 5px 5px 0px, rgb(193, 35, 17) 6px 6px 0px, rgb(195, 35, 18) 7px 7px 0px, rgb(198, 36, 18) 8px 8px 0px, rgb(200, 36, 18) 9px 9px 0px, rgb(202, 37, 18) 10px 10px 0px, rgb(205, 37, 18) 11px 11px 0px, rgb(207, 37, 19) 12px 12px 0px, rgb(210, 38, 19) 13px 13px 0px, rgb(212, 38, 19) 14px 14px 0px, rgb(214, 39, 19) 15px 15px 0px, rgb(217, 39, 20) 16px 16px 0px, rgb(219, 40, 20) 17px 17px 0px, rgb(222, 40, 20) 18px 18px 0px, rgb(224, 40, 20) 19px 19px 0px, rgb(226, 41, 20) 20px 20px 0px, rgb(229, 41, 21) 21px 21px 0px, rgb(231, 42, 21) 22px 22px 0px, rgb(233, 42, 21) 23px 23px 0px, rgb(236, 43, 21) 24px 24px 0px, rgb(238, 43, 21) 25px 25px 0px, rgb(241, 43, 22) 26px 26px 0px, rgb(243, 44, 22) 27px 27px 0px, rgb(245, 44, 22) 28px 28px 0px, rgb(248, 45, 22) 29px 29px 0px, rgb(250, 45, 23) 30px 30px 0px, rgb(253, 46, 23) 31px 31px 0px; font-size: 58px; color: rgb(255, 255, 255); height: 139px; width: 139px; line-height: 139px; border-radius: 17%; text-align: center; background-color: rgb(255, 46, 23);"> SM </p>
            </a>


            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fas fa-stream mr-3"></i>Pagina Inicial
                </a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-star mr-3"></i>Receitas Favoritas</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Perfil</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-cogs mr-3"></i>Configurações</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-sign-out-alt mr-3"></i>Sair</a>

                <a href="" class="list-group-item list-group-item-action waves-effect" data-toggle="modal" data-target="#darkModalForm"><i class="fas fa-stream mr-3"></i>Cadastrar-se</a>
                <a href="" class="list-group-item list-group-item-action waves-effect" data-toggle="modal" data-target="#darkModalForm"><i class="fas fa-stream mr-3"></i>Fazer Login</a>
            </div>
        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download
                MDB
                <i class="fas fa-download ml-2"></i>
            </a>
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
            </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fab fa-facebook-f mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fab fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fab fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fab fa-google-plus mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fab fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fab fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fab fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fab fa-codepen mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- Modal -->
    <div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog form-dark" role="document">
            <!--Content-->
            <div class="modal-content card card-image" style="background-image: url('images/pagina_principal2.jfif');">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Cadastro</strong></h3>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <!--Body-->

                        <div class="md-form mb-5">
                            <input type="email" id="Form-email5" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-email5">Nome</label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="email" id="Form-email5" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-email5">E-mail</label>
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" id="Form-pass5" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-pass5">Senha</label>

                        </div>

                        <!--Grid row-->
                        <div class="row d-flex align-items-center mb-4">

                            <!--Grid column-->
                            <div class="text-center mb-3 col-md-12">
                                <button type="button" class="btn btn-amber">Cadastrar</button>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <p class="font-small white-text d-flex justify-content-end">Já é cadastrado? <a href="#" class="orange-text ml-1 font-weight-bold">
                                        Login</a></p>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </div>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog form-dark" role="document">
            <!--Content-->
            <div class="modal-content card card-image" style="background-image: url('images/pagina_principal.jfif');">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Entrar</strong></h3>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <!--Body-->
                        <div class="md-form mb-5">
                            <input type="email" id="Form-email5" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-email5">E-mail</label>
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" id="Form-pass5" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-pass5">Senha</label>

                        </div>

                        <!--Grid row-->
                        <div class="row d-flex align-items-center mb-4">

                            <!--Grid column-->
                            <div class="text-center mb-3 col-md-12">
                                <button type="button" class="btn btn-amber">Entar</button>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <p class="font-small white-text d-flex justify-content-end">Não tem conta? <a href="#" class="orange-text ml-1 font-weight-bold">
                                        Cadastre-se</a></p>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </div>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog form-dark" role="document">
            <!--Content-->
            <div class="modal-content card card-image" style="background-image: url('images/pagina_principal2.jfif');">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <!--Header-->
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Cadastro</strong></h3>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <!--Body-->

                        <div class="md-form mb-5">
                            <input type="email" id="Form-email5" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-email5">Nome</label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="email" id="Form-email5" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-email5">E-mail</label>
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" id="Form-pass5" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-pass5">Senha</label>

                        </div>

                        <!--Grid row-->
                        <div class="row d-flex align-items-center mb-4">

                            <!--Grid column-->
                            <div class="text-center mb-3 col-md-12">
                                <button type="button" class="btn btn-amber">Cadastrar</button>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <p class="font-small white-text d-flex justify-content-end">Já é cadastrado? <a href="#" class="orange-text ml-1 font-weight-bold">
                                        Login</a></p>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </div>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->

    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
    </script>

    <!-- Charts -->
    <script>
        $(document).ready(function() {
            $('footer').hide();

            if ($(window).width() < 680) {
                $('form#busca_principal').addClass('col-sm-12');
            }

            // console.log($(window).width());
        });
    </script>


</body>

</html>