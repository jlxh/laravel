<header class="main-header">
    <a href="{{ url('admin') }}" class="logo">
        <span class="logo-mini"><b>后台</b></span>
        <span class="logo-lg"><b>后台管理系统</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @foreach($links as $link)
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
        </div>
    </nav>
</header>