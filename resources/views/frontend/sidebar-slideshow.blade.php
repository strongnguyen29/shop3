@php
use App\Models\Slider;

$list_slider = Slider::where(['position' => 'slideshow', 'status' => 1])->get();
@endphp

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($list_slider as $slider)

            <div class="carousel-item @if($loop->first) active @endif" data-interval="2000">
                <img src="{{asset('img/' . $slider->img)}}" class="d-block w-100" alt="{{$slider->name}}">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>