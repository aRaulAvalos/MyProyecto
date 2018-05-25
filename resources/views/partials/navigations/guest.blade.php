@if(Request::url()==url('/login'))
    <li><a class="nav-link" href="{{ route('register') }}">{{ __("Registrarme") }}</a></li>
@else
    <li><a class="nav-link" href="{{ route('login') }}">{{ __("Iniciar sesión") }}</a></li>
@endif

