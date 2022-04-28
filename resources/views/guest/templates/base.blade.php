<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

  {{-- Icons --}}
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  {{-- Styles --}}
  <link rel="stylesheet" href="{{  asset('css/app.css')  }}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <title>@yield('title') | DC</title>

</head>
<body>
  @include('guest.partials.header')
  @yield('content')
  @include('guest.partials.footer')
  <script src="{{  asset('js/app.js')  }}"></script>
</body>
</html>
