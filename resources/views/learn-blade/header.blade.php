<header class="bg-dark text-white py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{ url('/') }}" class="navbar-brand text-white fw-bold">Your Logo</a>
        <nav>
            <ul class="nav">
                @foreach ($links as $link)
                <li class="nav-item"><a href="{{ url('/'.$link) }}" class="nav-link text-white">{{$link}}</a></li>
                @endforeach
                @auth
                    <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link text-white">Dashboard</a></li>
                    <li class="nav-item">
                        <form action="" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-light">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a href="" class="btn btn-outline-light">Login</a></li>
                    <li class="nav-item"><a href="" class="btn btn-light text-dark">Register</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</header>
