<nav class="block admin_navbar">
    <h2 class="menu_title">ADMIN</h2>
    <a href="{{ route('admin.news.index') }}" class="menu_link @if(request()->routeIs('admin.news.index')) active @endif">NEWS LIST</a>
    <a href="{{ route('admin.categories.index') }}" class="menu_link @if(request()->routeIs('admin.categories.index')) active @endif">CATEGORIES LIST</a>
    <a href="{{ route('feedback.index') }}" class="menu_link @if(request()->routeIs('feedback.index')) active @endif">USER FEEDBACKS</a>
    <a href="{{ route('request.index') }}" class="menu_link @if(request()->routeIs('request.index')) active @endif">USER REQUESTS</a>

    <a href="{{ route('admin.news.create') }}" class="menu_link @if(request()->routeIs('admin.news.create')) active @endif">ADD NEWS</a>
    <a href="{{ route('admin.categories.create') }}" class="menu_link @if(request()->routeIs('admin.categories.create')) active @endif">ADD CATEGORY</a>

    <h2 class="to_main"><a href="{{ route('welcome') }}" class="menu_link">MAIN MENU</a></h2>
</nav>
