<header>
    <div class="fixed-top bg-white">

        <section class="d-flex justify-content-between align-items-center container">
            <section class="logo">
                <a href="{{route('pages.home')}}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC comics main logo"></a>
            </section>
            <section class="navigation">
                <nav class="navbar-nav navbar-light">
                    <ul class="d-flex gap-5 text-uppercase list-unstyled m-0">
                        <li>Characters</li>
                        <a href="{{route('guest.comics.index')}}"><li class="{{ ( Route::currentRouteName() == 'guest.comics.index' || 'guest.comics.show') ? 'active' : '' }}">Comics</li></a>
                        <li>Movies</li>
                        <li>Tv</li>
                        <li>Games</li>
                        <li>Collectibles</li>
                        <li>Videos</li>
                        <li>Fans</li>
                        <li>News</li>
                        <li>Shop</li>
                        <a href="{{ route('guest.comics.create')}}"><li class="{{ ( Route::currentRouteName() == 'guest.comics.create') ? 'active' : '' }}">Add Comic</li></a>
                    </ul>
                </nav>
            </section>
        </section>
    </div>
    <section class="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </section>
</header>