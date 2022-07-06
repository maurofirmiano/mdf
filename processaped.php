<?php
		
			$prod = $_POST['produto'];
			$quant = $_POST['quantidade'];

			$descricao  = array('cebola');
			$quantidade = array('10');

			 array_push($descricao, $prod);
			 array_push($quantidade, $quant);
?>	
			<table>
                                    <thead>

                                        <tr>
                                            <th>Descrição</th>
                                            <th>Quantidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        	<?php foreach ($descricao as $desc) {
                                        			foreach ($quantidade as $quan) {
                                        				
                                        			
                                        	?>			
                                        				<tr>
															<td><?php echo $desc;?></td>
			                                         		<td><?php echo $quant;?></td>
			                                            </tr>
                                        	<?php		}
                                        		
                                        	}
                                        		
                                        	?>
                                                                                                             
                                    </tbody>
                                </table>
			