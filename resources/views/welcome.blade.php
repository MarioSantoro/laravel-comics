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
                    @for ($i = 0; $i < 12; $i++)
                        <div class="card-cs ">
                            <img src="https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg" alt="">
                            <h3>title</h3>
                        </div>
                    @endfor
                </div>
                <div class="load-more">
                    <p class="m-0">Load more</p>
                </div>
            </div>
        </div>
    </section>
@endsection
