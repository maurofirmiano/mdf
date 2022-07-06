<?php
  session_start();
 $sessao = $_SESSION['usuario'];
    if (!isset($_SESSION['usuario']) == true){
    header("Location:index.html"); 
    }  
            include_once('conexao.php');
            $sql_cliente = "SELECT nome_cliente, tel_cliente FROM tb_cliente";
            
            $res_cliente = mysqli_query($conexao,$sql_cliente);
            
?>
<!DOCTYPE html>
<html ng-app="pedido">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pedidos</title>
    <script src="assets/angular/angular.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Tables.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script>
        angular.module("pedido", []);
        angular.module("pedido").controller("pedidoCtrl", function($scope){
            $scope.app = "Pedidos";

            $scope.pedidos = [];
            
            $scope.adicionarPedido = function(pedido){
                $scope.pedidos.push(pedido);
                delete $scope.pedido;
                $scope.pedidoForm.$setPristine();
            };

            $scope.apagarPedidos = function(pedidos){
                $scope.pedidos = pedidos.filter(function (pedido){
                    if (!pedido.selecionado) return pedido; 
                })
            }
            $scope.isPedidoSelecionado = function(pedidos){
                return pedidos.some(function(pedido){
                    return pedido.selecionado;
                });
            }
            $scope.ordenarPor = function(campo){
                $scope.criterioDeOrdenacao = campo;

            };
        });
    </script>
</head>

<body ng-controller = "pedidoCtrl" style="/*background-color: rgb(238,241,247);*/">
    <section class="pricing-table" style="padding: 0px;"></section>
    <div>
        <div class="header-blue" style="height: 92px;">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="home.html">Moço da Fruta</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Usuário: <b><?php echo $sessao;?></b></a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </li>
                        </ul>
                        
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group">
                                <label for="search-field"><i class="fa fa-search"></i></label>
                                <input class="form-control search-field" type="search" name="search" id="search-field">
                            </div>
                        </form>
                        <a class="btn btn-light action-button" role="button" href="home.php">Voltar</a>
                        <a class="btn btn-light action-button" role="button" href="logout.php">Sair</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container profile profile-view" data-aos="zoom-in" data-aos-once="true" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button><span>Pedido salvo com sucesso</span>
                </div>
            </div>
        </div>
        <form method="POST" action="validaPedido.php">
            <div class="form-row profile-row">
                <div class="col-md-4 align-items-center align-content-center relative">
                    <div class="avatar">
                        <div class="avatar-bg center"><i class="fa fa-shopping-basket" style="font-size: 173px;color: #e24f43;"></i></div>
                    </div>
                </div>

                <div class="col-md-8">
                    <h1 style="color: #070707;">Pedido</h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-8">
                            <div class="form-group">
                                <label style="color: #0a0a0a;">Cliente</label>
                              
                                <select class="form-control form-control-lg">
                                    <option>Clique para selecionar o cliente</option>
                                    <?php            
                                            while ($resultado = mysqli_fetch_array($res_cliente)) {
                                    ?>            
                                                <option value="teste"><?php echo $resultado['nome_cliente'];?></option>


                                    <?php } ?>

                                </select>
                                

                                </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                                       
                            <div class="form-group">
    

                                <label style="color: #0a0a0a;">Telefone</label>
                                                                       
                                        <input class="form-control form-control-lg" type="text" inputmode="tel" name="tel_cliente" autocomplete="off"/>
                                   
                                </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-7">
                            <div class="form-group">
                                <label style="color: #0a0a0a;">Produto</label>
                                <input class="form-control form-control-lg" type="text" autofocus="" name="produto" ng-model="pedido.produto" placeholder="Produto" ng-required="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="form-group">
                                <label style="color: #0a0a0a;">Quantidade</label>
                                <input class="form-control form-control-lg" type="text" inputmode="numeric" name="quantidade" ng-model="pedido.quantidade" placeholder="Quantidade" ng-required="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group"><label style="color: #0a0a0a;">Adicionar</label>
                            <button name="atn_adc" class="btn btn-primary btn-lg form-btn" style=" border-radius: 3%;" ng-click="adicionarPedido(pedido)" ng-disabled="pedidoForm.$invalid">+</button>
                            <button name="atn_adc" class="btn btn-danger btn-lg form-btn" style=" border-radius: 3%;" ng-click="apagarPedidos(pedidos)" ng-show="isPedidoSelecionado(pedidos)">-</button>
                        </div>
                    </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-12 col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Selecionar</th>
                                            <th>Descrição</th>
                                            <th>Quantidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-class="{selecionado: pedido.selecionado}" ng-repeat= "pedido in pedidos | filter:criterioDeBusca">
                                            <td> <input type="checkbox" ng-model="pedido.selecionado"/></td>
                                            <td>{{pedido.produto}}</td>
                                            <td>{{pedido.quantidade}}</td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right">
                            <button name="btn_salvar" class="btn btn-primary form-btn" type="submit">SALVAR</button>
                            <button name="btn_cancelar" class="btn btn-danger form-btn" type="reset">CANCELAR</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
        <div ng-show="pedidoForm.produto.$invalid && pedidoForm.produto.$dirty" class="alert alert-danger">
                Preencha o campo produto!
            </div>
            <div ng-show="pedidoForm.quantidade.$error.required && pedidoForm.quantidade.$dirty" class="alert alert-danger">
                Preencha o campo quantidade!
            </div>
        
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/Pricing-Tables.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>