<!--================= SIDEBAR =================-->
<div class="col-12 col-lg-3 sidebar">
    <a href="#" class="btn btn-sidebar"><span>Widgets</span></a>
    <ul class="widgets">
        <!--=========== WIDGET-SEARCH ===========-->
        <li class="widget widget-search">
            <h3 class="title">Search</h3>
            <form class="search-form">
                <input class="inp-form" type="email" name="search" placeholder="Search">
                <button type="submit" class="btn-form"><i class="fa fa-search"
                        aria-hidden="true"></i></button>
            </form>
        </li>
        <!--========= WIDGET-SEARCH END =========-->

        <!--========= WIDGET-CATEGORIES =========-->
        <li class="widget widget-categories">
            <h3 class="title">Categories</h3>
            <ul>
                @forelse ($categories as $item)
                <li><a href="{{ route('category-post',[$item->slug]) }}">{{ $item->name }}</a></li>
                @empty
                    <p>No Category Found</p>
                @endforelse
            </ul>
        </li>
        <!--======= WIDGET-CATEGORIES END =======-->
        <!--======== WIDGET-RECENT-POSTS ========-->
        <li class="widget widget-recent-posts">
            <h3 class="title">Recent Blog Posts</h3>
            <ul>
                @forelse ($latestPost as $item)
                <li>
                    <a href="{{ route('single-post',[$item->slug])}}">{{$item->title}}</a>
                    <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i>{{ $item->created_at->diffForHumans()}}</div>
                </li>
                @empty
                    <p>No Latest Post Found</p>
                @endforelse
            </ul>
        </li>
        <!--====== WIDGET-RECENT-POSTS END ======-->
    </ul>
</div>
<!--=============== SIDEBAR END ===============-->
