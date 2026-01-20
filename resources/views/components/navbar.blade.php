 <!-- the loop -->
 <div data-elementor-type="wp-post" data-elementor-id="865" class="elementor elementor-865">
     <div class="elementor-element elementor-element-d66efb9 e-con-full e-flex e-con e-parent" data-id="d66efb9"
         data-element_type="container">
         <div class="elementor-element elementor-element-ee4355b elementor-widget elementor-widget-carit-header"
             data-id="ee4355b" data-element_type="widget" data-widget_type="carit-header.default">
             <div class="elementor-widget-container">


                 <div class="topbar-one">
                     <div class="container">
                         <div class="topbar-one__inner">
                             <div class="topbar-one__info">
                                 <p class="topbar-one__info__text">Welcome to {{ config('custom.title') }}, a
                                     crowdfunding &amp;
                                     Charity Agency</p>
                                 {{-- <a href="{{ route('signup') }}" class="carit-btn"> <i class="icon-login"></i> Signup
                                     Now</a> --}}
                             </div><!-- /.list-unstyled topbar-one__info -->
                             <div class="topbar-one__call">Talk to Member : <a
                                     href="tel:+{{ config('custom.link_phone_two') }}">{{ config('custom.phone_two') }}</a>
                             </div>
                             <!-- /.topbar-one__social -->
                         </div><!-- /.topbar-one__inner -->
                     </div><!-- /.container -->
                 </div><!-- /.topbar-one -->

                 <header class="main-header main-header--one sticky-header sticky-header--normal">
                     <div class="container">
                         <div class="main-header__inner">
                             <div class="main-header__logo">
                                 <a href="{{ route('home') }}">
                                     <img src="{{ asset('images/logo-light.png') }}" width="159" height="50"
                                         alt="Carit">
                                 </a>
                             </div><!-- /.main-header__logo -->

                             <nav class="main-header__nav main-menu">
                                 <div class="menu-menu-1-container">
                                     <ul id="menu-menu-1" class="main-menu__list">
                                         <li id="menu-item-415"
                                             class="menu-item menu-item-type-custom menu-item-object-custom megamenu megamenu-style-alt menu-item-has-children menu-item-415">
                                             <a href="{{ route('home') }}">Home</a>

                                         </li>
                                         <li id="menu-item-460"
                                             class="menu-item menu-item-type-post_type menu-item-object-page megamenu-hide menu-item-460">
                                             <a href="{{ route('about') }}">About</a>
                                         </li>

                                         <li id="menu-item-460"
                                             class="menu-item menu-item-type-post_type menu-item-object-page megamenu-hide menu-item-460">
                                             <a href="{{ route('donation') }}">Donation</a>
                                         </li>

                                         <li id="menu-item-460"
                                             class="menu-item menu-item-type-post_type menu-item-object-page megamenu-hide menu-item-460">
                                             <a href="{{ route('news') }}">News</a>
                                         </li>

                                         <li id="menu-item-460"
                                             class="menu-item menu-item-type-post_type menu-item-object-page megamenu-hide menu-item-460">
                                             <a href="{{ route('testimony') }}">Testimony</a>
                                         </li>

                                         <li id="menu-item-491"
                                             class="menu-item menu-item-type-post_type menu-item-object-page megamenu-hide menu-item-491">
                                             <a href="{{ route('contact') }}">Contact
                                                 Us</a>
                                         </li>

                                         <li id="menu-item-491"
                                             class="menu-item menu-item-type-post_type menu-item-object-page megamenu-hide menu-item-491">
                                             <a href="{{ route('faq') }}">FAQ
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </nav><!-- /.main-header__nav -->

                             <div class="flex items-center gap-4 main-header__right">
                                 <!-- Info Icons -->
                                 <div class="flex gap-2 main-header__info">
                                     <a href="#"
                                         class="text-gray-700 main-header__info__item hover:text-gray-900">
                                         <i class="fas fa-search"></i>
                                     </a>
                                     <a href="{{ route('home') }}"
                                         class="text-gray-700 main-header__info__item hover:text-gray-900">
                                         <i class="fas fa-user"></i>
                                     </a>
                                 </div>

                                 <!-- Donation Button -->
                                 <div class="main-header__btn">
                                     <a href="{{ route('donation') }}"
                                         class="px-4 py-2 text-white bg-blue-600 rounded carit-btn hover:bg-blue-700">
                                         Donation
                                     </a>
                                 </div>

                                 <!-- Mobile Nav Toggler -->
                                 <div class="flex flex-col gap-1 cursor-pointer mobile-nav__btn mobile-nav__toggler">
                                     <span class="block w-6 h-0.5 bg-gray-800"></span>
                                     <span class="block w-6 h-0.5 bg-gray-800"></span>
                                     <span class="block w-6 h-0.5 bg-gray-800"></span>
                                 </div>
                             </div>

                             <!-- /.main-header__right -->
                         </div><!-- /.main-header__inner -->
                     </div><!-- /.container -->
                 </header>

                 <!-- /.main-header -->

                 <div class="mobile-nav__wrapper">
                     <div class="mobile-nav__overlay mobile-nav__toggler"></div>
                     <!-- /.mobile-nav__overlay -->
                     <div class="mobile-nav__content">
                         <span class="mobile-nav__close mobile-nav__toggler">
                             <i class="fa fa-times"></i>
                         </span>
                         <div class="logo-box">
                             <a href="https://caritwp.bracketweb.com/" aria-label="logo image">
                                 <img width="159" height="50"
                                     src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/logo-light.png"
                                     alt="Carit" />
                             </a>
                         </div><!-- /.logo-box -->
                         <div class="mobile-nav__container"></div><!-- /.mobile-nav__container -->
                         <ul class="ml-0 mobile-nav__contact list-unstyled">
                             <li>
                                 <i class="fa fa-envelope"></i>
                                 <a href="mailto:{{ config('custom.email') }}">{{ config('custom.email') }}</a>
                             </li>
                             <li>
                                 <i class="fa fa-phone-alt"></i>
                                 <a
                                     href="tel:{{ config('custom.link_phone_one') }}">{{ config('custom.phone_one') }}</a>
                             </li>
                         </ul><!-- /.mobile-nav__contact -->
                         <div class="mobile-nav__social">
                             <a href="{{ config('custom.fb') }}">
                                 <i aria-hidden="true" class=" fab fa-facebook-f"></i> </a>
                             <a href="{{ config('custom.twi') }}">
                                 <i aria-hidden="true" class=" icon-twitter"></i> </a>
                             <a href="{{ config('custom.ins') }}">
                                 <i aria-hidden="true" class=" icon-instagram-1"></i> </a>
                             <a href="{{ config('custom.pin') }}">
                                 <i aria-hidden="true" class=" icon-pinterest"></i> </a>
                         </div><!-- /.mobile-nav__social -->
                     </div><!-- /.mobile-nav__content -->
                 </div><!-- /.mobile-nav__wrapper -->

                 <div class="search-popup">
                     <div class="search-popup__overlay search-toggler"></div>
                     <!-- /.search-popup__overlay -->
                     <div class="search-popup__content">
                         <form role="search" method="get" class="search-popup__form" action="#">
                             <input type="text" id="search" placeholder="Search Here...">
                             <button type="submit" aria-label="search submit" class="carit-btn">
                                 <i class="fas fa-search"></i>
                             </button>
                         </form>
                     </div> <!-- /.search-popup__content -->
                 </div> <!-- /.search-popup -->

                 <div id="scroll-top" class="scroll-top">
                     <span id="scroll-top-value" class="scroll-top-value"></span>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end of the loop -->
