@php
    $footerData = [
        'DC COMICS' => [
            'Characters',
            'Comics',
            'Movie',
            'TV',
            'Games',
            'Videos',
            'News'
        ],
        'DC' => [
            'Terms Of Use',
            'Privacy Policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',  
            'Shop Help',
            'Contact Us'
        ],
        'SITES' => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        'SHOP' => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];

    $socialFooter =[
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ]   
@endphp

<footer>
    <div class="footer-top container">
        <div class="row g-0 p-0">
            <div class="col-4 d-flex flex-wrap">
    
                @foreach ($footerData as $key => $singleData)
                        <ul>
                            <li class="list-title">
                                {{ $key }}
                            </li>
    
                            @foreach ($singleData as $data)
                                <li>{{ $data }}</li>
                            @endforeach
                        </ul>
                @endforeach
    
            </div>
            <div class="col-6 offset-2 dc-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="dc-logo">
            </div>    
        </div>
    </div>
    <div class="footer-bottom container">
        <div class="row g-0 p-0 justify-content-between">
            <div class="col-auto">
                <a href="#nogo">
                    sign up now
                </a>
            </div>
            <div class="col-auto">
                @foreach ($socialFooter as $singleSocial)
                    <img src="{{ Vite::asset( 'resources/img/'.$singleSocial) }}" alt="{{ $singleSocial }}">
                @endforeach
            </div>
        </div>
    </div>
</footer>
