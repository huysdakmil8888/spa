<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href=""
                >
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard</a
                >
                <div class="sb-sidenav-menu-heading">Interface</div>


                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Department
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    >
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        @if(isset(auth()->user()->role->permission['name']['department']['can-add']))
                        <a class="nav-link" href="{{route('departments.create')}}">Create Department</a>
                        @endif
                        @if(isset(auth()->user()->role->permission['name']['department']['can-list']))
                        <a class="nav-link" href="{{route('departments.index')}}">View Department</a></nav>
                         @endif
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2"
                   aria-expanded="false" aria-controls="collapseLayouts2">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Role
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    >
                </a>
                <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('roles.create')}}">Create Role</a>
                        <a class="nav-link" href="{{route('roles.index')}}">View Role</a></nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3"
                   aria-expanded="false" aria-controls="collapseLayouts3">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    User
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    >
                </a>
                <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('users.create')}}">Create User</a>
                        <a class="nav-link" href="{{route('users.index')}}">View User</a></nav>
                </div>
                @if(isset(auth()->user()->role->permission['name']['permission']['can-list']))
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4"
                   aria-expanded="false" aria-controls="collapseLayouts4">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Permission
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    >
                </a>
                <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('permissions.create')}}">Create Permission</a>
                        <a class="nav-link" href="{{route('permissions.index')}}">View Permission</a></nav>
                </div>
                @endif
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts7"
                   aria-expanded="false" aria-controls="collapseLayouts7">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Leave
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    >
                </a>
                <div class="collapse" id="collapseLayouts7" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('leaves.create')}}">Create Leave</a>
                        <a class="nav-link" href="{{route('leaves.index')}}">View Leave</a></nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts8"
                   aria-expanded="false" aria-controls="collapseLayouts8">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Notice
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    >
                </a>
                <div class="collapse" id="collapseLayouts8" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('notices.create')}}">Create Notice</a>
                        <a class="nav-link" href="{{route('notices.index')}}">View Notice</a>
                        <a class="nav-link" href="{{url('mail')}}">Send email</a></nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{Auth::user()->name}}
        </div>
    </nav>
</div>
