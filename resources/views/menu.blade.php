@extends('layouts.main')

@section('content')
        <div id="fh5co-featured" data-section="features">
            <div class="container">
        @foreach ($categories as $cat)

                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">{{ $cat['name'] }}</h2>
                        {{-- <p class="sub-heading to-animate"></p> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="fh5co-grid">
                        @foreach ($cat['dishes'] as $key => $f)

                        @if(($key+1)%6==0)
                        <div class="fh5co-v-half to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ asset($f->image) }})"></div>
                            <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                                <h2>{{$f->name}}</h2>
                                <span class="pricing">${{$f->sell_price}}</span>
                                {{-- <p>{!! $f->description !!}</p> --}}

                                <div class="fh5co-food-pricing">
                                    <div>
                                        <a class="btn btn-sm btn-primary btn-outline" href="{{ route('dish-details', ['id'=>$f->id]) }}" >Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @elseif(($key+1)%6==1 || ($key+1)%6==2 )
                        <div class="fh5co-v-half">
                            @if(($key+1)%6==1)
                            <div class="fh5co-h-row-2 to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ $f->image }})"></div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-left">
                                    <h2>{{$f->name}}</h2>
                                    <span class="pricing">${{$f->sell_price}}</span>
                                    {{-- <p>{!! $f->description !!}</p> --}}

                                    <div class="fh5co-food-pricing">
                                        <div>
                                            <a class="btn btn-sm btn-primary btn-outline" href="{{ route('dish-details', ['id'=>$f->id]) }}" >Detalles</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ asset($f->image) }})"></div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-right">
                                    <h2>{{$f->name}}</h2>
                                    <span class="pricing">${{$f->sell_price}}</span>
                                    {{-- <p>{!! $f->description !!}</p> --}}

                                    <div class="fh5co-food-pricing">
                                        <div>
                                            <a class="btn btn-sm btn-primary btn-outline" href="{{ route('dish-details', ['id'=>$f->id]) }}" >Detalles</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                        @elseif(($key+1)%6==3 || ($key+1)%6==4)
                        <div class="fh5co-v-half">
                            @if(($key+1)%6==3)
                            <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{$f->image}})"></div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-right">
                                    <h2>{{$f->name}}</h2>
                                    <span class="pricing">${{$f->sell_price}}</span>
                                    {{-- <p>{!! $f->description !!}</p> --}}

                                    <div class="fh5co-food-pricing">
                                        <div>
                                            <a class="btn btn-sm btn-primary btn-outline" href="{{ route('dish-details', ['id'=>$f->id]) }}" >Detalles</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="fh5co-h-row-2 to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ $f->image }})"></div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-left">
                                    <h2>{{$f->name}}</h2>
                                    <span class="pricing">${{$f->sell_price}}</span>
                                    {{-- <p>{!! $f->description !!}</p> --}}

                                    <div class="fh5co-food-pricing">
                                        <div>
                                            <a class="btn btn-sm btn-primary btn-outline" href="{{ route('dish-details', ['id'=>$f->id]) }}" >Detalles</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                        @elseif (($key+1)%6==5)
                        <div class="fh5co-v-half to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ $f->image }}"></div>
                            <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                                <h2>{{$f->name}}</h2>
                                <span class="pricing">${{ $f->sell_price }}</span>
                                {{-- <p>{!! $f->description !!}</p> --}}
                                <div class="fh5co-food-pricing">
                                    <div>
                                        <a class="btn btn-sm btn-primary btn-outline" href="{{ route('dish-details', ['id'=>$f->id]) }}" >Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @endforeach

                    </div>
                </div>
            @endforeach

            </div>
        </div>

    @include('sections.reservation')
@endsection
