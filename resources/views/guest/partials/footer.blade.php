@php
$footer_nav = [
  'DC comics' => [
    'Characters' => 'characters',
    'Comics' => 'comics',
    'Movies' => 'movies',
    'TV' => 'tv',
    'Games' => 'games',
    'Collectables' => 'collectables',
    'Videos' => 'videos',
    'Fans' => 'fans',
    'News' => 'news',
    'Shop' => 'shop'
  ],
  'DC' => [
    'Term Of Use' => '#',
    'Privacy policy (New)' => '#',
    'Ad Choices' => '#',
    'Advertising' => '#',
    'Jobs' => '#',
    'Subscriptions' => '#',
    'Talent workshops' => '#',
    'CPSC certificate' => '#',
    'Ratings' => '#',
    'Shop Help' => '#',
    'Contact Us' => '#',
  ],
  'Sites' => [
    'DC' => '#',
    'MAD Magazine' => '#',
    'DC Kids' => '#',
    'DC Universe' => '#',
    'DC Power Visa' => '#',
  ],
  'Shop' => [
    'Shop DC' => '#',
    'Shop DC collectables' => '#',
  ]
];
@endphp

<footer>
  <nav>
    <div class="container">
      <ul>
        @foreach ($footer_nav as $title => $links)
          <li>
            <h4>{{ $title }}</h4>
            <ul>
              @foreach ($links as $label => $link)
                @if ($title === 'DC comics')
                  <li><a href="{{ route($link) }}">{{ $label }}</a></li>
                  @else
                    <li><a href="{{ $link }}">{{ $label }}</a></li>
                @endif
              @endforeach
            </ul>
          </li>
        @endforeach
      </ul>
      <div class="bg-logo"></div>
    </div>
  </nav>
  <div class="footer-bottom">
    <div class="container">
      <button class="btn">Sign-up now!</button>
    </div>
  </div>
</footer>
