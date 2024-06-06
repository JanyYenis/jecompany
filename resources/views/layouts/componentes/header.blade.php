@php
    $usuario = auth()->user();
    $cantidad = $usuario->unreadNotifications->count() ?? 0;
@endphp
<div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
    data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '300px'}"
    data-kt-sticky-animation="false">

    <!--begin::Header container-->
    <div class="app-container  container-xxl d-flex align-items-center justify-content-between"
        id="kt_app_header_container">
        <!--begin::Header wrapper-->
        <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between"
            id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item here show menu-lg-down-accordion me-lg-1">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">Dashboards</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span><!--end:Menu link--><!--begin:Menu sub-->
                        <div
                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link active" href="/blaze-html-pro/index.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Multipurpose</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="/blaze-html-pro/dashboards/projects.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Projects</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="/blaze-html-pro/dashboards/social.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Social</span>
                                </a><!--end:Menu link-->
                            </div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="/blaze-html-pro/dashboards/crypto.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Crypto</span></a><!--end:Menu link-->
                            </div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="/blaze-html-pro/dashboards/delivery.html"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Delivery</span></a><!--end:Menu link--></div>
                            <!--end:Menu item-->
                        </div><!--end:Menu sub-->
                    </div><!--end:Menu item--><!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1"><!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">Pages</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                            <!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link-->
                                <a class="menu-link" href="{{route('keenthemes.pages.about-us')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">About Us</span>
                                </a><!--end:Menu link-->
                            </div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="{{route('keenthemes.pages.invoice')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Facturas</span>
                                </a><!--end:Menu link-->
                            </div>
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="{{route('keenthemes.pages.pricing')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Pricing</span>
                                </a><!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div><!--end:Menu sub-->
                    </div><!--end:Menu item--><!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">Cuenta</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="{{ route('keenthemes.cuenta.seguridad') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Seguridad</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="/blaze-html-pro/account/activity.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Activity</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="/blaze-html-pro/account/billing.html"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Billing</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="/blaze-html-pro/account/statements.html"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Statements</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="/blaze-html-pro/account/referrals.html"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Referrals</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="/blaze-html-pro/account/api-keys.html"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span class="menu-title">API
                                        Keys</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="/blaze-html-pro/account/logs.html"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Logs</span></a><!--end:Menu link--></div>
                            <!--end:Menu item-->
                        </div><!--end:Menu sub-->
                    </div><!--end:Menu item--><!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-lg-1"><!--begin:Menu link--><span
                            class="menu-link"><span class="menu-title">Apps</span><span
                                class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                        <div
                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-handcart fs-2"></i></span><span
                                        class="menu-title">eCommerce</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Catalog</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/catalog/products.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Products</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/catalog/categories.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Categories</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/catalog/add-product.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add
                                                        Product</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/catalog/edit-product.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit
                                                        Product</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/catalog/add-category.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add
                                                        Category</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/catalog/edit-category.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit
                                                        Category</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion menu-sub-indention">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Sales</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/sales/listing.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Orders
                                                        Listing</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/sales/details.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Order
                                                        Details</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/sales/add-order.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add
                                                        Order</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/sales/edit-order.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit
                                                        Order</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion menu-sub-indention">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Customers</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/customers/listing.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customers
                                                        Listing</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/customers/details.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customers
                                                        Details</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion menu-sub-indention">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Reports</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/reports/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Products
                                                        Viewed</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/reports/sales.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sales</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/reports/returns.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Returns</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/reports/customer-orders.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customer
                                                        Orders</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/ecommerce/reports/shipping.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Shipping</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/ecommerce/settings.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-briefcase fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Customers</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/customers/getting-started.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Getting
                                                Started</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/customers/list.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Customer
                                                Listing</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/customers/view.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Customer
                                                Details</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-shield-tick fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span class="menu-title">User
                                        Management</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Users</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/user-management/users/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Users
                                                        List</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/user-management/users/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View
                                                        User</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Roles</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/user-management/roles/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Roles
                                                        List</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/blaze-html-pro/apps/user-management/roles/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View
                                                        Roles</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/user-management/permissions.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Permissions</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-file-added fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span class="menu-title">File
                                        Manager</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/file-manager/folders.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Folders</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/file-manager/files.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Files</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/file-manager/blank.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Blank
                                                Directory</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/file-manager/settings.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="/blaze-html-pro/apps/calendar.html"><span class="menu-icon"><i
                                            class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span></i></span><span
                                        class="menu-title">Calendar</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-message-text-2 fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i></span><span
                                        class="menu-title">Chat</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/chat/private.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Private
                                                Chat</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/chat/group.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Group
                                                Chat</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/blaze-html-pro/apps/chat/drawer.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Drawer
                                                Chat</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item-->
                        </div><!--end:Menu sub-->
                    </div><!--end:Menu item--><!--begin:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Logo wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Logo wrapper-->
                <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none"
                    id="kt_app_sidebar_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <!--end::Logo wrapper-->

                <!--begin::Logo image-->
                <a href="{{ asset('home') }}" class="d-flex d-lg-none">
                    <img alt="Logo" src="{{ asset('assets/media/logos/logo-default.svg') }}"
                        class="h-25px theme-light-show">
                    <img alt="Logo" src="{{ asset('assets/media/logos/logo-light.svg') }}"
                        class="h-25px theme-dark-show">
                </a>
                <!--end::Logo image-->
            </div>
            <!--end::Logo wrapper-->


            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Search-->
                <div class="app-navbar-item align-items-stretch">

                    <!--begin::Search-->
                    @component('layouts.componentes.header.search')
                    @endcomponent
                    <!--end::Search-->
                </div>
                <!--end::Search-->

                <!--begin::Quick links-->
                <div class="app-navbar-item ms-3 ms-lg-6">
                    <!--begin::Menu wrapper-->
                    <a href="{{ route('chats.index') }}"
                        class="btn btn-icon btn-circle btn-color-success btn-custom shadow-sm bg-body">
                        {{-- <div class="btn btn-icon btn-circle btn-color-success btn-custom shadow-sm bg-body" id="kt_drawer_chat_toggle"> --}}
                        <i class="far fa-comments fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </a>
                    <!--end::Menu wrapper-->
                </div>

                <!--begin::Notificaciones-->
                <div class="app-navbar-item align-items-stretch">
                    <div class="seccionNotificacionesGeneral">
                        @component('layouts.componentes.header.notificaciones')
                            @slot('cantidad', $cantidad)
                            @slot('unreadNotifications', $usuario->unreadNotifications)
                            @slot('notifications', $usuario->notifications)
                        @endcomponent
                    </div>
                </div>
                <!--end::Notificaciones-->

                <!--begin::Header menu mobile toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n4" title="Show header menu">
                    <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary"
                        id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-text-align-left fs-2 fw-bold"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    </div>
                </div>
                <!--end::Header menu mobile toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
