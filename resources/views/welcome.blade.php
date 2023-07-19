@extends('layout.app')
@section('main-content')
    <section>
        <div class="jumbo">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbo image">
            <div class="series">
                <p>Current Series</p>
            </div>
        </div>
    </section>
    <section>
        <div class="content-black">
            <div class="container">
                <div class="cards container d-flex flex-wrap">
                    @foreach ($cards as $card)
                        <div class="card-cs ">
                            <img src="{{ $card['thumb'] }}" alt="">
                            <h3>{{ $card['title'] }}</h3>
                        </div>
                    @endforeach
                </div>
                <div class="load-more">
                    <p class="m-0">Load more</p>
                </div>
            </div>
        </div>
    </section>
    <div class="content-blue">
        <div class="container">
            <ul class="d-flex justify-content-between">
                @for ($i = 0; $i < 5; $i++)
                    <li class="d-flex align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="Image merch">
                        <p class="text-uppercase m-0">dc power visa</p>
                    </li>
                @endfor
            </ul>
        </div>
    </div>
@endsection
