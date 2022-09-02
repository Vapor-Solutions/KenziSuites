    <ul class="nav-menu custom-scrollbar">
        <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fas fa-angle-right ps-2" aria-hidden="true"></i>
            </div>
        </li>
        <li class="sidebar-main-title">
            <div>
                <h6>General</h6>
            </div>
        </li>
        <li class="dropdown">
            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                <i data-feather="home"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)"><i
                    data-feather="compass"></i><span>Administrators</span></a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/admins/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.admins.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.admins.index' ? 'active' : '' }}">
                        List of Administrators
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.admins.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.admins.create' ? 'active' : '' }}">
                        Add a new Administrator
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)"><i
                    data-feather="users"></i><span>Employees</span></a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/employees/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.employees.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.employees.index' ? 'active' : '' }}">
                        List of Employees
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.employees.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.employees.create' ? 'active' : '' }}">
                        Add a new Employee
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)"><i
                    data-feather="user-check"></i><span>Clients</span></a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/clients/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.clients.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.clients.index' ? 'active' : '' }}">
                        List of Clients
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clients.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.clients.create' ? 'active' : '' }}">
                        Add a new Client
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="nav-link" href="{{ route('admin.room_types.index') }}"><i
                    data-feather="list"></i><span>Room Types</span></a>
        </li>
        <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)"><i
                    data-feather="archive"></i><span>Rooms</span></a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/rooms/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.rooms.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.rooms.index' ? 'active' : '' }}">
                        List of Rooms
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.rooms.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.rooms.create' ? 'active' : '' }}">
                        Add a new Room
                    </a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a class="nav-link " href="{{ route('admin.testimonials.index') }}">
                <i data-feather="message-square"></i>
                <span>Testimonials</span>
            </a>
        </li>


        <li class="sidebar-main-title">
            <div>
                <h6>Core Functions</h6>
            </div>
        </li>

        <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)"><i
                    data-feather="calendar"></i><span>Bookings</span></a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/bookings/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.bookings.calendar') }}"
                        class="{{ Route::currentRouteName() == 'admin.bookings.calendar' ? 'active' : '' }}">
                        Calendar
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.bookings.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.bookings.index' ? 'active' : '' }}">
                        Current Bookings
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.bookings.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.bookings.create' ? 'active' : '' }}">
                        Add a new Booking
                    </a>
                </li>
            </ul>
        </li>





        <li class="sidebar-main-title">
            <div>
                <h6>CMS</h6>
            </div>
        </li>

        <li class="dropdown">
            <a class="nav-link " href="{{ route('admin.cms.photos') }}">
                <i data-feather="home"></i>
                <span>Photos</span>
            </a>
        </li>
        <li class="dropdown">
            <a class="nav-link " href="{{ route('admin.cms.content') }}">
                <i data-feather="list"></i>
                <span>Content</span>
            </a>
        </li>




        <li class="sidebar-main-title">
            <div>
                <h6>Facility Management</h6>
            </div>
        </li>





    </ul>
