@extends('guest.templates.base')

@section('title', $title)

@section('content')
<main class="light">
  <div class="jumbotron">
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="Comics Jumbo">
  </div>
  <div class="cover-heading">
    <div class="narrow container">
      <div class="cover">
        <img src="{{ $thumb }}" alt="">
        <div class="abs-tl">Comic Book</div>
        <div class="abs-blr">View Gallery</div>
      </div>
    </div>
  </div>
</main>
@endsection
