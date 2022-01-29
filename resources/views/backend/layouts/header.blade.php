<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ $logo }}" alt="">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ $logo }}" alt="">
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ $logo }}" alt="" width="50px">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ $logo }}" alt="" width="200px">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

        </div>


        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input form-control" placeholder="Search" />
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            @can('notification access')
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline bx-tada"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Subscription List </h6>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        @forelse ($notifiall as $item)
                        @if ($item->remaining_days < 20) <a href="{{ route('subscription.index') }}"
                            class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                        <i class="mdi mdi-alert-circle-check text-white"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">{{ $item->user->name }}</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-0">Remain Days {{ $item->remaining_days }}</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endif
                            @empty
                            <p style="margin-left: 20px;">No Notification Found</p>
                            @endforelse

                    </div>
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Client Birthday's  </h6>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        @forelse ($bithdaylist as $item)
                        <a href="{{ route('birthday.index') }}" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                        <i class="mdi mdi-cake-variant text-white"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">{{ $item->name }}</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-0">Birth Date {{ $item->dob }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @empty
                        <p style="margin-left: 20px;">No Notification Found</p>
                        @endforelse
                    </div>
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Personal Training Client</h6>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        @forelse ($bithdaylist as $item)
                        <a href="{{ route('birthday.index') }}" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                        <i class="mdi mdi-cake-variant text-white"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">{{ $item->name }}</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-0">Remain Days {{ $item->remaining_days }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @empty
                        <p style="margin-left: 20px;">No Notification Found</p>
                        @endforelse
                    </div>
                </div>
            </div>
            @endcan

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <img class="rounded-circle header-profile-user" src="{{ Auth::user()->avatar }}"
                        alt="Header Avatar">

                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('user.profile',[Auth::user()->id])}}"><i
                            class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i>
                        Profile</a>
                    <a class="dropdown-item" href="{{route('/')}}"><i
                            class="dripicons-home font-size-16 align-middle me-1"></i>
                        Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i
                            class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
