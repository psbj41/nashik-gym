<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="{{Auth::user()->avatar}}" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">{{Auth::user()->name}}</h5>
                    <span class="font-size-13 text-white-50">{{strtoupper(Auth::user()->roles[0]->name)}}</span>
                </div>
            </div>
        </div>



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li style="margin-top: 10px">
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        @can('notification access')
                        <span class="badge rounded-pill bg-info float-end">{{$enquiryCount}}</span>
                        <span class="badge rounded-pill bg-danger float-end"
                            style="margin: 5px 5px 0px 0px">{{$birthdayCount}}</span>
                        @endcan
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">{{strtoupper(Auth::user()->roles[0]->name)}} Section</li>

                @can('authentication access')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-user-group"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('user.index') }}">Total Registration</a></li>
                        <li><a href="{{ route('role.index') }}">Roles Table</a></li>
                        <li><a href="{{ route('permission.index') }}">Permission Table</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-money-bill-alt"></i>
                        <span>Daily Expenses</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('expense.index') }}">Expenses</a></li>

                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-gear"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('setting.index') }}">Site Settings</a></li>
                        <li><a href="{{ route('homesetting.index') }}">Home Settings</a></li>
                    </ul>
                </li>

                @endcan

                @can('pay option access')
                <li>
                    <a href="{{ route('my.assign.workout.index',[Auth::user()->id]) }}" class=" waves-effect">
                        <i class="dripicons-rocket"></i>
                        <span>My Workout</span>
                    </a>
                </li>
                @endcan

                @can('blogs access')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-blogger"></i>
                        <span>Blogs Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('category.index') }}">Category Table</a></li>
                        <li><a href="{{ route('post.index') }}">Post Table</a></li>
                        <li><a href="{{ route('video.index') }}">Videos</a></li>
                    </ul>
                </li>
                @endcan

                @can('message access')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-conversation"></i>
                        <span>Message</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('message.index')}}">Payment SMS</a></li>
                        <li><a href="{{ route('birthday.index')}}">Birthday SMS</a></li>
                    </ul>
                </li>
                @endcan

                @can('payment access')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-cash-multiple"></i>
                        <span>Paymets Check</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('package.index')}}">Packages</a></li>
                        <li><a href="{{ route('subscription.index')}}">Subscription</a></li>
                        <li><a href="{{ route('moneytable.index')}}">Money Amounts</a></li>
                    </ul>
                </li>
                @endcan

                @can('trainers access')

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-convert-outline"></i>
                        <span>Trainers Section</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('trainer.index') }}">Trainers</a></li>
                        <li><a href="{{ route('tsub.index') }}">PT Subscription</a></li>
                        <li><a href="{{ route('ptmoney.index') }}">PT Account Table</a></li>
                    </ul>
                </li>
                @endcan

                @can('pay option access')
                <li>
                    <a href="{{ route('payment.index') }}" class=" waves-effect">
                        <i class="mdi mdi-cash-multiple"></i>
                        <span>Pay Options</span>
                    </a>
                </li>
                @endcan

                @can('enquiry access')
                <li>
                    <a href="{{ route('contact.index') }}" class=" waves-effect">
                        <i class="dripicons-phone"></i>
                        <span>Enquiry Table</span>
                    </a>
                </li>
                @endcan

                @can('testimonial access')

                <li>
                    <a href="{{ route('testimonial.index')}}" class=" waves-effect">
                        <i class="mdi mdi-comment-quote-outline"></i>
                        <span>Testimonials</span>
                    </a>
                </li>

                @endcan

                @can('schedule access')
                <li>
                    <a href="{{ route('schedule.index')}}" class=" waves-effect">
                        <i class="mdi mdi-calendar-multiselect"></i>
                        <span>Gym Schedule</span>
                    </a>
                </li>
                @endcan

                @can('program access')
                <li>
                    <a href="{{ route('program.index') }}" class=" waves-effect">
                        <i class="dripicons-rocket"></i>
                        <span>Programs</span>
                    </a>
                </li>
                @endcan

                @can('authentication access')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-gear"></i>
                        <span>Workout</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('workout.index') }}">Workouts</a></li>
                        <li><a href="{{ route('assign.workout.index') }}">Workout-Client</a></li>
                    </ul>
                </li>
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
