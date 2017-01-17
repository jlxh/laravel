<div class="top_nav">
    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                @foreach(array_reverse($links) as $link)
                    <li>
                        @if(is_array($link['links']))
                            <a href="javascript:;" class="dropdown-toggle"
                               data-toggle="dropdown">{{ $link['name'] }}</a>
                            <ul class="dropdown-menu">
                                @foreach($link['links'] as $subLink)
                                    <li><a href="{{ url($subLink['links']) }}" {{ $subLink['pjax'] or '' }}>{{ $subLink['name'] }}</a></li>
                                @endforeach
                            </ul>
                        @else
                            <a href="{{ $link['links'] }}" {{ $link['pjax'] or '' }}>{{ $link['name'] }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>