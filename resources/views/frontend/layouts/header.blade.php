<header class="header">
    <a href="#" class="nav-btn">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <div class="top-panel">
        <div class="container">
            <div class="header-left">
                <ul class="header-cont">
                    @if ($phone)
                    <li>
                        @if ($phone !== null)
                        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{$phone}}">{{$phone}}</a>
                        @endif
                        @if ($phone2 !== null)/
                        <a href="tel:{{$phone}}">{{$phone2}}</a>
                        @endif
                    </li>
                    @endif
                    @if ($td)
                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{$td}}</li>
                    @endif
                </ul>
            </div>
            <div class="header-right">
                <ul class="social-list" style="margin-right: 20px;">
                    @if ($fb !== null)
                    <li><a target="_blank" href="{{$fb}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($tw !== null)
                    <li><a target="_blank" href="{{$tw}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($linke !== null)
                    <li><a target="_blank" href="{{$linke}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($insta !== null)
                    <li><a target="_blank" href="{{$insta}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($just !== null)
                    <li><a target="_blank" href="{{$just}}"><img src="{{asset('frontend/img/justdial.jpg')}}" width="22px" style="margin-top: 8px;"></a></li>
                    @endif
                </ul>
                <ul class="social-list">
                    @if (Route::has('login'))
                    @auth
                    <li>
                        <a href="{{ route('home')}}"><img src="{{Auth::user()->avatar}}" alt="" width="50px" style="width:50px; height:50px; border-radius: 50%; margin-top:10px;"></a>
                    </li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>
                    @else
                    @endauth
                    @endif
                </ul>

            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container">
            <div class="header-logo">
                <a href="/" class="logo"><img src="{{ $logo }}" alt="logo" width="125px"></a>
            </div>
            <nav class="nav-menu">
                <ul class="nav-list">
                    <li><a href="{{ route('/') }}">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                    <li><a href="{{ route('trainer') }}">Trainer</a></li>
                    @if (Route::has('login'))

                    @auth
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endauth

                    @endif
                    <li><a href="{{ route('enquiry') }}">Enquiry</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
