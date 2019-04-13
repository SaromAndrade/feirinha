@extends('layouts.mainTable')

@section('content')
<section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border">
                        <h3 class="bg-gray p-4">Registrar</h3>
                        <form action="{{ route('auth.registrando') }}" method="post">
                            <fieldset class="p-4">
                                <input type="email" placeholder="Email*" class="border p-3 w-100 my-2"
                                name="email">
                                <input type="password" placeholder="Password*" class="border p-3 w-100 my-2"
                                name="password">
                                <input type="text" placeholder="Nome Completo*" class="border p-3 w-100 my-2"
                                name="name">
                                <input type="Date" placeholder="Data de Nascimento" class="border p-3 w-100 my-2"
                                name="data_nasc" >
                                 <input type="text" placeholder="CPF*" class="border p-3 w-100 my-2 cpf"
                                name="cpf" >
                                 <input type="hidden" name="remember_token" value="{{csrf_token()}}">
                                 <input type="hidden" name="role_id" value="2">
                                <div class="loggedin-forgot d-inline-flex my-3">
                                        <input type="checkbox" id="registering" class="mt-1">
                                        <label for="registering" class="px-2">Ao se registrar, você aceita nossos <a class="text-primary font-weight-bold" href="terms-condition.html">Termos e Condições</a></label>
                                </div>
                                <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Registrar</button>
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