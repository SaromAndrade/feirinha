@extends('layouts.mainTable')

@section('content')
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<img src="images/user/user-thumb.jpg" alt="" class="">
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{ Auth::user()->name }}</h5>
					</div>
					<!-- Dashboard Links -->
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Editar Perfil</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
				</div>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Editar Informações Pessoais</h3>
							<form action="#">
								<!-- First Name -->
								<div class="form-group">
									<label for="first-name">Primeiro Nome</label>
									<input type="text" class="form-control" id="first-name">
								</div>
								<!-- Last Name -->
								<div class="form-group">
									<label for="last-name">Último Nome</label>
									<input type="text" class="form-control" id="last-name">
								</div>
								<div class="form-group">
									<label for="comunity-name">Apelido</label>
									<input type="text" class="form-control" id="comunity-name">
								</div>
								<!-- File chooser -->
								<div class="form-group choose-file d-inline-flex">
									<label for="last-name">Foto de Perfil</label>
									<i class="fa fa-user text-center px-3"></i>
									<input type="file" class="form-control-file mt-2 pt-1" id="input-file">
								 </div>
								<!-- Comunity Name -->
								
								<!-- Checkbox -->
								<!-- Zip Code -->
								<div class="form-group">
									<label for="zip-code">CEP</label>
									<input type="text" class="form-control" id="zip-code">
								</div>
								<!-- Submit button -->
								<button class="btn btn-transparent">Salvar Alterações</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Password -->
					<div class="widget change-password">
						<h3 class="widget-header user">Mudar Senha</h3>
						<form action="#">
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-password">Senha Atual</label>
								<input type="password" class="form-control" id="current-password">
							</div>
							<!-- New Password -->
							<div class="form-group">
								<label for="new-password">Nova Senha</label>
								<input type="password" class="form-control" id="new-password">
							</div>
							<!-- Confirm New Password -->
							<div class="form-group">
								<label for="confirm-password">Confirmar Nova Senha</label>
								<input type="password" class="form-control" id="confirm-password">
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent">Alterar Senha</button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

@stop