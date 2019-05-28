@php
use App\Models\Category;

$categories = Category::getCategories();

@endphp

<ul class="list-group">
    <li class="list-group-item active">DANH MỤC SẢN PHẨM</li>
    {{-- Lap show menu --}}
    @foreach($categories as $category)
        @php

            // Load menu con;
            $sub_cats = Category::getSubCategories($category->id);

        @endphp

        @if(count($sub_cats) == 0) {{-- Khong co menu con --}}

            <li class="list-group-item">{{$category->name}}</li>

        @else {{-- Co menu con --}}

            <li class="list-group-item">
                {{$category->name}}
                <ul>

                    {{-- Lap show submenu --}}
                    @foreach($sub_cats as $sub_cat)

                        <li><a href="{{url($sub_cat->slug)}}">{{$sub_cat->name}}</a></li>

                    @endforeach

                </ul>
            </li>

        @endif

    @endforeach

</ul>
