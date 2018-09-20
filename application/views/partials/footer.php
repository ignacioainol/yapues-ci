	<!--[INICIO SESION]-->
	<div class="modal fade" id="inicio_sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      	<h5 class="modal-title">Inicio de Sesión</h5>
	      	<div id="messages"></div>
	        <form id="loginForm" action="login" method="post">
			  <div class="form-group">
			    <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="Ingrese su correo">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Ingresa tu Contraseña">
			  </div>
			  <div class="btnLogin">
			  	<small><a href="">¿ Olvidaste tu contraseña ?</a></small>
			  	<input type="submit" class="btn btn-danger btnEnter" value="Entrar">
			  	<p>¿ No tienes cuenta ? <a href="<?= base_url() ?>registro">Crear cuenta</a></p>
			  </div>
			</form>
	      </div>
	    </div>
	  </div>
	</div>
	<!--[/INICIO SESION]-->

	<script src="<?= base_url() ?>public/js/jquery.js"></script>
	<script src="<?= base_url() ?>public/js/vue.js"></script>
	<script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>public/js/mainVue.js"></script>
	<script src="<?= base_url() ?>public/js/main.js"></script>
	<script src="<?= base_url() ?>public/js/sweet-modal-vue/dist/sweet-modal.js"></script>
</body>
</html>