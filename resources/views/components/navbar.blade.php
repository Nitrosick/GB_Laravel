<nav class="block">
    <h2 class="menu_title">MENU</h2>
    <a href="{{ route('welcome') }}" class="menu_link @if(request()->routeIs('welcome')) active @endif">WELCOME</a>
    <a href="{{ route('categories') }}" class="menu_link @if(request()->routeIs('categories')) active @endif">NEWS CATEGORIES</a>
    <a href="{{ route('feedback') }}" class="menu_link @if(request()->routeIs('feedback')) active @endif">FEEDBACK FORM</a>
    <a href="{{ route('data') }}" class="menu_link @if(request()->routeIs('data')) active @endif">REQUEST DATA</a>
</nav>
