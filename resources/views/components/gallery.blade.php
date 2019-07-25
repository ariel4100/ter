<div id="carouselExampleCaptions_{{ $id }}" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @if($gallery)
            @foreach($gallery as $k=>$item)
                <li data-target="#carouselExampleCaptions_{{ $id }}" style="background-color: darkgray;" data-slide-to="{{ $k }}" class="{{ $k == 0 ? 'active' : null }}" ></li>
            @endforeach
        @endif
    </ol>
    <div class="carousel-inner">
        @if($gallery)

            @foreach($gallery as $k=>$item)
                <div class="carousel-item {{ $k == 0 ? 'active' : null }} text-center">
                    <img class="img-fluid" style=" " src="{!! asset($item{'image'}) !!}"
                         alt="First slide">
                    @if($item{'title_'.App::getLocale()})
                    <div class="carousel-caption d-none d-md-block">
                        <span class="bg-dark text-white px-3 py-1">{!! $item{'title_'.App::getLocale()} !!}</span>
                    </div>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions_{{ $id }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions_{{ $id }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>