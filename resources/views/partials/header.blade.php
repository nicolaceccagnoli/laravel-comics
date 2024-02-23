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
            'url' => '/comic',
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
        ]
    ];

@endphp

<header>
    <div class="header-top">
        <div class="container h-100">
            <div class="row justify-content-end align-items-center h-100">
                <div class="col-auto">
                    DC POWER VISA <span>&reg</span>
                </div>
                <div class="col-auto">
                    ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="py-3 d-flex align-items-center">
                <ul class="d-flex m-0 justify-content-between list-unstyled flex-grow-1 p-0">
                    @foreach ($links as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-decoration-none">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <span>
                    <input class="border-0 text-end" type="search" placeholder="Search" aria-label="Search">
                </span>
            </nav>
        </div>
    </div>
</header>
