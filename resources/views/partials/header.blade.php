<header>
    <div class="bg">
        <div class="container">
            <div class="header-top">
                <ul class="list-line">
                    <li>
                        <a href="#">Dc Power Visa&copy;</a>
                    </li>
                    <li>
                        <a href="#">Additional dc sites</a>
                    </li>
                </ul>
            </div>  
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="wrapper-header-nav">
                <div class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC">
                </div>
                <nav>
                    <ul class="menu">
                        @foreach ($menu as $item)
                            <li>
                                <a href="#" >
                                    {{ $item }}
                                @if ($loop->last)
                                    ---
                                @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <div class="search">Search</div>
            </div>  
        </div>
    </div>
</header>