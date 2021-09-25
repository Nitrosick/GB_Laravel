<header class="block">
    <a class="logo" href="{{ route('account') }}">N</a>
    <div class="plug"></div>
    @if (!Auth::user())
        <a class="auth_link" href="{{ route('login') }}">LOGIN</a>
        <span>|</span>
        <a class="auth_link" style="margin-right: 0" href="{{ route('register') }}">REGISTER</a>
    @else
        <a class="auth_link" href="{{ route('logout') }}">LOGOUT</a>
    @endif
</header>
