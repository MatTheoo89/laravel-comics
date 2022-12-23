@extends('layouts.main')

@section('content')

<div class="details">
    <div class="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbotron">
    </div>
    <div class="spacer"></div>

    <div class="container">
        <div class="poster">
            <img class="img-details" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="wrapper">
            <div class="left">
                <h3>{{$comic['title']}}</h3>
                <h3>{{$comic['description']}}</h3>
            </div>
            <div class="right">
                <h5>advertisement</h5>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="advertisement">
            </div>
        </div>
            
            <span>{{implode(', ', $comic['artists'])}}</span>    
    </div>
</div>

    
    

@endsection