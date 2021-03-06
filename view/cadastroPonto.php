	<?php 
require_once('superior.php');
?>

<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong>Cadastro</strong>
						<small> Ponto Funcionário</small>
					</div>
					<!-- CORPO DO CARD DE TELA DE CADASTRO DO CLIENTE-->
					<div class="card-body card-block">
						<form action="">
							<div class="row form-group">
								<div class="col-12 col-md-1">
									<label for="text-input" class=" form-control-label" name="id" id="idPessoa">ID</label>
								</div>
								<div class="col-12 col-md-2">
									<input type="text" id="text-input" name="text-input" placeholder="0001" class="form-control">
								</div>
								<div class="col-12 col-md-1">
									<label for="text-input" class=" form-control-label">Nome</label>
								</div>
								<div class="col-12 col-md-4">
									<p class="form-control-static" id="nomeFunc">Carla Fabiana Nascimento Borges da Silva</p>
								</div>
								<div class="col-12 col-md-1">
									<label for="text-input" class=" form-control-label">Jornada</label>
								</div>
								<div class="col-12 col-md-3">
									<select name="" id="" class="form-control">
										<option value="Entrada">Selecione sua Jornada</option>
										
									</select>
								</div>
							</div>
							<div class="card-footer text-center">
								<button type="button" class="btn btn-success btn-sm">
									<i class="fa fa-floppy-o"></i> Cadastrar
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