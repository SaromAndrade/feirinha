@extends('layouts.mainTable')

@section('content')

<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                     @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
                    <h3 class="bg-gray p-4">Entre agora</h3>
                    <form action="{{ route('auth.login') }}" method="post">
                        <fieldset class="p-4">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input type="text" placeholder="Nome" class="border p-3 w-100 my-2" name="email">
                            <input type="password" placeholder="Senha" class="border p-3 w-100 my-2" name="password">
                            <div class="loggedin-forgot">
                                    <input type="checkbox" id="keep-me-logged-in">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2">Mantenha-me conectado</label>
                            </div>
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Entrar</button>
                            <a class="mt-3 d-block  text-primary" href="#">Esqueceu a senha?</a>
                            <a class="mt-3 d-inline-block text-primary" href="{{ route('auth.register') }}">Crie sua conta</a>
                           <?php //bcrypt('senha')}} ?>
                            @if (session()->has('message'))
                        <div class="alert alert-warning alert-dismissible">
                            {{ session('message') }}
                        </div>
                    @endif
                        </fieldset>
                    </form>
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
