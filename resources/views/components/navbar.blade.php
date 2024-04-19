<nav id="navbar" class="navbar">
    <ul>
        @foreach ($links as $link)
        <li><a
                href="{{ $link->page ? '/donate/' . $link->page->id . '/' . Str::slug($link->page->title) : $link->link }}">{{
                $link->name }}</a></li>
        @endforeach
        @auth
        <li>
            <a href="/admin">Dashboard</a>
        </li>
        <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Logout</a>
        </li>
        @else
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Criar conta
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/register">Entidade beneficiadora</a></li>
                <li><a class="dropdown-item" href="/register-user">Utilizador</a></li>
            </ul>
        </li>
        <li>
            <a href="/admin">Login</a>
        </li>
        @endauth
        
        
    </ul>
</nav><!-- .navbar -->
<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>