<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 py-3 shadow">
    <div class="container-fluid">
        <a class="navbar-brand fw-extrabold text-uppercase text-white tracking-wider" href="#">
            <span class="text-primary">My</span>App
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-white-50 active px-3" href="{{ route('homepage') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-primary btn-sm px-3 py-2 mx-2 my-2 my-lg-0 fw-semibold shadow-sm rounded-pill text-white" href="{{ route('articles.create') }}">
                        ➕ Crea articolo
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white-50 px-3" href="{{ route('articles.index') }}">I nostri articoli</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
