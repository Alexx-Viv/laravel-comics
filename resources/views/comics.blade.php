@extends('layouts.main')

@section('title') Fumetti @endsection

@section('content')
    <section id="comics">
      <h1>Current Series</h1>
      <div class="container">
      @foreach ($comics as $comic)
      <div class="card">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
        <h3>{{ $comic['series'] }}</h3>
      </div>
      @endforeach
      </div>
    </section>
@endsection