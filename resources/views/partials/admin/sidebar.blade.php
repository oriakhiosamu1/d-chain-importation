<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">

        <ul class="nav">
            {{-- DASHBOARD ROUTE --}}
            <li class="nav-item active">
                <a href="{{ route('admin.dashboard') }}" style="text-decoration: none">
                    <i class="fa-solid fa-house"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            {{-- PRODUCT ROUTE --}}
            <li class="nav-item active">
                <a href="{{ route('admin.add-product') }}" style="text-decoration: none">
                    <i class="fa-solid fa-truck-fast"></i>
                    <p>Products</p>
                </a>
            </li>

            {{-- LOGOUT ROUTE --}}
            <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="return confirm('Want to Logout?')" style="text-decoration: none">
                    <i class="fa-solid fa-sign-out"></i>
                    <p>Sign Out</p>
                </a>
            </li>
        </ul>
    </div>
</div>

{{-- BOOTSTRAP ALERT --}}

{{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-circle-info"></i>
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> --}}
