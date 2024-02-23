@php 

$iconMain = [
    [
        'path' => 'buy-comics-digital-comics.png',
        'name' => 'DIGITAL COMICS'
    ],
    [
        'path' => 'buy-comics-merchandise.png',
        'name' => 'DC MERCHANDISE'
    ],
    [
        'path' => 'buy-comics-shop-locator.png',
        'name' => 'SUBSCRIPTION'
    ],
    [
        'path' => 'buy-comics-subscriptions.png',
        'name' => 'COMIC SHOP LOCATOR'
    ],
    [
        'path' => 'buy-dc-power-visa.svg',
        'name' => 'DC POWER VISA'
    ]
];

@endphp


@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')

    <main>
        <section id="big-comic-container">

            <div id="jumbotron">
    
            </div>
        
            <div class="current-menu-flag">
                CURRENT SERIES
            </div>

            <div id="content" class="container">
                @foreach ($data as $key => $comic)
                    <div class="single-comic">
                        <div>
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <div>
                            <h3>
                                {{$comic['title']}}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <button>
                    LOAD MORE
            </button>

        </section>
        <section id="shop">

            <ul>
                @foreach ($iconMain as $key =>$icon)
                        <li>
                            <div class="shop-icons">
                                <img src="{{ Vite::asset( 'resources/img/'.$icon['path']) }}" alt="{{ $icon['name'] }}">
                                <a href="#">{{ $icon['name'] }}</a>
                            </div>
                        </li>
                @endforeach
            </ul>

        </section>
        
    </main>
@endsection
