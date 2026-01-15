<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Ukraine Relief Funds')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
</head>

<body
    class="home wp-singular page-template page-template-elementor_header_footer page page-id-65 wp-embed-responsive wp-theme-carit theme-carit woocommerce-no-js give-test-mode give-page woocommerce-active elementor-default elementor-template-full-width elementor-kit-4 elementor-page elementor-page-65">

    <div id="toast" class="fixed hidden px-4 py-3 text-white rounded-lg shadow-lg top-5 right-5">
    </div>


    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div id="page" class="site page-wrapper">
        <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>

        {{-- Navbar --}}
        <x-navbar />

        {{-- Page Content --}}
        <main class="flex-1">
            @yield('content')
        </main>

        {{-- Footer --}}
        <x-footer />


        @yield('footer_links')
</body>

</html>
