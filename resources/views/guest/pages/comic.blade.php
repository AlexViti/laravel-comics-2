@extends('guest.templates.base')

@section('title', $title)

@section('content')
<main class="light comic">
  <div class="jumbotron">
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="Comics Jumbo">
  </div>
  <div class="cover-heading">
    <div class="narrow container">
      <div class="cover">
        <img src="{{ $thumb }}" alt="{{ $title }}">
        <div class="abs-tl">Comic Book</div>
        <div class="abs-blr">View Gallery</div>
      </div>
    </div>
  </div>
  <div class="narrow container">
    <div class="wrapper">
      <h1>{{ $title }}</h1>
      <div class="purchase">
        <div class="left">
          <div><span class="opaq">U.S. Price: </span>{{ $price }}</div>
          <span class="opaq">AVAILABLE</span>
        </div>
        <button>Check Availability ▾</button>
      </div>
      <p>{{ $description }}</p>
    </div>
    <img src="{{ asset('images/unleash.jpg') }}" alt="">
  </div>
  <div class="info">
    <div class="narrow container">
      <div class="wrapper">
        <h3>Talent</h3>
        <div class="row">
          <span>Art by:</span>
          <div>
            @foreach ($artists as $artist)
                <span>{{ $artist }}</span>
                @if (!$loop->last)
                    <span>,</span>
                @endif
            @endforeach
          </div>
        </div>
        <div class="row">
          <span>Written by:</span>
          <div>
            @foreach ($writers as $writer)
                <span>{{ $writer }}</span>
                @if (!$loop->last)
                    <span>,</span>
                @endif
            @endforeach
          </div>
        </div>
      </div>
      <div class="wrapper">
        <h3>Specs</h3>
        <div class="row">
          <span>Series:</span>
          <span>{{ $series }}</span>
        </div>
        <div class="row">
          <span>U.S. Price:</span>
          <span>{{ $price }}</span>
        </div>
        <div class="row">
          <span>On Sale Date:</span>
          <span>{{ date_create($sale_date)->format('M d y') }}</span>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
