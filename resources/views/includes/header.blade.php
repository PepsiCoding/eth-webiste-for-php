    <div class="kt-header__top">
        <div class="kt-container form_style">

            <!-- begin:: Brand -->
            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                <div class="kt-header__brand-logo">
                    <a href="/">
                        <img alt="Logo" src="{{asset('/media/img/logo.png')}}" class="" />
                        <img alt="Logo" src="{{asset('/media/img/logo_sm.png')}}" class="kt-header__brand-logo-sticky" />
                    </a>
                </div>
            </div>
            <!-- end:: Brand -->
            <!-- begin:: Brand -->
            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                <div class="kt-header__brand-logo">
                    <a href="javascript:void(0)">
                        <img alt="Logo" src="{{asset('/media/img/support_avator.png')}}" class="kt-header__brand-logo-default" />
                        <img alt="Logo" src="{{asset('/media/img/support_avator_sm.png')}}" class="kt-header__brand-logo-sticky" />
                    </a>
                </div>
            </div>
            <!-- end:: Brand -->
            <!-- begin::login and logout brand -->
            <div class="kt-header__brand kt-grid__item" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto kt-font-xl">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">

                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('会員登録') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown text-right">
                            <span id="navbarDropdown" class="nav-link">
                                {{ Auth::user()->corp_name }}
                            </span>
                            <a href="{{ route('memberedit') }}" class="btn">
                                {{ __('会員情報修正') }}
                            </a>|
                            <a href="{{ route('logout') }}" class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('ログアウト') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
            <!-- end::login and logut brand -->
            <!-- begin:: Brand -->
            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                <div class="kt-header__brand-logo">
                <a href="/contact">
                    <img alt="Logo" src="{{asset('/media/img/mail_icon.png')}}" class="kt-header__brand-logo-default"/>
                    <img alt="Logo" src="{{asset('/media/img/mail_icon_sm.png')}}" class="kt-header__brand-logo-sticky" />
                </a>
                </div>
            </div>
            <!-- end:: Brand -->
        </div>
    </div>
