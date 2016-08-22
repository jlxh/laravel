<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title">
            <a class="site_title" href="{{ url('admin') }}">后台管理系统</a>
        </div>
        <div class="clearfix"></div>
        <div id="sidebar-menu" class="main_menu_side main_menu hidden-print">
            <div class="menu-section">
                <ul class="nav side-menu" id="nav-tree">
                    @foreach($navlinks as $link)
                        <li>
                            @if(is_array($link['links']))
                                <a>
                                    {!! isset($link['icon']) ? '<i class="fa '.$link['icon'].'"></i>' : '' !!}
                                    {{ $link['name'] }}
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu">
                                    @foreach($link['links'] as $subLink)
                                        <li><a href="{{ $subLink['links'] }}" {{ $subLink['pjax'] or '' }}>{{ $subLink['name'] }}</a></li>
                                    @endforeach
                                </ul>
                            @else
                                <a href="{{ $link['links'] }}" {{ $link['pjax'] or '' }}>
                                    {!! isset($link['icon']) ? '<i class="fa '.$link['icon'].'"></i>' : '' !!}
                                    {{ $link['name'] }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>