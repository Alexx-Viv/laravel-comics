@extends('layouts.main')

@section('title') Fumetti @endsection

@section('content')
<section id="comic">
  <div class="container">
    <div class="copy">
      <h1>{{$comic['title']}}</h1>
      <div class="description"> <div class="price"><span>U.S. Prica:</span><span>AVAILABLE</span></div><div class="availability">Check Availability</div></div>
      <p>
        {{$comic['description']}}
      </p>
    </div>
    <div class="advertisment">
      <h3>ADVERTISMENT</h3>
      <img src="{{asset('img/cta-icons.png')}}" alt="">
    </div>
  </div>
  </section>
<section id="container">
  <div class="container">
    <div class="talent">
    <h2>Talent</h2>
    <hr>
    <div class="row"><span>Art By:</span>
     <span> @foreach ( $comic['artists'] as $artist) {{$artist}}, @endforeach </span>
  </div>
    <hr>
  <div class="row"><span>Written by:</span>
  <span> @foreach ( $comic['writers'] as $writer) {{$writer}}, @endforeach </span>
  </div>
    <hr>
    </div>
    <div class="specs">
      <h2>Specs</h2>
    <hr>
    <div class="row"><span>Series:</span><span>{{$comic['series']}}</span></div>
    <hr>
    <div class="row"><span>U.S. Price:</span><span>{{$comic['price']}}</span></div>
    <hr>
    <div class="row"><span>On Sale Date:</span><span>{{$comic['sale_date']}}</span></div>
    <hr>
    </div>
  </div>
  </section>
@endsection