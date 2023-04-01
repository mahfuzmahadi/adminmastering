<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


<style>
    .navbar {
        background-color: #222;
        background-image: linear-gradient(to right, #222, #333);
        font-family: 'Open Sans', sans-serif;
    }

    .navbar-brand {
        font-size: 24px;
        font-weight: bold;
        text-shadow: 1px 1px 2px #555;
    }

    .navbar-nav .nav-link {
        color: #fff;
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: #ffc107;
    }

    .dropdown-menu {
        background-color: #333;
        border: none;
    }

    .dropdown-item {
        color: #fff;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover {
        background-color: #ffc107;
    }
</style>


<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.blog') }}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item">
                        @auth
                            <a href="{{ url('/indexadmin') }}" class="nav-link">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        @endauth
                    </li>
                @endif
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    @if (Auth::check())
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                    class="dropdown-item">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </div>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>   