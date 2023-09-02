<li class="nav-item  @if(str_contains(Route::currentRouteName(), $name)) menu-open active @endif">
    <a href="#" class="nav-link @if(str_contains(Route::currentRouteName(), $name)) active @endif">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $title }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @foreach ($items as $item)
            @include('backend.components.menu_item', $item)
        @endforeach
    </ul>
</li>
