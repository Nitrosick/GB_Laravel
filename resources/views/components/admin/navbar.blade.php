<nav class="block admin_navbar">
    <h2 class="menu_title">ADMIN</h2>
    <a href="{{ route('admin.news.index') }}" class="menu_link @if(request()->routeIs('admin.news.index')) active @endif">NEWS EDIT</a>
    <a href="{{ route('admin.news.create') }}" class="menu_link @if(request()->routeIs('admin.news.create')) active @endif">ADD NEWS</a>
</nav>
