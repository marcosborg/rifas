<nav id="navbar" class="navbar">
    <ul>
        @foreach ($links as $link)
        <li><a href="{{ $link->page ? '/' . $link->page->id . '/' . Str::slug($link->page->title) : $link->link }}">{{
                $link->name }}</a></li>
        @endforeach
    </ul>
</nav><!-- .navbar -->