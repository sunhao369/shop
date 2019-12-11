<div class="left-nav">
    <div id="side-nav">
        @foreach ($data as $k=>$v)
        <ul id="nav">
            <li>
                <a _href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                        <cite>{{$v['menu_name']}}</cite>
                    <i class="iconfont nav_right">&#xe697;</i>

                </a>
                @foreach($v['son'] as $kk=>$vv )
                <ul class="sub-menu">

                    <li date-refresh="1">

                        <a _href="{{$vv['url']}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>{{$vv['menu_name']}}</cite>
                        </a>

                    </li >

                </ul>
                @endforeach

            </li>
        </ul>
        @endforeach
    </div>
</div>
