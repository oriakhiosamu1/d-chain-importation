<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/images/logo.png') }}">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">

                        <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Pages</a>
                            <ul>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li class="scroll-to-section"><a href="{{ route('kids.page') }}">Kid's</a></li>
                                <li class="scroll-to-section"><a href="{{ route('men.page') }}">Men's</a></li>
                                <li class="scroll-to-section"><a href="{{ route('women.page') }}">Women's</a></li>
                            </ul>
                        </li>
                        @auth
                            <li class="submenu">
                                <a href="javascript:;">Vitals</a>
                                <ul>
                                    <li><a href="{{ route('billing.address') }}">Billing Address</a></li>
                                    <li><a href="{{ route('cart') }}">Cart</a></li>
                                    <li><a href="#">History</a></li>
                                </ul>
                            </li>
                        @endauth

                        {{-- AUTHENTICATED USERS --}}
                        @auth
                        <li><button type="button" style="font-family: 'Poppins' !important" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
                        @endauth

                        {{-- GUEST USERS --}}
                        @guest
                            <li><button type="button" style="font-family: 'Poppins' !important" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
                            <li><button type="button" style="font-family: 'Poppins' !important" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Sign In</button></li>
                        @endguest
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>


{{-- REGISTER FORM --}}
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">

        <div style="background-color: #2A2A2A !important" class="modal-header">
            <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Glad to welcome you!!!</h1>
            <button type="button" style="background-color: white !important" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <livewire:register-form />
        </div>
    </div>
    </div>
</div>


{{-- LOGIN FORM --}}
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div style="background-color: #2A2A2A !important" class="modal-header">
            <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Welcome Onboard!!!</h1>
            <button type="button" style="background-color: white !important" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <livewire:login-form />
        </div>
      </div>
    </div>
</div>

{{-- LOGOUT MODAL FORM --}}
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <livewire:logout />
</div>
