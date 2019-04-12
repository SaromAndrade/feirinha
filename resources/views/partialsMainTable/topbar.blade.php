<section>
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="images/logoRecortada.jpeg" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('aboutus') }}">Sobre</a>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link" href="{{ route('contactus') }}">Contato</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto main-nav ">
                            <!-- Authentication Links -->
                            @guest
                            
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="{{ route('auth.login') }}">Entre</a>
                                </li>
                                {{-- <li><a href="{{ route('auth.register') }}">Register</a></li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('auth.register') }}">Crie a sua conta</a>
                                </li>
                            </ul>
                            @else
                            <ul class="nav">
                                <li class="nav-item">
                                <a class="nav-link text-white add-button" href="{{ route('adlisting') }}"> Divulgar</a>
                            </li>
                        </ul>
                            <ul class="nav">
                                <li class="nav-item ">
                                <a class="nav-link" href="{{ route('profile') }}">{{ Auth::user()->name }} </a>
                            </li>
                            
                               {{-- <li class="nav-item">
                                    <a href="/admin/home" class="nav-link  dropdown dropdown-slide" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        
                                    </a>
                                    </li>--}}
                                </ul>
                                    <ul class="nav-item">
                                        
                                    </ul>
                            @endguest
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>