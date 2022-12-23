@extends('layouts.main')

@section('content')

    <main>
        
        <div class="jumbotron">
            <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbotron">
        </div>
        <div class="container">

            <button class="top">Current Series</button>
            
            <div class="card-area">

                <!--CARD-->
                @foreach ($comics as $comic )

                <div class="card">

                        <div class="card-image">
                
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                
                        </div>
                
                        <div class="card-text">
                
                            <span>{{ $comic['title'] }}</span>
                
                        </div>
                
                    </div>
                    
                @endforeach


            </div>
            
            
        </div>
        <div class="button">
            <button>Load More</button>
        </div>

        <div class="main-bottom">

            <div class="container">
    
                <div class="card">
    
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="buy-comics-digital-comics.png">
    
                    <h3>digital comics</h3>
    
                </div>
    
                <div class="card">
    
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="buy-comics-merchandise.png">
    
                    <h3>dc merchandise</h3>
    
                </div>
    
                <div class="card">
    
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="buy-comics-subscriptions.png">
    
                    <h3>subscription</h3>
    
                </div>
    
                <div class="card">
    
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="buy-comics-shop-locator.png">
    
                    <h3>comics shop locator</h3>
    
                </div>
    
                <div class="card">
    
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="buy-dc-power-visa.svg">
    
                    <h3>dc power visa</h3>
    
                </div>
                
                
                
                
                
    
            </div>
        </div>
    </main>

@endsection