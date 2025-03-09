<ul class="menu-nav nav">
    @php $parent_menus = \App\Menu::whereNULL('parent_id')->where('status',
    'Active')->orderBy('order_no')->get();
    foreach ($parent_menus as $key => $parent_menu) {
    $access = 'access_' . $parent_menu->slug;
    $create = 'create_' . $parent_menu->slug;
    $sub_menus = \App\Menu::where('parent_id', $parent_menu->id)->where('status',
    'Active')->orderBy('order_no')->get();
    $no_of_sub_menu = count($sub_menus);
    @endphp
    @can($access)
    <li class="nav-item {{$parent_menu->slug}}">
        <a class="nav-link with-sub" href="@if(!$no_of_sub_menu) {{url($parent_menu->menu_link)}} @else # @endif">
            <span class="sidemenu-icon menu-icon {{$parent_menu->menu_icon}}"></span>
            <span class="sidemenu-label">{{ $parent_menu->$lang  }}</span>
            @if($no_of_sub_menu)
            <i class="angle fe fe-chevron-down"></i>
            @endif
        </a>
        @if($no_of_sub_menu)
        <ul class="nav-sub">
            @php foreach ($sub_menus as $sub_menu) {
            $access = 'access_' . $sub_menu->slug;
            $create = 'create_' . $sub_menu->slug;
            @endphp
            @can($access)
            <li class="nav-sub-item">
                <a class="nav-sub-link" href="{{ url($sub_menu->menu_link) }}">{{  $sub_menu->$lang }}</a>
            </li>
            @endcan
            @php } @endphp
        </ul>
        @endif
    </li>

    @endcan
    @php } @endphp
    <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)"
            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
            <span class="sidemenu-icon menu-icon fas fa-power-off"></span>
            <span class="sidemenu-label">Sign Out</span>
        </a>
    </li>
</ul>