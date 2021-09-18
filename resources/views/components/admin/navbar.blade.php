<nav class="block admin_navbar">
    <h2 class="menu_title">ADMIN</h2>
    <a href="{{ route('admin.news.index') }}" class="menu_link @if(request()->routeIs('admin.news.index')) active @endif">NEWS EDIT</a>
    <a href="{{ route('admin.categories.index') }}" class="menu_link @if(request()->routeIs('admin.categories.index')) active @endif">CATEGORIES EDIT</a>
    <a href="{{ route('admin.news.create') }}" class="menu_link @if(request()->routeIs('admin.news.create')) active @endif">ADD NEWS</a>
    <a href="{{ route('admin.categories.create') }}" class="menu_link @if(request()->routeIs('admin.categories.create')) active @endif">ADD CATEGORY</a>

    <h2 class="to_main"><a href="{{ route('welcome') }}" class="menu_link">MAIN MENU</a></h2>
</nav>
