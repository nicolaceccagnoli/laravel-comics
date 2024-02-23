@php
    $links = [
        [
            'url' => '/',
            'label' => 'DC',
        ],
        [
            'url' => '/characters',
            'label' => 'CHARACTERS',
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
        ],        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
        ],        [
            'url' => '/news',
            'label' => 'NEWS',
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
        ],



    ];
@endphp

<header>
    <div class="header-top container">
        <div class="row justify-content-end">
            <div class="col-auto">
                DC POWER VISA
            </div>
            <div class="col-auto">
                ADDITIONAL DC SITES
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <nav class="container g-0 py-3 d-flex">
            <ul class="d-flex justify-content-around list-unstyled flex-grow-1 h-100 align-items-center">
                @foreach ($links as $link)
                    <li class="h-100">
                        <a href="{{ $link['url'] }}" class="text-decoration-none">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <span class="d-inline">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </span>
        </nav>
    </div>
</header>
