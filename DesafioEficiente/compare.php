<html>
<head>
<script type="text/javascript">

      $(document).ready(function() {
        orderTabela();
      });


         function orderTabela(){
     	 var table = $('#example').DataTable( {
        columnDefs: [
        { targets: '_all', orderable: false }
        ]
    });
    
    table.order( [[ 0, 'desc' ]] ).draw();
    } ;
    </script>


</head>
<body>
	<div class="container-fluid cbcenter">
		<div class="row-fluid">
			<form action="" method="POST">
				Carro 1 <select name="cbbox1">
				<?php
				$crud = new Crud ();
				$data = $crud->getCarros ();
				for($i = 0; $i < count ( $data ); $i ++) {
					
					echo "<option value='" . $data [$i] ["id"] . "'>" . $data [$i] ["model"] . "</option>";
				}
				?>
				</select> Carro 2 <select name="cbbox2">
					<?php
					
					for($i = 0; $i < count ( $data ); $i ++) {
						
						echo "<option value='" . $data [$i] ["id"] . "'>" . $data [$i] ["model"] . "</option>";
					}
					?>
				</select> <input type="submit" value="Comparar" name="Comparar">
			</form>
			

		</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
	<div class="span6 offset3" >
	<table cellpadding="0" cellspacing="0" border="0"
				class="table table-striped table-bordered" id="example">
				<thead>
					<tr>

					</tr>
				</thead>
				<tbody>
				<?php
				if(!empty($_POST["cbbox1"]) && isset($_POST["cbbox1"]) && isset($_POST["cbbox2"])){
				$data1 = $crud->getCarrosById($_POST["cbbox1"]);
				$data2 = $crud->getCarrosById($_POST["cbbox2"]);
				
				$table = "";
				
					$table .= '<tr class="even gradeA">';
					$table .= '<td> Modelo </td>';
					$table .= '<td>' . $data1 [0] ['model'] . '</td>';
					$table .= '<td>' . $data2 [0] ['model'] . '</td>';
					$table .= '</tr>';
					
					$table .= '<tr class="even gradeA">';
					$table .= '<td> Preco </td>';
					$table .= '<td>'. "R$ " . $data1 [0] ['price'] . '</td>';
					$table .= '<td>'. "R$ " . $data2 [0] ['price'] . '</td>';
					$table .= '</tr>';
					
					$table .= '<tr class="even gradeA">';
					$table .= '<td> HP </td>';
					$table .= '<td>' . $data1 [0] ['hp'] . '</td>';
					$table .= '<td>' . $data2 [0] ['hp'] . '</td>';
					$table .= '</tr>';
					
					$table .= '<tr class="even gradeA">';
					$table .= '<td> Consumo Etan.(Km/L) </td>';
					$table .= '<td>' . $data1 [0] ['consumptioneth'] . '</td>';
					$table .= '<td>' . $data2 [0] ['consumptioneth'] . '</td>';
					$table .= '</tr>';
					
					$table .= '<tr class="even gradeA">';
					$table .= '<td> Consumo Gas.(Km/L) </td>';
					$table .= '<td>' . $data1 [0] ['consumptiongas'] . '</td>';
					$table .= '<td>' . $data2 [0] ['consumptiongas'] . '</td>';
					$table .= '</tr>';
					
					$table .= '<tr class="even gradeA">';
					$table .= '<td> Valor medio revisoes </td>';
					$table .= '<td>'. "R$ " . $data1 [0] ['revisionavg'] . '</td>';
					$table .= '<td>'. "R$ " . $data2 [0] ['revisionavg'] . '</td>';
					$table .= '</tr>';
					
					$table .= '<tr class="even gradeA">';
					$table .= '<td> Valor medio seguro </td>';
					$table .= '<td>'. "R$ " . $data1 [0] ['insuranceavg'] . '</td>';
					$table .= '<td>'. "R$ " . $data2 [0] ['insuranceavg'] . '</td>';
					$table .= '</tr>';
					
					$table .= '<tr class="even gradeA">';
					$table .= '<td> Pontos </td>';
					$table .= '<td>'. $data1 [0] ['point'] . '</td>';
					$table .= '<td>'. $data2 [0] ['point'] . '</td>';
					$table .= '</tr>';
					
					echo $table;
				}
				
				?>
				</tbody>
			</table>
		</div>	
		</div>
		</div>

</body>
</html>