<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">eshala</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ route('dashboard')}}" class="@if(Route::is('dashboard')) active @endif">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('Product')}}" class="@if(Route::is('Product')) active @endif">
                <i class='bx bx-box' ></i>
                <span class="links_name">Product</span>
            </a>
        </li>
        <li>
            <a href="{{ route('Setting')}}" class="@if(Route::is('Setting')) active @endif">
                <i class='bx bx-cog' ></i>
                <span class="links_name">Setting</span>
            </a>
        </li>
        <li >
            <a href="{{ route('logout') }}">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>