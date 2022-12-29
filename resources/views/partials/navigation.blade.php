<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid " >
        <a class="navbar-brand" href="{{ route('welcome') }}">GLOBALELECTRO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
       </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ayuda</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cuenta
          </a>
          @guest
          <ul class="dropdown-menu">
          <li><a href="{{ route('register') }}">Registrar </a></li>
          <li><a href="{{ route('login') }}">Login </a></li>
          @endguest  
          </ul>
        </li>
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
          </div>
      </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


