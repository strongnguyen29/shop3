@php
use App\Models\Menu;

$menus = Menu::where(['status' => 1, 'parentid' => 0])->get();

@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {{-- Lap show menu --}}
            @foreach($menus as $menu)
                @php
                // Load menu con;
                $sub_menus = Menu::where(['status' => 1, 'parentid' => $menu->id])->get();
                @endphp

                @if(count($sub_menus) == 0) {{-- Khong co menu con --}}
                    <li class="nav-item @if($loop->first) active @endif">
                        <a class="nav-link" href="{{url($menu->link)}}">{{$menu->name}}</a>
                    </li>
                @else {{-- Co menu con --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{url($menu->link)}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{$menu->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {{-- Lap show submenu --}}
                            @foreach($sub_menus as $sub_menu)
                                <a class="dropdown-item" href="{{url($sub_menu->link)}}">{{$sub_menu->name}}</a>
                            @endforeach
                        </div>
                    </li>
                @endif

            @endforeach
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>