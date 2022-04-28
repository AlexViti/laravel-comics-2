@php
$links = [
  [
    'img' => 'buy-comics-digital-comics.png',
    'text' => 'Digital Comics',
  ],
  [
    'img' => 'buy-comics-merchandise.png',
    'text' => 'DC Merchandise',
  ],
  [
    'img' => 'buy-comics-subscriptions.png',
    'text' => 'Subscription',
  ],
  [
    'img' => 'buy-comics-shop-locator.png',
    'text' => 'Comic Shop Locator',
  ],
  [
    'img' => 'buy-dc-power-visa.svg',
    'text' => 'DC Power Visa',
  ],
];
@endphp

<nav>
  <ul class="container">
    @foreach ($links as $link)
      <li>
        <a href="#">
          <img src="{{ asset('images/' . $link['img']) }}" alt="{{ $link['text'] }}">
          <span>{{ $link['text'] }}</span>
        </a>
      </li>
    @endforeach
  </ul>
</nav>
