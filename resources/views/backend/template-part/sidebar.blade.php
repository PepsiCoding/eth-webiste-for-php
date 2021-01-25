
<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler"> </div>
            </li>
            <li class="sidebar-search-wrapper">
            </li>
            <br>
            <br>
            <li class="nav-item start @php echo "active",(request()->path() != 'admin/dashboard')?:"";@endphp">
                <a href="{{route('admin.dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">管理者画面</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item @if( request()->path() == 'admin/employee' || request()->path() == 'admin/employee' ) active open @endif
            @if( request()->path() == 'admin/employee' || request()->path() == 'admin/employee/add-employee' ) active open @endif
            @if( request()->path() == 'admin/employee' || request()->path() == 'admin/employee/attendance' ) active open @endif
            @if( request()->path() == 'admin/employee' || request()->path() == 'admin/individual-attendance' ) active open @endif
            @if( request()->path() == 'admin/employee' || request()->path() == 'admin/employee/attendance-count' ) active open @endif
            @if( request()->path() == 'admin/employee' || request()->path() == 'admin/employee/edit-employee' ) active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-user"></i>
                    <span class="title">メンバー管理</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if( request()->path() == 'admin/employee' ) active open @endif">
                        <a href="{{route('employee.list')}}" class="nav-link ">
                            <span class="title">メンバーリスト</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start @php echo "active",(request()->path() != 'admin/emptycar')?:"";@endphp
            @php echo "active",(request()->path() != 'admin/payroll/chart')?:"";@endphp
            @php echo "active",(request()->path() != 'admin/payroll/salary/sheet')?:"";@endphp">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-money"></i>
                    <span class="title">空車管理</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if( request()->path() == 'admin/payroll' ) active open @endif">
                        <a href="{{route('emptycar.list')}}" class="nav-link ">
                            <span class="title">空車リスト</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start @php echo "active",(request()->path() != 'admin/luggage')?:"";@endphp
            @php echo "active",(request()->path() != 'admin/notice/create')?:"";@endphp
            @php if (request()->path() == 'admin/notice/edit/{id}') echo "active" @endphp">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-clipboard"></i>
                    <span class="title">貨物管理</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if( request()->path() == 'admin/notice' ) active open @endif">
                        <a href="{{route('luggage.list')}}" class="nav-link ">
                            <span class="title">貨物リスト</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
