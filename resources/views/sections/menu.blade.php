<div id="fh5co-menus" data-section="menu">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">Menu</h2>
                <p class="sub-heading to-animate">{{ $config['menu_subtitle'] }}</p>
            </div>
        </div>
        <div class="row row-padded">
            @foreach ($categories as $cat)
                <div class="col-md-6">
                    <div class="fh5co-food-menu to-animate-2">
                        <h2 class="fh5co-dishes">{{ $cat['name'] }}</h2>
                        <ul>
                            @foreach ($cat['dishes'] as $dish)
                                <li>
                                    <div class="fh5co-food-desc">
                                        <figure>
                                            <img src="{{ asset($dish->image) }}" class="img-responsive" alt="{{ $dish->name }}">
                                        </figure>
                                        <div>
                                            <h3>{{ $dish->name }}</h3>
                                            @if(strlen($dish->description)<100)
                                                <p>{!! $dish->description !!}</p>
                                            @else
                                                <p>{!! substr($dish->description,0,100) !!}...</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="fh5co-food-pricing">
                                        ${{ $dish->sell_price }}
                                        <div>
                                            <div class="btn btn-sm btn-primary btn-outline" onclick="showProductPopup('{{ $dish->name }}', '{{ $dish->description }}', '{{ asset($dish->image) }}', {{ $dish->sell_price }})">Detalles</div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
        @if(!isset($fullMenu))
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center to-animate-2">
                <p><a href="{{route('menu')}}" class="btn btn-primary btn-outline">Menu Completo</a></p>
            </div>
        </div>
        @endif

        <!-- Modal -->
        <div class="modal fade" data-backdrop="false" id="dish-modal" role="dialog">
            <div class="modal-dialog" style="padding-top: 10rem">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <div class="fh5co-event to-animate-2" style="margin-top:2rem" >
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="" class="img-responsive">
                            </div>
                            <div class="col-sm-6" style="padding-right: 1rem">
                                <p class="h3 dish-title"></p>
                                <p class="h5 dish-description"></p>
                                <p class="dish-price"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
        <!-- / Modal -->
    </div>
</div>
