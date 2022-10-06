@foreach ($menus as $menu)
    @if (@$menu['type'] == NULL || @$menu['type'] == 'default')
        <li {{ is_nav_active($menu['name']) }}>
            <a class="nav-link" href="{{ $menu['route'] }}">
                <i class="{{ $menu['icon'] }}"></i> <span>{{ $menu['key'] }}</span>
            </a>
        </li>
    @elseif ($menu['type'] == 'dropdown')
        @php
            $colors = ['info', 'success', 'danger', 'warning'];
        @endphp
        <li class="dropdown {{ is_nav_active($menu['name'], false) }}">
            <a href="#" class="nav-link has-dropdown">
                <i class="{{ $menu['icon'] }}"></i> <span>{{ $menu['key'] }}</span>
            </a>
            <ul class="dropdown-menu">
                @foreach ($menu['childs'] as $child)
                    <li {{ is_nav_active($child['name']) }}>
                        <a class="nav-link" href="{{ $child['route'] }}">
                            <i class="{{ $child['icon'] }} 
                            @if(!is_nav_active($child['name']))
                                text-{{ $colors[$loop->index % 4] }}
                            @endif
                            "></i> {{ $child['key'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @elseif ($menu['type'] == 'label')
        <li class="menu-header">{{ $menu['key'] }}</li>
    @endif
@endforeach