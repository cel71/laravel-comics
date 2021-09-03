<div class="container header-box">
    <div class="logo">
        <a href="{{ route('homepage') }}"><img src="/images/dc-logo.png" alt="logo"></a>
    </div>
    <nav>
        <ul>
            <li class="{{ Request::route()->getName() === 'homepage' ? 'active' : '' }}"><a href="{{ route('homepage') }}">CHARACTERS</a></li>
            <li><a href="">COMICS</a></li>
            <li><a href="{{ route('moviespage') }}">MOVIES</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">GAMES</a></li>
            <li><a href="#">COLLECTIBLES</a></li>
            <li><a href="#">VIDEOS</a></li>
            <li><a href="#">FANS</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">SHOP</a></li>
        </ul>
    </nav>
</div>