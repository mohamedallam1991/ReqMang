@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();

@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a >
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('backend/images/logoo.png')}}" alt="Logo"
                             style="width: 115px; height: 50px;">
                    </div>
                </a>
            </div>
        </div>


        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            @if(Auth::user()->usertype == 'Admin')
                <li class="{{ ($route == 'dashboard')?'active':'' }}">
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="pie-chart"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{ ($route == '')?'active':'' }}">
                    <a >
                        <i data-feather="pie-chart"></i>
                        <span>Online Materials</span>
                    </a>
                </li>
                <li class="treeview {{ ($prefix == '/users')?'active':'' }} ">
                    <a href="#">
                        <i data-feather="message-circle"></i>
                        <span>Manage User</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a><i class="ti-more"></i>View User</a></li>
                        <li><a ><i class="ti-more"></i>Add User</a></li>
                    </ul>
                </li>
            @endif
            <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
                <a href="#">
                    <i data-feather="user"></i> <span>Manage Profile</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a ><i class="ti-more"></i>Your Profile</a></li>
                    <li><a ><i class="ti-more"></i>Change Password</a></li>

                </ul>
            </li>

            @if(Auth::user()->usertype == "Admin" || Auth::user()->usertype == "user")
                <li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
                    <a href="#">
                        <i data-feather="settings"></i> <span>Setup Management</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a ><i class="ti-more"></i>Class</a></li>
                        <li><a ><i class="ti-more"></i>Academic Year</a></li>
                        <li><a ><i class="ti-more"></i>Faculty</a></li>
                        <li><a ><i class="ti-more"></i>Shift</a></li>
                        <li><a ><i class="ti-more"></i>Fee (Category)</a></li>
                        <li><a ><i class="ti-more"></i>Fee (Amount)</a></li>
                        <li><a ><i class="ti-more"></i>Examination</a></li>
                        <li><a ><i class="ti-more"></i>Courses</a></li>
                        <li><a ><i class="ti-more"></i>Assign Subject
                                Grades</a>
                        </li>
                        <li><a ><i class="ti-more"></i>Role Designation </a></li>


                    </ul>
                </li>
            @endif
            @if(Auth::user()->usertype == "Admin" || Auth::user()->usertype == "user")
                <li class="treeview {{ ($prefix == '/students')?'active':'' }}">
                    <a href="#">
                        <i data-feather="package"></i></i> <span>Student Management</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a ><i class="ti-more"></i>Student
                                Registration</a></li>

                        <li><a ><i class="ti-more"></i>Roll Generate</a></li>
                        <li><a ><i class="ti-more"></i>Registration Fee </a>
                        </li>
                        <li><a ><i class="ti-more"></i>Exam Fee </a></li>

                    </ul>
                </li>
            @endif
            @if(Auth::user()->usertype == "Admin")
                <li class="treeview {{ ($prefix == '/employees')?'active':'' }}">
                    <a href="#">
                        <i data-feather="users"></i> <span>Employee Management</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Employee
                                Registration</a></li>

                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Employee Salary</a>
                        </li>

                        <li><a ><i class="ti-more"></i>Employee Leave</a></li>
                        <li><a ><i class="ti-more"></i>Employee Attendance</a>
                        </li>
                        {{--                    <li><a href="{{ route('employee.monthly.salary') }}"><i class="ti-more"></i>Employee Monthly Salary</a>--}}
                        {{--                    </li>--}}


                    </ul>
                </li>
            @endif

            @if(Auth::user()->usertype == "Admin" || Auth::user()->usertype == "user")
                <li class="treeview {{ ($prefix == '/marks')?'active':'' }}">
                    <a href="#">
                        <i data-feather="edit-2"></i> <span> Grades Management</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Assign Grades</a></li>
                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Edit Grades</a></li>

                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Grade System Information</a>
                        </li>

                    </ul>
                </li>
            @endif

            @if(Auth::user()->usertype == "Admin")
                <li class="treeview {{ ($prefix == '/accounts')?'active':'' }}">
                    <a href="#">
                        <i data-feather="inbox"></i> <span> Accounts Management</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Student Fee</a></li>
                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Employee Salary</a>
                        </li>

                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Miscellaneous</a></li>

                    </ul>
                </li>
            @endif

            <li class="treeview {{ ($prefix == '/reports')?'active':'' }}">
                <a href="#">
                    <i data-feather="server"></i></i>
                    @if(Auth::user()->usertype == "Admin" || Auth::user()->usertype == "user")
                        <span> Reports Management</span>
                    @else
                        <span> Check Result</span>
                    @endif
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    @if(Auth::user()->usertype == "Admin")
                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Monthly/Yearly
                                Profit</a>
                        </li>

                        <li class="{{ ($route == '')?'active':'' }}"><a
                                ><i class="ti-more"></i>Attendance
                                Report</a>
                        </li>
{{--                        <li class="{{ ($route == 'student.idcard.view')?'active':'' }}"><a--}}
{{--                                href="{{ route('student.idcard.view') }}"><i class="ti-more"></i>*Student ID Card </a>--}}
{{--                        </li>--}}

                    @endif
                    <li class="{{ ($route == '')?'active':'' }}"><a
                            ><i class="ti-more"></i>Generate Result</a>
                    </li>


                    {{--                    <li class="{{ ($route == 'student.result.view')?'active':'' }}"><a--}}
                    {{--                            href="{{ route('student.result.view') }}"><i class="ti-more"></i>Student Result</a></li>--}}

                </ul>
            </li>

        </ul>
    </section>

</aside>
