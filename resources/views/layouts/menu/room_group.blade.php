<li class="{{ request()->RouteIs('room*') ? 'mm-active' : '' }}">
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="bx bx-bed"></i>
        <span>Quản lí phòng</span>
    </a>
    <ul class="sub-menu" aria-expanded="true">
        <li><a class="{{request()->RouteIs('roomtype.*') ? 'active' : ''}}"
                href="{{ route('roomtype.index') }}"><i class="bx bx-right-arrow-alt
            "></i> Khu - Dãy</a></li>
        <li><a class="{{request()->RouteIs('room.*') ? 'active' : ''}}" href="{{ route('room.index') }}"><i class="bx bx-right-arrow-alt
            "></i>Danh Sách</a></li>
    </ul>
</li>
