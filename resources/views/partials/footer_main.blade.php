<div class="footer-main">
    <div class="container wrapper-footer">
        <div class="link">
            <ul class="menu-footer">
                <li>DC COMICS</li>
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
        </div>
        <div class="DC-logo">
            <img src="/img/dc-logo-bg.png" alt="">
        </div>
    </div>
</div>
<div class="footer-social">
    <div class="container">
        <div class="sing_up">
            <a href="#">Sign-up Now!</a>
        </div>
        <div class="follow">

        </div>
    </div>
</div>