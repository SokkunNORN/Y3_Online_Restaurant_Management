<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center logo-wrap">
                <div id="fh5co-logo"><a href="/">Online Restaurant Management<span>.</span></a></div>
            </div>
            <div class="col-xs-12 text-center menu-1 menu-wrap">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/menu">Menu</a></li>
                    <li class="has-dropdown">
                        <a href="/gallery">Gallery</a>
                        <ul class="dropdown">
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Coffees</a></li>
                        </ul>
                    </li>
                    <li><a href="/reservation">Reservation</a></li>
                    <li><a href="/about">About</a></li>
                    <li class="active"><a href="/contact">Contact</a></li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="has-dropdown">
                            <a href="#">{{ Auth::user()->name }}</a>
                            <ul class="dropdown">
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </div>
</nav>