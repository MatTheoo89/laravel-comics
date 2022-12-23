@extends('layouts.main')

@section('content')

<div class="details">
    <div class="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbotron">
    </div>
    <div class="spacer"></div>

    <div class="container">
        <div class="poster">
            <h5 class="genre">{{$comic['series']}}</h5>
            <h5 class="gallery">VIEW GALLERY</h5>
            <img class="img-details" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="wrapper">
            <div class="left">
                <h1>{{$comic['title']}}</h1>

                <div class="price-avaible">

                    <div class="price">
                        <span>U.S. Price: {{$comic['price']}}</span>
                        <span>AVAILABLE</span>
                    </div>

                    <div class="avaible">
                        <span>Check Availability</span>
                    </div>

                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="right">
                <h5>advertisement</h5>
                <img src="{{vite::asset('resources/img/adv.jpg')}}" alt="advertisement">
            </div>
        </div>
            
    </div>
    
    <div class="detail">
        <div class="container-detail">
            <div class="col-l">
            <h2>Talent</h2>
            <div class="box-artist">
                <h4>Art by:</h4>
                <div>
                    <span>{{implode(', ', $comic['artists'])}}</span>
                </div>
            </div>
            <div class="box-write">
                <h4>written by:</h4>
                <div>
                    <span>{{implode(', ', $comic['writers'])}}</span>
                </div>
            </div>
        </div>
        <div class="col-r">
            <h2>Specs</h2>
            <div class="box-serie">
                <h4>Series:</h4>
                <span>{{$comic['series']}}</span>
            </div>
            <div class="box-price">
                <h4>U.S. Price:</h4>
                <span>{{$comic['price']}}</span>
            </div>
            <div class="box-sale">
                <h4>On Sale Date:</h4>
                <span>{{$comic['sale_date']}}</span>
            </div>
        </div>
        </div>
        
    </div>
    
</div>

    
    

@endsection