<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 footer-item-logo">
                <h3>About</h3>
                <div style="overflow: hidden;
                margin-top:20px;
                padding-top:0;
                margin-bottom:0px;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 5; /* number of lines to show */
                -webkit-box-orient: vertical;">
                <a href="{{route('about')}}">{!!$dc!!}</a>
                </div>

                <ul class="social-list" style="margin-top: 10px;">
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
            </div>
            <div class="col-sm-6 col-lg-3 footer-item footer-item-list">
                <h3>Links</h3>
                <ul class="footer-link">
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Enquiry</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 footer-item">
                <h3>Contact us</h3>
                <ul class="footer-cont">
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{$phone}}">{{$phone}}</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{$phone2}}">{{$phone2}}</a></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                            href="mailto:crossFit@gmail.com">{{$email}}</a></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="contacts.html">{{$address}}</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 footer-item">
                <h3>Blog</h3>
                <ul class="footer-blog">
                    @forelse ($footerBlog as $item)
                    <li>
                        <a href="{{route('single-post',[$item->slug])}}" class="img-cover"><img src="{{$item->url}}"
                                alt="img"></a>
                        <div class="footer-blog-info">
                            <div class="name"><a href="{{route('single-post',[$item->slug])}}">{{$item->title}}</a>
                            </div>
                            <div style="overflow: hidden;
                            text-overflow: ellipsis;
                            display: -webkit-box;
                            -webkit-line-clamp: 2; /* number of lines to show */
                            -webkit-box-orient: vertical;">
                                <p>
                                    {{$item->excerpt}}
                                </p>
                            </div>

                        </div>
                    </li>
                    @empty
                    <p>No Blogs Found</p>
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="copyright"><a href="/" target="_blank">{!!$ct!!}
            </div>
        </div>
    </div>
</footer>
