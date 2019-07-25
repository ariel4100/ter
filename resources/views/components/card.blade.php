
                <div class="card shadow-none">
                    @if(isset($item->image[0]['image']))
                        <div class="card-body justify-content-center d-flex align-items-center" style="height: {{$height ?? 'auto'}};">
                            <img class="img-fluid" src="{{ asset($item->image[0]['image'] ?? '') }}" alt="Card image cap">
                        </div>
                    @endif
                    @if(isset($item->text{'image'}))
                        <div class="card-body justify-content-center d-flex align-items-center" style="height: {{$height ?? 'auto'}};">
                            <img class="img-fluid" src="{{ asset($item->text{'image'} ?? '') }}" alt="Card image cap">
                        </div>
                    @endif
                    <div class="card-footer bg-white {{ $style ?? '' }}" style="height: {{$footerheight ?? '170px'}}">
                        @if(isset($item->general->text))
                            <p class="m-0">{!! $item->general->text{'title_'.App::getLocale()} ?? '' !!}</p>
                        @endif
                        @if(isset($item->subfamily->text))
                            <p class="m-0">{!! $item->subfamily->text{'title_'.App::getLocale()} ?? '' !!}</p>
                        @endif
                        @if(isset($item->general))
                            <h4 class="">
                                {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                            </h4>
                        @else
                            <p class="m-0">
                                {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                            </p>
                        @endif
                        <h4 class="">
                            {!! $item->text{'subtitle_'.App::getLocale()} ?? '' !!}
                        </h4>
                    </div>
                </div>


{{--<div class="row my-5">--}}
    {{--@foreach($productos as $item)--}}
        {{--@dd($item->image[0]['image'])--}}
        {{--<div class="col-md-4 mb-5">--}}
            {{--<a href="{{ $route ?? route('producto',['producto' => $item->id]) }}" class=" " style="text-decoration: none; color: unset;">--}}
                {{--<div class="card">--}}
                    {{--@if(isset($item->image[0]['image']))--}}
                        {{--<div class="card-body text-center" style="height: 270px;">--}}
                            {{--<img class="img-fluid" src="{{ asset($item->image[0]['image'] ?? '') }}" alt="Card image cap">--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    {{--@if(isset($item->text{'image'}))--}}
                        {{--<div class="card-body text-center" style="height: 270px;">--}}
                            {{--<img class="img-fluid" src="{{ asset($item->text{'image'} ?? '') }}" alt="Card image cap">--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    {{--<div class="card-footer bg-white {{ $style ?? '' }}">--}}
                        {{--@if(isset($item->general->text))--}}
                            {{--<p class="m-0">{!! $item->general->text{'title_'.App::getLocale()} ?? '' !!}</p>--}}
                        {{--@endif--}}
                        {{--@if(isset($item->subfamily->text))--}}
                            {{--<p class="m-0">{!! $item->subfamily->text{'title_'.App::getLocale()} ?? '' !!}</p>--}}
                        {{--@endif--}}
                        {{--<h4 class="">--}}
                            {{--{!! $item->text{'title_'.App::getLocale()} ?? '' !!}--}}
                        {{--</h4>--}}
                        {{--<h4 class="">--}}
                            {{--{!! $item->text{'subtitle_'.App::getLocale()} ?? '' !!}--}}
                        {{--</h4>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--@endforeach--}}
{{--</div>--}}