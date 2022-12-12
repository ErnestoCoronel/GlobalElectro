<ul>
    <li><a href="{{ route('welcome') }}">Home</a></li>
    <li><a href="{{ route('posts.index') }}">Blog</a></li>
    <li><a href="{{ route('contacto') }}">Contacto</a></li>
    <li><a href="{{ route('acercademifijo') }}">Acerca de </a></li>
    @guest
    <li><a href="{{ route('register') }}">Registrar </a></li>
    <li><a href="{{ route('login') }}">Login </a></li>
    @endguest

    @auth


    <li><a href="{{ route('empresa') }}">Empresa </a></li>
    <li><a href="{{ route('sucursal') }}">Sucursal </a></li>
    <li><a href="{{ route('empleado') }}">Empleados </a></li>

        <h1>{{ Auth::user()->name}}</h1>
        <form action="{{ route('logout')}}" method="POST">
            @csrf

            <button>Logout</button>

        </form>
    
    @endauth
</ul>

