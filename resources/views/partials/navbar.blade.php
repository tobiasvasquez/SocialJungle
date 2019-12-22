<nav class="navbar navbar-expand-md  shadow-sm bg-dark">
    <div class="container">
            <img class="_logo" src="/img/logoOk.svg" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                </li>
                @endif
                @else
                <img src="{{asset('storage/avatar/'. Auth::user()->avatar)}}" alt="" class="rounded">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url ('post') }}">{{ __('Inicio') }}</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link text-white" href="{{url('temasreg')}}">{{ __('Temas') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('perfil')}}">{{ __('Perfil') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} {{ Auth::user()->apellido}}<span class="caret"></span>
                        
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('configuracion')}}">Configuracion</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
