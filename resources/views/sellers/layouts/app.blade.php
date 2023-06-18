<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>@yield('titulo')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>

    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">

            @component('sellers.components.navbar.navbar-vertical-navbar-expand-lg')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-fixed-top')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-navbar-slim-fixed-top')
            @endcomponent
            @component('sellers.components.navbar.navbar-top fixed-top-navbar-expand-lg')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-navbar-slim-justify-content-between')
            @endcomponent
            @component('sellers.components.navbar.navbar-top fixed-top navbar-expand-lg')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-fixed-top-navbar-slim-justify-content-between navbar-expand-lg')
            @endcomponent
            <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true"
                data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal"
                style="--phoenix-backdrop-opacity: 1;">
                <div class="modal-dialog">
                    <div class="modal-content mt-15 rounded-pill">
                        <div class="modal-body p-0">
                            <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}'
                                style="width: auto;">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                    <input class="form-control search-input fuzzy-search rounded-pill form-control-lg"
                                        type="search" placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                                    data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                                        aria-label="Close"></button></div>
                                <div
                                    class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                                    <div class="scrollbar-overlay" style="max-height: 30rem;">
                                        <div class="list pb-3">
                                            <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span
                                                    class="text-500">results</span></h6>
                                            <hr class="text-200 my-0" />
                                            <h6
                                                class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                                Recently Searched </h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-1000 title"><span
                                                                class="fa-solid fa-clock-rotate-left"
                                                                data-fa-transform="shrink-2"></span> Store Macbook
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-1000 title"> <span
                                                                class="fa-solid fa-clock-rotate-left"
                                                                data-fa-transform="shrink-2"></span> MacBook Air - 13″
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="text-200 my-0" />
                                            <h6
                                                class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                                Products</h6>
                                            <div class="py-2"><a
                                                    class="dropdown-item py-2 d-flex align-items-center"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="file-thumbnail me-2"><img
                                                            class="h-100 w-100 fit-cover rounded-3"
                                                            src="assets/img/products/60x60/3.png" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                                        <p class="fs--2 mb-0 d-flex text-700"><span
                                                                class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB
                                                                Storage</span></p>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 d-flex align-items-center"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="file-thumbnail me-2"><img class="img-fluid"
                                                            src="assets/img/products/60x60/3.png" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                                        <p class="fs--2 mb-0 d-flex text-700"><span
                                                                class="fw-medium text-600 ms-2">30 Sep at 12:30
                                                                PM</span></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="text-200 my-0" />
                                            <h6
                                                class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                                Quick Links</h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-1000 title"><span
                                                                class="fa-solid fa-link text-900"
                                                                data-fa-transform="shrink-2"></span> Support MacBook
                                                            House</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-1000 title"> <span
                                                                class="fa-solid fa-link text-900"
                                                                data-fa-transform="shrink-2"></span> Store MacBook″
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="text-200 my-0" />
                                            <h6
                                                class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                                Files</h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-1000 title"><span
                                                                class="fa-solid fa-file-zipper text-900"
                                                                data-fa-transform="shrink-2"></span> Library MacBook
                                                            folder.rar</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-1000 title"> <span
                                                                class="fa-solid fa-file-lines text-900"
                                                                data-fa-transform="shrink-2"></span> Feature MacBook
                                                            extensions.txt</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-1000 title"> <span
                                                                class="fa-solid fa-image text-900"
                                                                data-fa-transform="shrink-2"></span> MacBook
                                                            Pro_13.jpg</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="text-200 my-0" />
                                            <h6
                                                class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                                Members</h6>
                                            <div class="py-2"><a
                                                    class="dropdown-item py-2 d-flex align-items-center"
                                                    href="pages/members.html">
                                                    <div class="avatar avatar-l status-online  me-2 text-900">
                                                        <img class="rounded-circle "
                                                            src="assets/img/team/40x40/10.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                                        <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 d-flex align-items-center"
                                                    href="pages/members.html">
                                                    <div class="avatar avatar-l  me-2 text-900">
                                                        <img class="rounded-circle "
                                                            src="assets/img/team/40x40/12.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-1000 title">John Smith</h6>
                                                        <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="text-200 my-0" />
                                            <h6
                                                class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                                Related Searches</h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-1000 title"><span
                                                                class="fa-brands fa-firefox-browser text-900"
                                                                data-fa-transform="shrink-2"></span> Search in the Web
                                                            MacBook</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-1000 title"> <span
                                                                class="fa-brands fa-chrome text-900"
                                                                data-fa-transform="shrink-2"></span> Store MacBook″
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var navbarTopShape = window.config.config.phoenixNavbarTopShape;
                var navbarPosition = window.config.config.phoenixNavbarPosition;
                var body = document.querySelector('body');
                var navbarDefault = document.querySelector('#navbarDefault');
                var navbarTop = document.querySelector('#navbarTop');
                var topNavSlim = document.querySelector('#topNavSlim');
                var navbarTopSlim = document.querySelector('#navbarTopSlim');
                var navbarCombo = document.querySelector('#navbarCombo');
                var navbarComboSlim = document.querySelector('#navbarComboSlim');

                var documentElement = document.documentElement;
                var navbarVertical = document.querySelector('.navbar-vertical');

                if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                    navbarDefault.remove();
                    navbarTop.remove();
                    navbarTopSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    topNavSlim.style.display = 'block';
                    navbarVertical.style.display = 'inline-block';
                    body.classList.add('nav-slim');
                } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                    navbarDefault.remove();
                    navbarVertical.remove();
                    navbarTop.remove();
                    topNavSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    navbarTopSlim.removeAttribute('style');
                    body.classList.add('nav-slim');
                } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                    navbarDefault.remove();
                    //- navbarVertical.remove();
                    navbarTop.remove();
                    topNavSlim.remove();
                    navbarCombo.remove();
                    navbarTopSlim.remove();
                    navbarComboSlim.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                    body.classList.add('nav-slim');
                } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                    navbarDefault.remove();
                    topNavSlim.remove();
                    navbarVertical.remove();
                    navbarTopSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    navbarTop.removeAttribute('style');
                    documentElement.classList.add('navbar-horizontal');
                } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                    topNavSlim.remove();
                    navbarTop.remove();
                    navbarTopSlim.remove();
                    navbarDefault.remove();
                    navbarComboSlim.remove();
                    navbarCombo.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                    documentElement.classList.add('navbar-combo')

                } else {
                    topNavSlim.remove();
                    navbarTop.remove();
                    navbarTopSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    navbarDefault.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                }

                var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
                var navbarTop = document.querySelector('.navbar-top');
                if (navbarTopStyle === 'darker') {
                    navbarTop.classList.add('navbar-darker');
                }

                var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                var navbarVertical = document.querySelector('.navbar-vertical');
                if (navbarVerticalStyle === 'darker') {
                    navbarVertical.classList.add('navbar-darker');
                }
            </script>
           @yield('content')
        </div>

    </main>

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
        aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header align-items-start border-bottom flex-column">
            <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
                    <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
                </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas"
                    aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
            </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
                    class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
        </div>
        <div class="offcanvas-body scrollbar px-card" id="themeController">
            <div class="setting-panel-item mt-0">
                <h5 class="setting-panel-item-title">Color Scheme</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color"
                            type="radio" value="light" data-theme-control="phoenixTheme" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="{{asset('assets/img/generic/default-light.png') }}" alt="" /></span><span
                                class="label-text">Light</span></label></div>
                    <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color"
                            type="radio" value="dark" data-theme-control="phoenixTheme" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="{{asset('assets/img/generic/default-dark.png') }}" alt="" /></span><span
                                class="label-text"> Dark</span></label></div>
                </div>
            </div>
            <div class="border rounded-3 p-4 setting-panel-item bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="setting-panel-item-title mb-1">RTL </h5>
                    <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto"
                            type="checkbox" data-theme-control="phoenixIsRTL" /></div>
                </div>
                <p class="mb-0 text-700">Change text direction</p>
            </div>
            <div class="border rounded-3 p-4 setting-panel-item bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
                    <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto"
                            type="checkbox" data-theme-control="phoenixSupportChat" /></div>
                </div>
                <p class="mb-0 text-700">Toggle support chat</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Navigation Type</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarPositionVertical"
                            name="navigation-type" type="radio" value="vertical"
                            data-theme-control="phoenixNavbarPosition" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{asset('assets/img/generic/default-light.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="{{asset('assets/img/generic/default-dark.png') }}" alt="" /></span><span
                                class="label-text">Vertical</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal"
                            name="navigation-type" type="radio" value="horizontal"
                            data-theme-control="phoenixNavbarPosition" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{asset('assets/img/generic/top-default.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="{{asset('assets/img/generic/top-default-dark.png') }}" alt="" /></span><span
                                class="label-text"> Horizontal</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type"
                            type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionCombo"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{asset('assets/img/generic/nav-combo-light.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="{{asset('assets/img/generic/nav-combo-dark.png') }}" alt="" /></span><span
                                class="label-text"> Combo</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio"
                            name="config.name" value="default"
                            data-theme-control="phoenixNavbarVerticalStyle" /><label
                            class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img
                                class="img-fluid img-prototype d-dark-none"
                                src="{{asset('assets/img/generic/default-light.png') }}" alt="" /><img
                                class="img-fluid img-prototype d-light-none"
                                src="{{asset('assets/img/generic/default-dark.png') }}" alt="" /><span
                                class="label-text d-dark-none"> Default</span><span
                                class="label-text d-light-none">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio"
                            name="config.name" value="darker"
                            data-theme-control="phoenixNavbarVerticalStyle" /><label
                            class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img
                                class="img-fluid img-prototype d-dark-none"
                                src="{{asset('assets/img/generic/vertical-darker.png') }}" alt="" /><img
                                class="img-fluid img-prototype d-light-none"
                                src="{{asset('assets/img/generic/vertical-lighter.png') }}" alt="" /><span
                                class="label-text d-dark-none"> Darker</span><span
                                class="label-text d-light-none">Lighter</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape"
                            type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{asset('assets/img/generic/top-default.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{asset('assets/img/generic/top-default-dark.png') }}" alt="" /></span><span
                                class="label-text">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape"
                            type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{asset('assets/img/generic/top-slim.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{asset('assets/img/generic/top-slim-dark.png') }}" alt="" /></span><span
                                class="label-text"> Slim</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style"
                            type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{asset('assets/img/generic/top-default.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{asset('assets/img/generic/top-style-darker.png') }}" alt="" /></span><span
                                class="label-text">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style"
                            type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{asset('assets/img/generic/navbar-top-style-light.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{asset('assets/img/generic/top-style-lighter.png') }}" alt="" /></span><span
                                class="label-text d-dark-none">Darker</span><span
                                class="label-text d-light-none">Lighter</span></label></div>
                </div>
            </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary"
                href="https://themes.getbootstrap.com/product/phoenix-sellers-dashboard-webapp-template/"
                target="_blank">Purchase template</a>
        </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center px-2 py-1">
            <div class="position-relative rounded-start" style="height:34px;width:28px">
                <div class="settings-popover"><span class="ripple"><span
                            class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20"
                                    height="20" viewBox="0 0 20 20" fill="#ffffff"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                        fill="#2A7BE4"></path>
                                </svg></span></span></span></div>
            </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
        </div>
    </a>


    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/phoenix.js') }}"></script>
    <script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&callback=revenueMapInit"
        async></script>
    <script src="{{ asset('assets/js/ecommerce-dashboard.js') }}"></script>
</body>
</html>
