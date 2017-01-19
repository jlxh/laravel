<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" id="nav-tree">
            @foreach($navlinks as $link)
                @if(is_array($link['links']))
                    <li class="treeview">
                        <a>
                            {!! isset($link['icon']) ? '<i class="fa '.$link['icon'].'"></i>' : '' !!}
                            <span>{{ $link['name'] }}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            @foreach($link['links'] as $subLink)
                                <li><a href="{{ $subLink['links'] }}">{{ $subLink['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                @else
                    <li>
                        <a href="{{ $link['links'] }}">
                            {!! isset($link['icon']) ? '<i class="fa '.$link['icon'].'"></i>' : '' !!}
                            <span>{{ $link['name'] }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </section>
</aside>