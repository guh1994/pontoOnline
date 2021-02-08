<?php 
require_once('superior.php');
?>

<div class="main-content" onload="mostraHora()">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong>Registro</strong>
						<small> Ponto</small>
					</div>
					<!-- CORPO DO CARD DE TELA DE CADASTRO DO CLIENTE-->
					<div class="card-body card-block" >
						<form action="">
							<div class="row form-group">
								<div class="col col-md-2">
									<label class="form-control-label">Data</label>
								</div>
								<div class="col col-md-4">
									<p class="form-control-static" id="data" name="data"></p>
								</div>
								<div class="col col-md-2">
									<label class="form-control-label">Hora</label>
								</div>
								<div class="col col-md-4">
									<p class="form-control-static" id="hora" name="hora"></p>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-1">
									<label for="text-input" class=" form-control-label" >Cod</label>
								</div>
								<div class="col-12 col-md-3">
									<input type="number" id="text-input" name="text-input" placeholder="Código" class="form-control">
								</div>
								<div class="col-12 col-md-1">
									<label for="text-input" class=" form-control-label">Nome</label>
								</div>
								<div class="col-12 col-md-4">
									<p class="form-control-static" id="nomeFunc">Carla Fabiana Nascimento Borges da Silva</p>
								</div>
								
								<div class="col-12 col-md-3">
									<select name="" id="" class="form-control">
										<option value="Entrada">Entrada</option>
										<option value="Almoço">Almoço</option>
										<option value="Retorno">Retorno</option>
										<option value="Saida">Saída</option>
									</select>
								</div>
							</div>
							<div class="card-footer text-center">
								<button type="button" class="btn btn-success btn-sm" id="registraPonto">
									<i class="fa fa-floppy-o"></i> Registrar
								</button>
								<button type="reset" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i> Limpar
								</button>
							</div>
						</form>
					</div>
					<!--FIM DO CORPO DO CARD DE CADASTRO DE CLIENTE -->
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php
require_once("inferior.php");
?>
