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

            <div id="content">
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
                {{-- <li v-for="(shop, i) in shopSection" :key="i">
                    <div class="shop-icons">
                        <img :src="shop.path" :alt="shop.name">
                        <a href="#"> {{ shop.name }}</a>
                    </div>
                </li> --}}
            </ul>
        </section>
        
    </main>
@endsection
