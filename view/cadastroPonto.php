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
						<small> Cliente</small>
					</div>
					<!-- CORPO DO CARD DE TELA DE CADASTRO DO CLIENTE-->
					<div class="card-body card-block">
						<form action="">
							<div class="row form-group">
								<div class="col-12 col-md-2">
									<label for="text-input" class=" form-control-label">Nome</label>
								</div>
								<div class="col-12 col-md-10">
									<input type="text" id="text-input" name="text-input" placeholder="Nome" class="form-control">
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