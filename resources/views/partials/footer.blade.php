<footer>
    <div class="footer-upper">
        <div class="container d-flex">
            <div class="comics-shop">
                <ul>
                    <li>
                        <h1>DC Comics</h1>
                    </li>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>Tv</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
                <ul>
                    <li>
                        <h1>Shop</h1>
                    </li>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>

            <ul>
                <li>
                    <h1>DC</h1>
                </li>
                <li>Terms Of Use</li>
                <li>Privacy policy (New)</li>
                <li>Ad Choices</li>
                <li>Advertising</li>
                <li>Jobs</li>
                <li>Subscriptions</li>
                <li>Talent Workshops</li>
                <li>CPSC Certificates</li>
                <li>Ratings</li>
                <li>Shop Help</li>
                <li>Contact Us</li>
            </ul>
            <ul>
                <li>
                    <h1>SITES</h1>
                </li>
                <li>DC</li>
                <li>MAD Magazine</li>
                <li>DC Kids</li>
                <li>DC Universe</li>
                <li>DC Power Visa</li>
            </ul>
        </div>
        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
    </div>
    <div class="footer-lower">
        <div class="container d-flex justify-content-between">
            <div class="signUp">
                <p class="m-0">Sign-up now!</p>
            </div>
            <div class="social-icons d-flex align-items-center justify-content-between">
                <h1>Follow us</h1>
                <ul class="d-flex">
                    @foreach ($icons_social as $icon)
                        <li><img src="{{ Vite::asset($icon['image']) }}" alt=""></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
