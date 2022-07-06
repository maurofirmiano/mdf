<?php 
//Recebe as variaveis do formulario de login
  $usuario_login = $_POST['usuario'];
  $senha_login = $_POST['senha'];
  $entrar = $_POST['entrar'];

//Conecta ao banco de dados 
include_once('conexao.php');


//Executa a validação dos dados ao clicar no botao entrar   
    if (isset($entrar)) {
      $sql = "SELECT usuario, senha FROM login WHERE usuario='$usuario_login' AND senha='$senha_login'";     
      $verifica = mysqli_query($conexao, $sql) or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          
          echo "<script>
                  $('#myModal').modal('show')
                  $('#myModal').on('hide.bs.modal', function () { window.location.href = 'index.html'; })
                </script>";

        }else{

      session_start();
     
          $_SESSION['usuario'] = $usuario_login;

          setcookie("login",$usuario);
          header("Location:home.php");
        }
    }
?>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      
</head>
<body>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alerta!</h4>
        </div>
        <div class="modal-body">
          <p><center>Login e/ou senha incorretos!</center></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

        </div>
      </div>
      
    </div>
  </div>
</body>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</html>



