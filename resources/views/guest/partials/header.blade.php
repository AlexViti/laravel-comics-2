@php
  $nav = [
    'characters',
    'comics',
    'movies',
    'tv',
    'games',
    'collectables',
    'videos',
    'fans',
    'news',
    'shop'
 ];
@endphp

<header>
  <div class="top-bar">
    <div class="container">
      <div>
        DC Power Visa&reg;
      </div>
      <div>
        Additional DC sites ▾
      </div>
    </div>
  </div>
  <nav class="container">
    <ul>
      <li class="logo">
        <a href="{{ route('home') }}">
          <img src="{{ asset('images/dc-logo.png') }}" alt="DC logo" height="81" width="81">
        </a>
      </li>
      @foreach ($nav as $item)
        <li class="{{ (explode('/', \Request::path())[0] == $item || \Request::is($item)) ? 'active' : '' }}">
          <a href="{{ route($item) }}"><span>{{ $item }}</span></a>
        </li>
      @endforeach
      <div class="search-bar">
        <form>
          <input type="text" name="query" placeholder="Search">
          <button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
      </div>
    </ul>
  </nav>
</header>
