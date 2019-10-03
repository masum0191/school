<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ url("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt">

                    </i>
                    {{ trans('Dashboard') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url("student") }}" class="nav-link {{ request()->is('student') || request()->is('student/*') ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('Student') }}
                </a>
            </li>
            <li class="nav-item">
                    <a href="{{ url("teacher") }}" class="nav-link {{ request()->is('teacher') || request()->is('teacher/*') ? 'active' : '' }}">
                        <i class="fas fa-cogs nav-icon">

                        </i>
                        {{ trans('Teacher') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url("parent") }}" class="nav-link {{ request()->is('parent') || request()->is('parent/*') ? 'active' : '' }}">
                        <i class="fas fa-cogs nav-icon">

                        </i>
                        {{ trans('Parents') }}
                    </a>
                </li>
                <li class="nav-item">
                        <a href="{{ url("staff") }}" class="nav-link {{ request()->is('staff') || request()->is('staff/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('User/staff') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url("parent") }}" class="nav-link {{ request()->is('parent') || request()->is('parent/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('Parents') }}
                        </a>
                    </li>
                    <li class="nav-item">
                            <a href="{{ url("staff") }}" class="nav-link {{ request()->is('staff') || request()->is('staff/*') ? 'active' : '' }}">
                                <i class="fas fa-cogs nav-icon">

                                </i>
                                {{ trans('User/staff') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url("parent") }}" class="nav-link {{ request()->is('parent') || request()->is('parent/*') ? 'active' : '' }}">
                                <i class="fas fa-cogs nav-icon">

                                </i>
                                {{ trans('Parents') }}
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{ url("staff") }}" class="nav-link {{ request()->is('staff') || request()->is('staff/*') ? 'active' : '' }}">
                                    <i class="fas fa-cogs nav-icon">

                                    </i>
                                    {{ trans('User/staff') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url("parent") }}" class="nav-link {{ request()->is('parent') || request()->is('parent/*') ? 'active' : '' }}">
                                    <i class="fas fa-cogs nav-icon">

                                    </i>
                                    {{ trans('Parents') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                    <a href="{{ url("staff") }}" class="nav-link {{ request()->is('staff') || request()->is('staff/*') ? 'active' : '' }}">
                                        <i class="fas fa-cogs nav-icon">

                                        </i>
                                        {{ trans('User/staff') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url("parent") }}" class="nav-link {{ request()->is('parent') || request()->is('parent/*') ? 'active' : '' }}">
                                        <i class="fas fa-cogs nav-icon">

                                        </i>
                                        {{ trans('Parents') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                        <a href="{{ url("staff") }}" class="nav-link {{ request()->is('staff') || request()->is('staff/*') ? 'active' : '' }}">
                                            <i class="fas fa-cogs nav-icon">

                                            </i>
                                            {{ trans('User/staff') }}
                                        </a>
                                    </li>
                <li class="nav-item">
                        <a href="{{ url("parent") }}" class="nav-link {{ request()->is('parent') || request()->is('parent/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('Parents') }}
                        </a>
                    </li>
                    <li class="nav-item">
                            <a href="{{ url("staff") }}" class="nav-link {{ request()->is('staff') || request()->is('staff/*') ? 'active' : '' }}">
                                <i class="fas fa-cogs nav-icon">

                                </i>
                                {{ trans('User/staff') }}
                            </a>
                        </li>
            <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle">
                        <i class="fas fa-users nav-icon">

                        </i>
                        {{ trans('Attendance') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ url("acadamic/class") }}" class="nav-link {{ request()->is('acadamic/class') || request()->is('acadamic/class/*') ? 'active' : '' }}">
                                <i class="fas fa-unlock-alt nav-icon">

                                </i>
                                {{ trans('Class') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url("section") }}" class="nav-link {{ request()->is('section') || request()->is('section/*') ? 'active' : '' }}">
                                <i class="fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('Section') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fas fa-user nav-icon">

                                </i>
                                {{ trans('Syllabus') }}
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{ url("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fas fa-user nav-icon">

                                    </i>
                                    {{ trans('Assignment') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                    <a href="{{ url("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fas fa-user nav-icon">

                                        </i>
                                        {{ trans('Routine') }}
                                    </a>
                                </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                        <a class="nav-link  nav-dropdown-toggle">
                            <i class="fas fa-users nav-icon">

                            </i>
                            {{ trans('Attendance') }}
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ url("acadamic/class") }}" class="nav-link {{ request()->is('acadamic/class') || request()->is('acadamic/class/*') ? 'active' : '' }}">
                                    <i class="fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('Class') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url("section") }}" class="nav-link {{ request()->is('section') || request()->is('section/*') ? 'active' : '' }}">
                                    <i class="fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('Section') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fas fa-user nav-icon">

                                    </i>
                                    {{ trans('Syllabus') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                    <a href="{{ url("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fas fa-user nav-icon">

                                        </i>
                                        {{ trans('Assignment') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                        <a href="{{ url("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon">

                                            </i>
                                            {{ trans('Routine') }}
                                        </a>
                                    </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                            <a class="nav-link  nav-dropdown-toggle">
                                <i class="fas fa-users nav-icon">

                                </i>
                                {{ trans('Attendance') }}
                            </a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a href="{{ url("acadamic/class") }}" class="nav-link {{ request()->is('acadamic/class') || request()->is('acadamic/class/*') ? 'active' : '' }}">
                                        <i class="fas fa-unlock-alt nav-icon">

                                        </i>
                                        {{ trans('Class') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url("section") }}" class="nav-link {{ request()->is('section') || request()->is('section/*') ? 'active' : '' }}">
                                        <i class="fas fa-briefcase nav-icon">

                                        </i>
                                        {{ trans('Section') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fas fa-user nav-icon">

                                        </i>
                                        {{ trans('Syllabus') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                        <a href="{{ url("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon">

                                            </i>
                                            {{ trans('Assignment') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                            <a href="{{ url("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                                <i class="fas fa-user nav-icon">

                                                </i>
                                                {{ trans('Routine') }}
                                            </a>
                                        </li>
                            </ul>
                        </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
