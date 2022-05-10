<ul class="nav navbar-nav navbar-right">
    <li><a href="{{url('/')}}">home</a></li>
    @if(!empty($topNavItems))
        @foreach($topNavItems as $nav)
            @if(!empty($nav->children[0]))
                <li><a href="#" class="dropdown" data-toggle="dropdown">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif <i class="caret"></i>
                        <ul class="dropdown-menu">
                            @foreach($nav->children[0] as $childNav)
                                @if($childNav->type == 'custom')
                                    <li><a href="{{$childNav->slug}}" target="_blank">@if($childNav->name == NULL) {{$childNav->title}} @else {{$childNav->name}} @endif</a></li>
                                @elseif($childNav->type == 'category')
                                    <li><a href="{{url('category')}}/{{$childNav->slug}}">@if($childNav->name == NULL) {{$childNav->title}} @else {{$childNav->name}} @endif</a></li>
                                @else
                                    <li><a href="{{url('pages')}}/{{$childNav->slug}}">@if($childNav->name == NULL) {{$childNav->title}} @else {{$childNav->name}} @endif</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </a></li>
            @else
                @if($nav->type == 'custom')
                    <li><a href="{{$nav->slug}}" target="_blank">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                @elseif($nav->type == 'category')
                    <li><a href="{{url('category')}}/{{$nav->slug}}">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                @else
                    <li><a href="{{url('pages')}}/{{$nav->slug}}">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                @endif
            @endif
        @endforeach
    @endif
    <li><a href="{{url('contact-us')}}">contact us</a></li>
    <li><a href="{{url('donate-us')}}" class="btn btn-warning btn-rsn">donate us</a></li>
</ul>
