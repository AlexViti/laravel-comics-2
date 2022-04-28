@extends('guest.templates.base')

@section('title', 'Comics')

@section('content')
<main id="comics">
  <div class="jumbotron">
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="Comics Jumbo">
  </div>
  <div class="container">
    <h2>Current series</h2>
    <div class="wrapper">
      @foreach ($comics as $comic)
        <div class="card">
          <div class="thumb">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
          </div>
          <h3>{{ $comic['series'] }}</h3>
        </div>
      @endforeach
    </div>
    <button class="btn">Load more</button>
  </div>
  @include('guest.partials.mainNav')
</main>
@endsection
