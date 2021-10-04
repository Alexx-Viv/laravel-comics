@extends('layouts.main')

@section('title') Fumetti @endsection

@section('content')
    <section id="comics">
      <h1>Current Series</h1>
      <div class="container second">
      @foreach ($comics as $index => $comic)
      <div class="card">
        <a href='{{ url("/comics/$index") }}'>
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
        </a>
        <h3>{{ $comic['series'] }}</h3>
      </div>
      @endforeach
      </div>
    </section>
@endsection