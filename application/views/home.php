<div class="container-fluid" id="mainContainer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="<?= base_url() ?>"><h1 id="mainTitle">Ya Pues!</h1></a>
				<img src="<?= base_url() ?>public/img/pad.png" alt="">
			</div>
			<div class="col-md-6">
				<? if ($this->session->userdata('logged_in')): ?>
				  	<div class="col-md-12 logInLogOut">
						<a href="<?= base_url() ?>dashboard">Hola <?= $name ?>!</a>
						<a href="#"><i class="fas fa-envelope fa-lg"></i></a>
						<a href="#" data-toggle="modal" data-target="#cerrar_sesion"><i class="fas fa-power-off fa-lg"></i> Cerrar Sesión</a>
						<a href="<?= base_url() ?>form"><button class="btn btn-outline-info">Publica tu Aviso</button></a>
					</div>
				<? else: ?>
					<a href="<?= base_url() ?>form"><button class="btn btn-outline-info">Publica tu Aviso</button></a>
					<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#inicio_sesion">Iniciar Sesion <i class="fas fa-user"></i></button>
				<? endif ?>
				<!--[REGIONES]-->
				<table class="table">
				  <tbody>
				  	<? foreach($regions as $key => $val): ?>
				    <tr>
				      <td><a href="<?= base_url() . $val->region_slug_name ?>"><?= $val->region_name ?></a></td>
				    </tr>
				    <? endforeach ?>
				  </tbody>
				</table>
				<!--[/REGIONES]-->
			</div>
		</div>
	</div>
</div>