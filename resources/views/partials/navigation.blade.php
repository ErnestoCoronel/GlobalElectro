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
        <a href='#'>{{ Auth::user()->name}}</a>
        <form action="{{ route('logout')}}" method="POST">
            @csrf

            <button>Logout</button>

        </form>
    @endauth
</ul>

