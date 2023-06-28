<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
        <a class="navbar-brand" target="_blank" href="https://www.netflix.com/"><img src="{{ Vite::asset('/resources/img/logo.png') }}" class="img-fluid" style="width: 100px; height: 100px;" alt="Logo"></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('movies') }}">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.imdb.com/" target="_blank">Rating by IMDb</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
