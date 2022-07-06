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
    <title>Clientes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Tables.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    
</head>

<body style="/*background-color: rgb(238,241,247);*/">
    <section class="pricing-table" style="padding: 0px;"></section>
    <div>
        <div class="header-blue" style="height: 92px;">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="home.html">Moço da Fruta</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#">Usuário: <b><?php echo $sessao;?></b></a></li>
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
                <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
            </div>
        </div>
        <form method="POST" action="validaCliente.php">
            <div class="form-row profile-row">
                <div class="col-md-4 align-items-center align-content-center relative">
                    <div class="avatar">
                        <div class="avatar-bg center"><i class="fa fa-user" style="font-size: 173px;color: #e24f43;"></i></div>
                    </div>
                </div>

                <div class="col-md-8">
                    <h1 style="color: #070707;">Cadastro de Clientes</h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label style="color: #0a0a0a;">Cliente</label>
                              
                        <input style="border:none; border-bottom: 1px solid #dfe7f1; border-radius: 0; box-shadow: none;" class="form-control form-control-lg" type="text" autofocus="" name="nome_cliente" placeholder="Digite o nome ou razão social" required>
                                </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">                                      
                            <div class="form-group">
                                <label style="color: #0a0a0a;">Telefone</label>                                                                       
                                        <input style="border:none; border-bottom: 1px solid #dfe7f1; border-radius: 0; box-shadow: none;" id="telefone" class="form-control form-control-lg" type="text"  name="tel_cliente" autocomplete="off" placeholder="Telefone com DDD" required />
                                </div>
                                
                        </div>

                        <div class="col-sm-12 col-md-6">                                      
                            <div class="form-group">
                                <label style="color: #0a0a0a;">CNPJ/CPF</label>                                                                       
                                        <input style="border:none; border-bottom: 1px solid #dfe7f1; border-radius: 0; box-shadow: none;" class="form-control form-control-lg" type="text" name="doc_cliente" autocomplete="off" placeholder="Digite o CNPJ ou CPF" />
                                </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-10">
                            <div class="form-group">
                                <label style="color: #0a0a0a;">Endereço</label>
                                <input style="border:none; border-bottom: 1px solid #dfe7f1; border-radius: 0; box-shadow: none;" class="form-control form-control-lg" type="text" autofocus="" name="end_cliente"  placeholder="Nome da rua ou avenida" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label style="color: #0a0a0a;">Número</label>
                                <input style="border:none; border-bottom: 1px solid #dfe7f1; border-radius: 0; box-shadow: none;" class="form-control form-control-lg" type="text" inputmode="numeric" name="num_end_cliente" placeholder="nº" required>
                            </div>
                        </div>
                    
                    </div>
                    

                    <div class="form-row">
                        <div class="col-sm-12 col-md-8">
                            <div class="form-group">
                                <label style="color: #0a0a0a;">Complemento</label>
                                <input style="border:none; border-bottom: 1px solid #dfe7f1; border-radius: 0; box-shadow: none;" class="form-control form-control-lg" type="text" autofocus="" name="comp_end_cliente"  placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label style="color: #0a0a0a;">Município</label>
                                <input style="border:none; border-bottom: 1px solid #dfe7f1; border-radius: 0; box-shadow: none;"class="form-control form-control-lg" type="text" inputmode="numeric" name="mun_end_cliente" placeholder="" required>
                            </div>
                        </div>
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
        </form>
       
        
    </div>
    <script type="text/javascript" src="assets/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/Pricing-Tables.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>