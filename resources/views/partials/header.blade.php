<header>
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="logo molisana">
    </div>
    <div class="menu-list">
        <ul>
            <li><a href="{{ route('home-page') }}" class="{{ (Request::route() -> getName() == 'home-page') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('products-page') }}" class="{{ (Request::route() -> getName() == 'products-page') ? 'active' : '' }}">Prodotti</a></li>
            <li><a href="{{ route('news-page') }}" class="{{ (Request::route() -> getName() == 'news-page') ? 'active' : '' }}">News</a></li>
        </ul>
    </div>
</header>