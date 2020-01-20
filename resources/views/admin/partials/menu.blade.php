@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp


<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.users') ? 'active' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.cities') ? 'active' : '' }}" href="{{ route(ADMIN . '.cities.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-map-alt"></i>
        </span>
        <span class="title">Cities</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.tourist_spots') ? 'active' : '' }}" href="{{ route(ADMIN . '.tourist_spots.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-location-arrow"></i>
        </span>
        <span class="title">Tourist Spots</span>
    </a>
</li>
