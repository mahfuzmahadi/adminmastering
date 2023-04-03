<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


<style>
    .navbar {
        background-image: url('https://i.ibb.co/y8w1dFK/Download-Mountains-at-Night-Landscape-Scene-for-free.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Helvetica Neue', sans-serif;
  
    }

    .navbar-brand {
        font-size: 24px;
        font-weight: bold;
        text-shadow: 1px 1px 2px #ffffff;
    }

    .navbar-nav .nav-link {
        color: #fff;
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
    color: #ffc107;
    background-color: #333;
}

    .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #fff;
    text-align: left;
    background-color: #333;
    border: 1px solid #ccc;
    border-radius: 0.25rem;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.175);
}

.dropdown-menu-right {
    right: 0;
    left: auto;
}

.dropdown-toggle:focus+.dropdown-menu {
    display: block;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #fff;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
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
                    <a class="nav-link"   href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{ route('frontend.allproduct') }}">Shop</a>
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