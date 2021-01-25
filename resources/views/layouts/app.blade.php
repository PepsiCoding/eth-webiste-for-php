<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
        <!-- begin:: Page -->

        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="#">
                    <img alt="Logo" src="{{asset('/media/img/logo_sm.png')}}" />
                </a>
            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
            </div>
        </div>

        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
                        @include('includes.header')
                    </div>   
                    <!-- end:: Header        -->
                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch mt-4">
                        <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
                            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                                <div class="kt-content kt-grid__item kt-grid__item--fluid">
                                    <!-- begin:: Content -->
                                    <div class="row">
                                        <div class="col-xl-10">
                                            @yield('content')
                                        </div>
                                        @yield('sidebar')
                                    </div>  
                                </div>  
                            </div>  
                        </div>
                    </div>  
                    <div>  
                        @yield('main')
                    </div>
                    <!-- begin:: Footer -->
                    <div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
                        @include('includes.footer')
                    </div>  
                    <!-- end:: Footer -->
                </div>
            </div>
        </div>

    <!-- end:: Page -->
    
    <!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>
    <!-- end::Scrolltop -->
    <!--begin:: Global Mandatory Vendors -->
    <script src="{{asset('/js/jquery.js')}}" type="text/javascript"></script>
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="{{asset('/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="{{asset('/js/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/mapbutton.js')}}" type="text/javascript"></script>
    <!--end::Page Scripts -->
    <script type="text/javascript">
        @yield ('scripts')
    </script>
    <script>
        n =  new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        h = n.getHours();
        min = n.getMinutes();
        sec = n.getSeconds();
        <!-- 2019年05月30日（木）  12：19：31 現在 -->
        document.getElementById("date").innerHTML = y + "年" + m + "月" + d + "日（木）" + "     "  + h + ":" + min + ":" + sec + "現在";
    </script>
    </body>
</html>
