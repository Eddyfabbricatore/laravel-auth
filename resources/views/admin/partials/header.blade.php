<header class="bg-dark">
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}" target="_blank">Vai al sito</a>

          <form class="d-flex" action="{{ route('logout') }}" method="POST" role="search">
            @csrf
            <button class="btn btn-light" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
          </form>
        </div>
    </nav>
</header>
