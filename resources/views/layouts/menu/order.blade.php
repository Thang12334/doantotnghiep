<li class="{{ request()->RouteIs('bill*') ? 'mm-active' : '' }}">
    <a href="{{ route('bill.index') }}" class="waves-effect">
        <i class="bx bx-credit-card"></i>
        <span>Quản lí hóa đơn</span>
    </a>
</li>
