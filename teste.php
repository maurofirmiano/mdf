
<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<form>
		<input type="text" name="prod" id="prod"  placeholder="Produto" /></br>
		<input type="text" name="quant" id="quant"  placeholder="Quantidade"/><br>
		
	<button type="button" onclick="alterar_div()">Salvar</button>
	</form>
	<div id="conteudo"></div>
                                            
								
</body>
	
	<script type="text/javascript">

	function alterar_div() {
	  $.ajax({
	    type: "POST",
	    url: "processaped.php",
	    data: {
	      produto: $('#prod').val(),
	      quantidade: $('#quant').val()
	      
	    },
	    success: function(data) {
	      $('#conteudo').html(data);
	    }
	  });
	}
	</script>
</html>