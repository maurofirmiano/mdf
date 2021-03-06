<?php
  session_start();
 $sessao = $_SESSION['usuario'];
    if (!isset($_SESSION['usuario']) == true){
    header("Location:index.html"); 
    }  
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Header-Blue.css"> 
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Tables-1.css">
    <link rel="stylesheet" href="assets/css/Pricing-Tables.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="pricing-table" style="padding: 0px;"></section>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    <a class="navbar-brand" href="#">Moço da Fruta</a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#">Usuário: <b><?php echo $sessao;?></b></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group">
                                <label for="search-field"><i class="fa fa-search"></i></label>
                                <input class="form-control search-field" type="search" name="search" id="search-field"></div>
                        </form><span class="navbar-text"> </span>
                        <a class="btn btn-light action-button" role="button" href="logout.php">Sair</a>
                    </div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col">
                        <section class="pricing-table" style="padding: -15px;">
                            <div class="container">
                                <div class="pricing-area text-center">
                                    <div class="row">
                                        <div class="col-sm-4 plan price red wow fadeInDown">
                                            <a href="pedido.php">
                                            <ul class="list-group">
                                                <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 257px;"><i class="fa fa-shopping-basket" style="font-size: 101px;width: 126px;margin: 20px 10px 10px;height: 101px;"></i>
                                                    <h1 style="height: 48px;margin: 40px 10px 10px;">Pedidos</h1><span class="price"></span></li>
                                            </ul>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 plan price green wow fadeInDown">
                                            <a href="cliente.php">
                                            <ul class="list-group">
                                                <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 257px;"><i class="fa fa-user" style="font-size: 101px;width: 126px;margin: 20px 10px 10px;"></i>
                                                    <h1 style="margin: 40px 10px 10px;height: 48px;">Clientes</h1>
                                                </li>
                                            </ul>
                                        </a>
                                        </div>
                                        <div class="col-sm-4 plan price yellow wow fadeInDown">
                                            <a href="produto.php">
                                            <ul class="list-group">
                                                <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 257px;"><i class="fa fa-barcode" style="font-size: 101px;width: 126px;margin: 20px 10px 10px;"></i>
                                                    <h1 style="margin: 40px 10px 10px;height: 48px;">Produtos</h1>
                                                </li>
                                            </ul>
                                        </a>
                                        </div>
                                        <div class="col-sm-6 col-md-3 plan price default wow fadeInDown">
                                            <ul class="list-group">
                                                <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 245px;"><i class="fa fa-file-pdf-o" style="font-size: 80px;height: 81px;"></i>
                                                    <h1 style="margin: 20px 0px 0px;">Relatório</h1><span class="price">Mensal</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-3 plan price default wow fadeInDown">
                                            <ul class="list-group">
                                                <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 245px;"><i class="fa fa-file-pdf-o" style="font-size: 80px;"></i>
                                                    <h1 style="margin: 20px 0px 0px;">Relatório</h1><span class="price">Semanal</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-3 plan price red wow fadeInDown">
                                            <ul class="list-group">
                                                <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 245px;"><i class="fa fa-edit" style="font-size: 80px;"></i>
                                                    <h1 style="margin: 20px;">Devedores</h1><span class="price">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="price"></span></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-3 plan price default wow fadeInDown">
                                            <ul class="list-group">
                                                <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 245px;"><i class="fa fa-file-pdf-o" style="font-size: 80px;"></i>
                                                    <h1 style="margin: 20px 0px 0px;">Balanço</h1><span class="price">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Pricing-Tables-1.js"></script>
    <script src="assets/js/Pricing-Tables.js"></script>
</body>

</html>