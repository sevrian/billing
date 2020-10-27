<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Biliing</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="icon-x d-block d-xl-none font-medium-4 primary toggle-icon feather icon-disc"></i><i
                        class="toggle-icon font-medium-4 d-none d-xl-block primary collapse-toggle-icon feather icon-disc"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>

    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ Request::is('/')?'active':''}}"><a href="{{url ('/')}}"><i class="feather icon-home"></i><span
                        class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-box"></i><span class="menu-title"
                        data-i18n="Starter kit">Users</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('pelanggan')?'active':''}}"><a href="{{ url ('pelanggan')}}"><i></i><span
                                class="menu-item" data-i18n="2 columns">Customers</span></a>
                    </li>
                    <li class="{{ Request::is('siswa')?'active':''}}"><a href="{{ url ('siswa')}}"><i></i><span
                                class="menu-item" data-i18n="Fixed navbar">Admin</span></a>
                    </li>
                </ul>
            </li>
            <li class=" {{ Request::is('produk')?'active':''}}"><a href="{{ url ('produk')}}""><i class=" feather
                    icon-credit-card"></i><span class="menu-title" data-i18n="Starter kit">Products</span></a>

            </li>


            <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title"
                        data-i18n="Starter kit">Billing</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('acounts')?'active':''}}"><a href="{{ url ('acounts')}}"><i></i><span
                                class="menu-item" data-i18n="2 columns">Account</a>
                    </li>
                    <li class="{{ Request::is('transactions')?'active':''}}"><a
                            href="{{ url ('transactions')}}"><i></i><span class="menu-item"
                                data-i18n="Fixed navbar">Transaction</span></a>
                    </li>
                    <li class="{{ Request::is('reports')?'active':''}}"><a
                        href="{{ url ('reports')}}"><i></i><span class="menu-item"
                            data-i18n="Fixed navbar">Report</span></a>
                </li>
                </ul>
            </li>




            <li class=" nav-item"><a
                    href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"><i
                        class="feather icon-folder"></i><span class="menu-title"
                        data-i18n="Documentation">Documentation</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span
                        class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
            </li>
        </ul>
    </div>
</div>