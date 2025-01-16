<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/images/logo-1.png') }}" alt="">
        {{-- <h1 class="sitename">Layaran</h1> --}}
        </a>

        <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="#hero" class="active">@lang('header.home')</a></li>
            <li><a href="#about">@lang('header.about')</a></li>
            <li><a href="#features">@lang('header.features')</a></li>
            <li><a href="#pricing">@lang('header.pricing')</a></li>
            <li><a href="#faq">@lang('header.faq')</a></li>
            <li class="dropdown">
                <a href="#">
                    @if (App::getLocale() == 'en')
                        <!-- English Flag SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="30" height="15">
                            <rect width="60" height="30" fill="#012169" />
                            <path fill="#FFF" d="M0 0l60 30m0-30L0 30" stroke="#FFF" stroke-width="6" />
                            <path fill="#C8102E" d="M0 0l60 30m0-30L0 30" stroke="#C8102E" stroke-width="4" />
                            <path fill="#FFF" d="M30 0v30M0 15h60" stroke="#FFF" stroke-width="10" />
                            <path fill="#C8102E" d="M30 0v30M0 15h60" stroke="#C8102E" stroke-width="6" />
                        </svg>
                    @elseif (App::getLocale() == 'id')
                        <!-- Indonesian Flag SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" width="30" height="20" style="background-color: #ddd; border: 1px solid #ccc; border-radius: 2px;">
                            <rect width="3" height="1" fill="#ff0000" />
                            <rect width="3" height="1" y="1" fill="#ffffff" />
                        </svg>                        
                    @endif
                    <i class="bi bi-chevron-down toggle-dropdown"></i>
                </a>
                <ul>
                    <li><a href="javascript:void(0)">@lang('header.choose_language')</a></li>
                    <li>
                        <a href="{{ url('change-language/en') }}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="30" height="15">
                                    <rect width="60" height="30" fill="#012169"/>
                                    <path fill="#FFF" d="M0 0l60 30m0-30L0 30" stroke="#FFF" stroke-width="6"/>
                                    <path fill="#C8102E" d="M0 0l60 30m0-30L0 30" stroke="#C8102E" stroke-width="4"/>
                                    <path fill="#FFF" d="M30 0v30M0 15h60" stroke="#FFF" stroke-width="10"/>
                                    <path fill="#C8102E" d="M30 0v30M0 15h60" stroke="#C8102E" stroke-width="6"/>
                                </svg> @lang('header.english')
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('change-language/id') }}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" width="30" height="20" style="background-color: #ddd; border: 1px solid #ccc; border-radius: 2px;">
                                    <rect width="3" height="1" fill="#ff0000" />
                                    <rect width="3" height="1" y="1" fill="#ffffff" />
                                </svg> @lang('header.indonesia')
                            </span>
                        </a>
                    </li>
                </ul>
              </li>
            {{-- <li><a href="#contact">Contact</a></li> --}}
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="#">@lang('header.member_area')</a>
    </div>
</header>