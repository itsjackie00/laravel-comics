<header>
    <div class="container d-flex justify-content-between align-items-center">
        <a href="/">
            <div id="logo">
                <img class="img-fluid" src="/img/dc-logo.png" alt="Logo" />
            </div>
        </a>
        <ul class="d-flex">
            @foreach ($headerMenu as $menu)
                <li>
                    <a class="d-flex align-items-center text-uppercase p-2" href="{{ $menu['url'] }}">{{ $menu['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
