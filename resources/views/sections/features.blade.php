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
                <div class="fh5co-v-half to-animate-2">
                    <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ asset($features[0]->image) }})"></div>
                    <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                        <h2>{{$features[0]->name}}</h2>
                        <span class="pricing">${{$features[0]->sell_price}}</span>
                        <p>{{$features[0]->description}}</p>
                    </div>
                </div>
                <div class="fh5co-v-half">
                    <div class="fh5co-h-row-2 to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ $features[1]->image }})"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-left">
                            <h2>{{$features[1]->name}}</h2>
                            <span class="pricing">${{$features[1]->sell_price}}</span>
                            <p>{{$features[1]->description}}</p>
                        </div>
                    </div>
                    <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ asset($features[2]->image) }})"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-right">
                            <h2>{{$features[2]->name}}</h2>
                            <span class="pricing">${{$features[2]->sell_price}}</span>
                            <p>{{$features[2]->description}}</p>
                        </div>
                    </div>
                </div>

                <div class="fh5co-v-half">
                    <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{$features[3]->image}})"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-right">
                            <h2>{{$features[3]->name}}</h2>
                            <span class="pricing">${{$features[3]->sell_price}}</span>
                            <p>{{$features[3]->description}}</p>
                        </div>
                    </div>
                    <div class="fh5co-h-row-2 to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ $features[4]->image }})"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-left">
                            <h2>{{$features[4]->name}}</h2>
                            <span class="pricing">${{$features[4]->sell_price}}</span>
                            <p>{{$features[4]->description}}</p>
                        </div>
                    </div>
                </div>
                <div class="fh5co-v-half to-animate-2">
                    <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url({{ $features[5]->image }}"></div>
                    <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                        <h2>{{$features[5]->name}}</h2>
                        <span class="pricing">${{ $features[5]->sell_price }}</span>
                        <p>{{ $features[5]->description }}</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
