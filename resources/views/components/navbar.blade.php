<nav class="main_navbar block">
    <h2 class="menu_title">MENU</h2>
    <a href="{{ route('account') }}" class="menu_link @if(request()->routeIs('account')) active @endif">ACCOUNT</a>
    <a href="{{ route('categories') }}" class="menu_link @if(request()->routeIs('categories')) active @endif">NEWS CATEGORIES</a>
    <a href="{{ route('feedback.create') }}" class="menu_link @if(request()->routeIs('feedback.create')) active @endif">FEEDBACK FORM</a>
    <a href="{{ route('request.create') }}" class="menu_link @if(request()->routeIs('request.create')) active @endif">REQUEST DATA</a>
    <a href="{{ route('about') }}" class="menu_link @if(request()->routeIs('about')) active @endif">ABOUT</a>

    {{-- <h2 class="to_admin"><a href="{{ route('admin.news.index') }}" class="menu_link">ADMIN BAR</a></h2> --}}
</nav>
