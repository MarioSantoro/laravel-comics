<header>
    <div class="upper">
        <div class="container">
            <ul class="d-flex justify-content-end text-white text-uppercase">
                <li>dc power visa</li>
                <li class="ms-3">additional dc sites</li>
            </ul>
        </div>
    </div>
    <div class="lower">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo dc comics">
            </div>
            <nav>
                <ul class="d-flex">
                    @foreach ($navLinks as $link)
                        <li><a href="{{ $link['link'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="searchbar">
                <input type="text">
            </div>
        </div>
    </div>
    </div>
</header>
