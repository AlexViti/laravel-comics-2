@php
  $nav_menu = [
    'Digital Comics' => '#',
    'Shop DC' => '#',
    'Comic Shop Locator' => '#',
    'Subscription' => '#'
  ];
@endphp

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
    <div class="adv">
      <div>ADVERTISEMENT</div>
      <img src="{{ asset('images/unleash.jpg') }}" alt="">
    </div>
  </div>
  <div class="info">
    <div class="narrow container">
      <ul>
        <h3>Talent</h3>
        <li>
          <span>Art by:</span>
          <div>
            @foreach ($artists as $artist)
              <a>{{ $artist }}</a>
              @if (!$loop->last)
                <span>,</span>
              @endif
            @endforeach
          </div>
        </li>
        <li>
          <span>Written by:</span>
          <div>
            @foreach ($writers as $writer)
              <a>{{ $writer }}</a>
              @if (!$loop->last)
                <span>,</span>
              @endif
            @endforeach
          </div>
        </li>
      </ul>
      <ul>
        <h3>Specs</h3>
        <li>
          <span>Series:</span>
          <a>{{ strtoupper($series) }}</a>
        </li>
        <li>
          <span>U.S. Price:</span>
          <span>{{ $price }}</span>
        </li>
        <li>
          <span>On Sale Date:</span>
          <span>{{ date_create($sale_date)->format('M d Y') }}</span>
        </li>
      </ul>
    </div>
    <nav>
      <ul class="narrow container">
        @foreach ($nav_menu as $title => $link)
          <li class="icon-{{ $loop->iteration }}">
            <a href="{{ $link }}" onClick="return false;">
              <h5>{{ strtoupper($title) }}</h5>
              <div class="icon"></div>
            </a>
          </li>
        @endforeach
      </ul>
    </nav>
  </div>
</main>
@endsection
