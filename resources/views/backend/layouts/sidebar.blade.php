{{-- Side Bar --}}
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="../../assets/img/team/profile-picture-3.jpg"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Jane</h2>
                    <a href="../../pages/examples/sign-in.html"
                        class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        Sign Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="../../index.html" class="nav-link d-flex align-items-center">
                    {{-- <span class="sidebar-icon">
                       <i class="fas fa-list-ul"></i>
                    </span> --}}
                    <span class="mt-1 ms-1 sidebar-text"
                        style="color: #e84857; font-weight: bolder; font-size: 1.5rem">Better Dinner</span>
                </a>
            </li>
            <li class="nav-item @yield('home-active')">
                <a href="{{ route('admin.home') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-admin">
                    <span>
                        <span class="sidebar-icon">
                            <i class="icon icon-xs me-3 fas fa-user-tie"></i>
                        </span>
                        <span class="sidebar-text">Admin</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse " role="list" id="submenu-admin" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                                <span class="sidebar-text">Admin User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="nav-item @yield('user-active')">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-user">
                    <span>
                        <span class="sidebar-icon">
                            <i class="icon icon-xs me-2 fas fa-users"></i>
                        </span>
                        <span class="sidebar-text">User Management</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse " role="list" id="submenu-user" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.user.index') }}">
                                <span class="sidebar-text">User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item  @yield('restaurant-active')">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-restaurant">
                    <span>
                        <span class="sidebar-icon">
                            <i class="icon icon-xs me-2 fas fa-store"></i>
                        </span>
                        <span class="sidebar-text">Restaurant <br>
                            <div class="pl-10" style="padding-left: 40px;">Management</div>
                        </span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse " role="list" id="submenu-restaurant" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.restaurant.index') }}">
                                <span class="sidebar-text">Restaurants</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- ====================================================================================================================================== --}}
            {{-- ====================================================================================================================================== --}}
            <li class="nav-item  @yield('order-active')">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-order">
                    <span>
                        <span class="sidebar-icon">
                            <i class="icon icon-xs me-2 fas fa-utensils"></i>
                        </span>
                        <span class="sidebar-text">Order<br>
                            <div class="pl-10" style="padding-left: 35px;">Management</div>
                        </span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse " role="list" id="submenu-order" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.delivery.index') }}">
                                <span class="sidebar-text">Delivery</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="multi-level collapse " role="list" id="submenu-order" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.pickup.index') }}"">
                                <span class=" sidebar-text">pickup</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="multi-level collapse " role="list" id="submenu-order" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.booking.index') }}">
                                <span class="sidebar-text">Booking</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            {{-- ====================================================================================================================================== --}}
            {{-- ====================================================================================================================================== --}}

            <li class="nav-item @yield('transaction-active') ">
                <a href="{{ route('admin.transaction.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                            <path fill-rule="evenodd"
                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Transactions</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
