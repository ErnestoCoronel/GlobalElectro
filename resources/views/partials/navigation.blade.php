<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid " >
        <a class="navbar-brand" href="{{ route('welcome') }}">GLOBALELECTRO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
       </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ayuda</a>
              </li>
            @guest
              <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cuenta
            </a>
            <ul class="dropdown-menu">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Registrar </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login </a>
            </li>

            </ul>
            </li>
            @endguest 
            @auth
            <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">Post </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('empresa') }}">Empresa </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('sucursal') }}">Sucursal </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('empleado') }}">Empleados </a>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
            <form action="{{ route('logout')}}" method="POST">
                
                @csrf
  
                    <button class="btn btn-light">Logout</button>
                     <button class="btn btn-light">Mi cuenta</button>
  
            </form>


            </ul>
            </li>

            @endauth
            </ul>
          </div>
      </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


