<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Language" content="en"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Wedding Gowns | The Gown Connoisseur | Singapor</title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta
        name="description"
        content="This is an example dashboard created using build-in elements and components."
    />
    <meta name="msapplication-tap-highlight" content="no"/>
    <link href="{{  asset('assets/css/admin.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div
    class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header"
>
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src">Admin Panel</div>
            <div class="header__pane ml-auto">
                <div>
                    <button
                        type="button"
                        class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar"
                    >
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button
                    type="button"
                    class="hamburger hamburger--elastic mobile-toggle-nav"
                >
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
          <span>
            <button
                type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"
            >
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>
        <div class="app-header__content">
            <div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input
                            type="text"
                            class="search-input"
                            placeholder="Type to search"
                        />
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
            </div>
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        class="p-0 btn"
                                    >
                                        <img
                                            width="42"
                                            class="rounded-circle"
                                            src="assets/images/avatars/1.jpg"
                                            alt=""
                                        />
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div
                                        tabindex="-1"
                                        role="menu"
                                        aria-hidden="true"
                                        class="dropdown-menu dropdown-menu-right"
                                    >
                                        <button
                                            type="button"
                                            tabindex="0"
                                            class="dropdown-item"
                                        >
                                            User Account
                                        </button>
                                        <button
                                            type="button"
                                            tabindex="0"
                                            class="dropdown-item"
                                        >
                                            Settings
                                        </button>
                                        <a href="/logout">
                                            <button
                                                type="button"
                                                tabindex="0"
                                                class="dropdown-item"
                                            >
                                                Logout
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left ml-3 header-user-info">
                                <div class="widget-heading">Admin</div>
                                <div class="widget-subheading">CEO</div>
                            </div>
                            <div class="widget-content-right header-user-info ml-3">
                                <button
                                    type="button"
                                    class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example"
                                >
                                    <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src">Admin Panel</div>
                <div class="header__pane ml-auto">
                    <div>
                        <button
                            type="button"
                            class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar"
                        >
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button
                        type="button"
                        class="hamburger hamburger--elastic mobile-toggle-nav"
                    >
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
            <span>
              <button
                  type="button"
                  class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"
              >
                <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
              </button>
            </span>
            </div>
            <div class="scrollbar-sidebar overflow-auto">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Dashboards</li>
                        <li>
                            <a href="/admin" class="@yield('dashboard')">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="app-sidebar__heading">Inventory</li>
                        <li>
                            <a href="#" class="@yield('stock')">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Stock
                                <i
                                    class="metismenu-state-icon pe-7s-angle-down caret-left"
                                ></i>
                            </a>
                            <ul class="@yield('stock-ul')">
                                <li>
                                    <a href="/admin/stock/create" class="@yield('stock-add-item')">
                                        <i class="metismenu-icon"></i>
                                        Add Item
                                    </a>
                                </li>

                                <li>
                                    <a href="/admin/stock/" class="@yield('stock-view-item')">
                                        <i class="metismenu-icon"></i>
                                        View Items
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="@yield('categories')">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Categories
                                <i
                                    class="metismenu-state-icon pe-7s-angle-down caret-left"
                                ></i>
                            </a>
                            <ul class="@yield('categories-ul')">
                                <li>
                                <li>
                                    <a href="/admin/category" class="@yield('categories-add-category')">
                                        <i class="metismenu-icon"></i>
                                        View Category
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="@yield('variation')">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Variation
                                <i
                                    class="metismenu-state-icon pe-7s-angle-down caret-left"
                                ></i>
                            </a>
                            <ul class="@yield('variation-ul')">
                                <li>
                                    <a href="/admin/variation/create" class="@yield('variation-add-variation')">
                                        <i class="metismenu-icon"></i>
                                        Add Variation
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/variation" class="@yield('variation-view-variation')">
                                        <i class="metismenu-icon"></i>
                                        Item Variation
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="app-sidebar__heading">Consultants</li>
                        <li>
                            <a href="#" class="@yield('consultant')">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Consultant
                                <i
                                    class="metismenu-state-icon pe-7s-angle-down caret-left"
                                ></i>
                            </a>
                            <ul class="@yield('consultant-ul')">
                                <li>
                                    <a href="/admin/consultant/create" class="@yield('consultant-add-consultant')">
                                        <i class="metismenu-icon"></i>
                                        Add Consultant
                                    </a>
                                </li>
                                <li>
                                    <a href="./payments_list.html" class="@yield('consultant-commission-list')">
                                        <i class="metismenu-icon"></i>
                                        Commission List
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/consultant/" class="@yield('consultant-view-consultant')">
                                        <i class="metismenu-icon"></i>
                                        View Consultants
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">Customers</li>
                        <li>
                            <a href="#" class="@yield('customer')">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Customers
                                <i
                                    class="metismenu-state-icon pe-7s-angle-down caret-left"
                                ></i>
                            </a>
                            <ul class="@yield('customer-ul')">
                                <li>
                                    <a href="./customers.html" class="@yield('customer-list')">
                                        <i class="metismenu-icon"></i>
                                        Customers List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">Sales</li>
                        <li>
                            <a href="#" class="@yield('invoice')">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Invoice
                                <i
                                    class="metismenu-state-icon pe-7s-angle-down caret-left"
                                ></i>
                            </a>
                            <ul class="@yield('invoice-ul')">
                                <li>
                                    <a href="./invoice_list.html" class="@yield('invoice-list')">
                                        <i class="metismenu-icon"></i>
                                        View Invoices List
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="@yield('order')">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Orders
                                <i
                                    class="metismenu-state-icon pe-7s-angle-down caret-left"
                                ></i>
                            </a>
                            <ul class="@yield('order-ul')">
                                <li>
                                    <a href="./add_order.html" class="@yield('order-add')">
                                        <i class="metismenu-icon"></i>
                                        Add Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="./orders.html" class="@yield('order')">
                                        <i class="metismenu-icon"></i>
                                        View Orders
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="@yield('booking')">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Bookings
                                <i
                                    class="metismenu-state-icon pe-7s-angle-down caret-left"
                                ></i>
                            </a>
                            <ul class="@yield('booking-ul')">
                                <li>
                                    <a href="./bookings_list.html" class="@yield('booking-calendar')">
                                        <i class="metismenu-icon"></i>
                                        Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="bookings.html" class="@yield('booking-list')">
                                        <i class="metismenu-icon"></i>
                                        List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="./Payments_settings.html" class="@yield('payments')">
                                <i class="metismenu-icon pe-7s-diamond"> </i>Payments
                            </a>
                        </li>

                        <li class="app-sidebar__heading">Settings</li>
                        <li>
                            <a href="/admin/setting" class="@yield('setting')">
                                <i class="metismenu-icon pe-7s-diamond"> </i>General
                            </a>
                        </li>
                        <li>
                            <a href="./email_settings.html" class="@yield('email')">
                                <i class="metismenu-icon pe-7s-display2"> </i>Email
                            </a>
                        </li>
                        <li>
                            <a href="./tax_setting.html" class="@yield('tax')">
                                <i class="metismenu-icon pe-7s-display2"> </i>Taxes
                            </a>
                        </li>
                        <li>
                            <a href="./pay_settings.html" class="@yield('payment')">
                                <i class="metismenu-icon pe-7s-display2"> </i>Payment
                            </a>
                        </li>
                        <li>
                            <a href="./time_settings.html" class="@yield('time')">
                                <i class="metismenu-icon pe-7s-display2"> </i>Timezone
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-main__outer">
            <div class="container">
                @include('partials.success')
                @include('partials.error')
            </div>
            <div class="app-main__inner">
                @yield('content')
            </div>
            <div class="app-wrapper-footer">
                <div class="app-footer">
                    <div class="app-footer__inner">
                        <div class="app-footer-left"></div>
                        <div class="app-footer-right"></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
</div>
<script type="text/javascript" src="{{  asset('assets/scripts/main.js') }}"></script>
@yield('modal')
</body>
</html>
