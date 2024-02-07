<header>
    <div class="container">
        <h1>Logo</h1>
        <span class="dropdown">
            <i class="bi bi-list list"></i>
            <div class="dropdown-content">
                <div class="nav-responsive">
                    <a href="#">Home</a>
                </div>
                <div class="nav-responsive">
                    <a href="#">About</a>
                </div>
                <div class="nav-responsive">
                    <a href="#">Services</a>
                </div>
                <div class="nav-responsive">
                    <a href="#">Contact</a>
                </div>
                @auth
                    <div class="nav-responsive">
                        <form action="{{ route('logout') }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn-logout">Logout</button>
                        </form>
                    </div>
                @endauth
            </div>
        </span>
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            @guest
                <button class="btn-login">Login</button> 
            @endguest
            @auth
                <section class="logout">
                    <h1>{{ \Illuminate\Support\Facades\Auth::user()->username }}</h1>
                    <form action="{{ route('logout') }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn-logout">Logout</button>
                    </form>
                </section>
            @endauth
        </ul>
    </div>
</header>