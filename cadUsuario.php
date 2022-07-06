<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário - AProf</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>  
<body>
  <div class="container">
    <div class="row">
      <div class="col">
      </div>
      <div class="col">
      
        <form action="validaCadUsu.php" method="POST">
 
          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome">            
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
          </div>

          <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha">
          </div>
          
            <button type="submit" class="btn btn-primary" name="cadastrar">Enviar</button>
          
        </form>
      </div>
          <div class="col">
          </div>

</body>
</html>
