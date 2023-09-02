<li class="nav-item">
    <a href="{{ route($route) }}" class="nav-link @if( str_contains(Route::currentRouteName(), $item['route']) ) active @endif">
        <i class="far fa-circle nav-icon"></i>
        <p>{{ $name }}</p>
    </a>
</li>