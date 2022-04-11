@if(isset($features) && count($features)>=1)

<div id="fh5co-featured" data-section="features">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">Platos Destacados</h2>
                {{-- <p class="sub-heading to-animate"></p> --}}
            </div>
        </div>
        <div class="row">
            <div class="fh5co-grid">
                @foreach ($features as $key => $f)

                @if(($key+1)%6==0)
                <div class="fh5co-v-half to-animate-2">
                    <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ asset($f->image) }})"></div>
                    <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                        <h2>{{$f->name}}</h2>
                        <span class="pricing">${{$f->sell_price}}</span>
                        <p>{!! $f->description !!}</p>
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
                            <p>{!! $f->description !!}</p>
                        </div>
                    </div>
                    @else
                    <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ asset($f->image) }})"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-right">
                            <h2>{{$f->name}}</h2>
                            <span class="pricing">${{$f->sell_price}}</span>
                            <p>{!! $f->description !!}</p>
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
                            <p>{!! $f->description !!}</p>
                        </div>
                    </div>
                    @else
                    <div class="fh5co-h-row-2 to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ $f->image }})"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-left">
                            <h2>{{$f->name}}</h2>
                            <span class="pricing">${{$f->sell_price}}</span>
                            <p>{!! $f->description !!}</p>
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
                        <p>{!! $f->description !!}</p>
                    </div>
                </div>
                @endif

                @endforeach

            </div>
        </div>

    </div>
</div>

@endif
