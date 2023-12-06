<nav id="navbar" class="navbar">
    <ul>
        @foreach ($links as $link)
        <li><a href="{{ $link->page ? '/donate/' . $link->page->id . '/' . Str::slug($link->page->title) : $link->link }}">{{
                $link->name }}</a></li>
        @endforeach
        <li>
            <a href="/admin"><i class="bi bi-lock-fill"></i></a>
        </li>
    </ul>
</nav><!-- .navbar -->