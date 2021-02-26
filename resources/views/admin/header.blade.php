<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('admin_dashboard') }}">
                <span class="brand-name">Ecom Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="{{$dashboard_active}}">
                    <a href="{{ route('admin_dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="has-sub {{$order_active}}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Order Details</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements">
                        <div class="sub-menu">
                            <li>
                                <a href="{{ route('admin_new_order') }}">New Orders List</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_pending_order') }}">Pending Orders List</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_complete_order') }}">Completed Orders List</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_remove_order') }}">Remove Orders List</a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub {{$user_active}}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#other"
                        aria-expanded="false" aria-controls="other">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">User Details</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="other">
                        <div class="sub-menu">
                            <li>
                                <a href="{{ route('admin_active_user') }}">Active Users List</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_deactive_user') }}">Deactive User List</a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub {{$product_active}}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                        aria-expanded="false" aria-controls="icons">
                        <i class="mdi mdi-package-variant"></i>
                        <span class="nav-text">Product Details</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="icons">
                        <div class="sub-menu">
                            <li>
                                <a href="{{ route('admin_add_product') }}">Add New Item or Product</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_active_product') }}">Active Product List</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_deactive_product') }}">Deactive Product List</a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub {{$admin_active}}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#chart"
                        aria-expanded="false" aria-controls="chart">
                        <i class="mdi mdi-account-card-details"></i>
                        <span class="nav-text">Admin Details</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="chart">
                        <div class="sub-menu">
                            <li>
                                <a href="{{ route('admin_register') }}">Add New Admin</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_profile') }}">My Profile</a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="{{$invoice_active}}">
                    <a href="{{ route('admin_invoice') }}">
                        <i class="mdi mdi-file-pdf-box"></i>
                        <span class="nav-text">Genarate Invoice</span>
                    </a>
                </li>
        </div>
        </ul>
    </div>
    </div>
</aside>
