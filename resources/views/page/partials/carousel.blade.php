<style>
    .imagen{
        background: url('{{ asset('uploads/homeiz.png') }}'), url('{{ asset('uploads/homeder.png') }}');
        background-repeat: no-repeat;
        background-position: left, right;
        padding: 3rem;
    }

    .carousel-caption h2{
        text-shadow: 2px 1px #000;
        font-weight: bold;
    }
</style>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade carrousel-sm" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        @foreach($slider as $key=>$s)
            <li data-target="#carousel-example-2" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : null }}"></li>
        @endforeach
    </ol>
    <!--/.Indicators-->
    <!--Slides-->

    <div class="carousel-inner" role="listbox">
        @foreach($slider as $key=>$s)
            <div class="carousel-item  {{ $key == 0 ? 'active' : null }}">
                <div class="view">
                    <img class="d-block w-100" src="{{ asset($s->image) }}"
                         alt="First slide">
                    <div class="mask" style=""></div>
                </div>
                @if($s->text[App::getLocale()]{'text'})
                <div class="carousel-caption d- none d-md-block wow fadeInLeft text-left d-flex justify-content-start align-items-center" style="right: unset; left: 100px;  bottom: 20%">
                    <div class="container imagen " >
                         {!! $s->text[App::getLocale()]{'text'} ?? '' !!}
                    </div>
                </div>
                @endif
            </div>
        @endforeach
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->