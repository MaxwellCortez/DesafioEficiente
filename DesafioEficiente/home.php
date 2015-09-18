<?php
?>

<html>
<head>

</head>
	<body>

		<div class="container-fluid">
			<div class="row-fluid offset1">
				<div class="center">
			
				<?php
					$crud = new Crud ();
					try {
					$data = $crud->getCarros ();
					}catch (Exception $e){
						echo "Problemas com o banco";
					}
					$teste = "";
					for($i = 0; $i < count ( $data ); $i ++) {
						$teste .= '<div class="wrapper">';
						$teste .= '<img src='.$data [$i] ['img'].'>';
						$teste .= '<div class="content">';
						$teste .= '<div class="text_area">';
						$teste .= ''.$data [$i] ['model'].'';
						$teste .= '</div>';
						$teste .= '</div>';
						$teste .= '</div>';
						
					}
					
					echo $teste;
				?>
					
				</div>
			</div>
		</div>
	
	</body>
</html>