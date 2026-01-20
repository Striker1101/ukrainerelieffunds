<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Ukraine Relief Funds')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/696b06b64712da197cd6b198/1jf514fa0';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    @stack('styles')
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


        <div id="donation-toast">
            <div class="toast-inner">
                <img id="donor-img" alt="donor">

                <div class="toast-content">
                    <div id="donor-name" class="name"></div>

                    <div class="amount">
                        Donated <span id="donor-amount"></span>
                    </div>

                    <div class="country">
                        <img id="donor-flag" alt="flag">
                        <span id="donor-country"></span>
                    </div>
                </div>
            </div>
        </div>


        <style>
            /* 🔒 Absolute isolation */
            #donation-toast {
                position: fixed !important;
                left: 20px !important;
                bottom: -200px !important;
                z-index: 2147483647 !important;

                width: 320px;
                background: #ffffff;
                border-radius: 14px;
                box-shadow: 0 15px 40px rgba(0, 0, 0, .2);
                border: 1px solid #e5e7eb;

                opacity: 0;
                pointer-events: none;

                transition:
                    opacity .4s ease,
                    bottom .4s ease;
            }

            /* visible state */
            #donation-toast.show {
                bottom: 20px !important;
                opacity: 1;
            }

            /* layout */
            #donation-toast .toast-inner {
                display: flex;
                gap: 12px;
                padding: 14px;
            }

            #donation-toast img {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                object-fit: cover;
                border: 1px solid #ddd;
            }

            #donation-toast .toast-content {
                flex: 1;
                font-family: system-ui, sans-serif;
            }

            #donation-toast .name {
                font-size: 14px;
                font-weight: 600;
                color: #111827;
            }

            #donation-toast .amount {
                font-size: 12px;
                color: #4b5563;
                margin-top: 2px;
            }

            #donation-toast .amount span {
                color: #16a34a;
                font-weight: 700;
            }

            #donation-toast .country {
                display: flex;
                align-items: center;
                gap: 6px;
                margin-top: 6px;
                font-size: 11px;
                color: #6b7280;
            }

            #donation-toast .country img {
                width: 22px;
                height: 14px;
                border-radius: 2px;
            }
        </style>



</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        const toast = document.getElementById('donation-toast');
        document.body.appendChild(toast); // escape footer/theme

        const donorImg = document.getElementById('donor-img');
        const donorName = document.getElementById('donor-name');
        const donorAmount = document.getElementById('donor-amount');
        const donorCountry = document.getElementById('donor-country');
        const donorFlag = document.getElementById('donor-flag');

        const names = [
            'Aisha Suleiman', 'Fatima Noor', 'Zainab Musa', 'Yusuf Ibrahim',
            'Ahmed Bello', 'Hassan Ali', 'Maryam Sadiq', 'Abdul Rahman',
            'Khadija Umar', 'Salman Farouk', 'Aminu Lawal', 'Safiya Idris',
            'Olena Kovalenko', 'Andriy Shevchenko', 'Iryna Melnyk',
            'Michael Green', 'Adam Rivers', 'Oliver Stone', 'Daniel Woods'
        ];

        async function showToast() {
            try {
                const user = await fetch('https://randomuser.me/api/')
                    .then(r => r.json())
                    .then(d => d.results[0]);

                const country = await fetch(
                        'https://restcountries.com/v3.1/all?fields=name,flags'
                    ).then(r => r.json())
                    .then(c => c[Math.floor(Math.random() * c.length)]);

                donorImg.src = user.picture.medium;
                donorName.textContent =
                    names[Math.floor(Math.random() * names.length)];

                const amount = (Math.floor(Math.random() * 90) + 10) * 1000;
                donorAmount.textContent = `$${amount.toLocaleString()}`;

                donorCountry.textContent = country.name.common;
                donorFlag.src = country.flags.svg;

                toast.classList.add('show');

                setTimeout(() => {
                    toast.classList.remove('show');
                }, 7000);

            } catch (e) {
                console.error('Toast error:', e);
            }
        }

        setTimeout(showToast, 4000);
        setInterval(showToast, 60000);
    });
</script>


</html>
