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


        <!-- ✅ Donation Testimony Toast -->
        <div id="donation-toast"
            class="fixed bottom-10 left-5 z-[9999] w-80 rounded-xl bg-white p-4 shadow-2xl ring-1 ring-gray-200
               opacity-0 pointer-events-none translate-y-6
               transition-all duration-500 ease-out">

            <div class="flex items-center gap-3">
                <img id="donor-img" class="object-cover w-12 h-12 border border-gray-200 rounded-full" alt="donor">

                <div class="flex-1">
                    <p id="donor-name" class="text-sm font-semibold text-gray-800"></p>

                    <p class="text-xs text-gray-600">
                        Donated
                        <span id="donor-amount" class="font-bold text-green-600"></span>
                    </p>
                    <div class="flex items-center gap-2 mt-1 text-xs text-gray-500">
                        <img id="donor-flag" class="w-6 h-4 border border-gray-200 rounded-sm" alt="flag">
                        <span id="donor-country"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ✅ Donation Toast Script -->



        <!-- ✅ Donation Toast Script -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {

                const names = [
                    'Aisha Suleiman', 'Fatima Noor', 'Zainab Musa', 'Yusuf Ibrahim',
                    'Ahmed Bello', 'Hassan Ali', 'Maryam Sadiq', 'Abdul Rahman',
                    'Khadija Umar', 'Salman Farouk', 'Aminu Lawal', 'Safiya Idris',
                    'Olena Kovalenko', 'Andriy Shevchenko', 'Iryna Melnyk',
                    'Dmytro Bondarenko', 'Kateryna Ivanova', 'Mykola Petrenko',
                    'Oksana Hrytsenko', 'Yaroslav Koval',
                    'Michael Green', 'Adam Rivers', 'Oliver Stone', 'Daniel Woods',
                    'Lucas Hill', 'Ethan Brooks', 'James Forest', 'Henry Lake',
                    'Samuel Reed', 'Benjamin Snow', 'Noah Field', 'Caleb Moss',
                    'Amina Hassan', 'Bilal Ahmed', 'Sofia Karim', 'Imran Yusuf'
                ];

                const toast = document.getElementById('donation-toast');
                async function showDonationToast() {
                    try {
                        const user = await fetch('https://randomuser.me/api/')
                            .then(res => res.json())
                            .then(data => data.results[0]);

                        const countries = await fetch(
                            'https://restcountries.com/v3.1/all?fields=name,flags'
                        ).then(res => res.json());

                        const country = countries[
                            Math.floor(Math.random() * countries.length)
                        ];

                        const amount = (Math.floor(Math.random() * 90) + 10) * 1000;

                        document.getElementById('donor-img').src = user.picture.medium;
                        document.getElementById('donor-name').textContent =
                            names[Math.floor(Math.random() * names.length)];
                        document.getElementById('donor-amount').textContent =
                            `$${amount.toLocaleString()}`;
                        document.getElementById('donor-amount').textContent =
                            `$${amount.toLocaleString()}`;
                        document.getElementById('donor-country').textContent =
                            country.name.common;
                        document.getElementById('donor-flag').src =
                            country.flags.svg;

                        toast.classList.remove(
                            'opacity-0',
                            'pointer-events-none',
                            'translate-y-6'
                        );

                        toast.classList.add(
                            'opacity-100',
                            'translate-y-0'
                        );
                        setTimeout(() => {
                            toast.classList.add(
                                'opacity-0',
                                'pointer-events-none',
                                'translate-y-6'
                            );
                            toast.classList.remove(
                                'opacity-100',
                                'translate-y-0'
                            );
                        }, 7000);

                    } catch (err) {
                        console.error('Donation toast error:', err);
                    }
                }

                setTimeout(showDonationToast, 5000);
                setInterval(showDonationToast, 60000);
            });
        </script>


</body>

</html>
