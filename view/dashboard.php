<?php 
require_once('superior.php');
?>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="overview-wrap">
						<h2 class="title-1">Ponto</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="table-responsive table--no-card m-b-30">
						<table class="table table-borderless table-striped table-earning" id="tabelaPontoMesAtual">
							<thead>
								<tr>
									<th>Data</th>
									<th>Funcionario ID</th>
									<th class="text-right">Entrada</th>
									<th class="text-right">Saida para Almoço</th>
									<th class="text-right">Volta do Almoço</th>
									<th class="text-right">Saida</th>
								</tr>
							</thead>
							<tbody id="pontoMesAtual">
								<tr>
									<td>01/02/2021</td>
									<td>100398</td>
									<td class="text-center">09:00</td>
									<td class="text-center">12:00</td>
									<td class="text-center">13:01</td>
									<td class="text-center">19:55</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require_once("inferior.php");
?>

