<nav>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3  mb-4">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img class="bi me-2" width="200" height="32" src="{{ asset('img/Logo.png') }}" alt="">
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link {{ Request::is("/") ? "activated" : "" }}" href="/"  >Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is("destinations") ? "activated" : "" }}" href="/destinations" >Explore</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is("categories") ? "activated" : "" }}" href="/categories">Category</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is("about") ? "activated" : "" }}" href="/about">About</a></li>
                <li>
                    <div class="btn-primary container">
                        <a href="/login" class="nav-link text-white">Sign In</a>
                    </div>
                </li>
            </ul>
        </header>
    </div>
</nav>