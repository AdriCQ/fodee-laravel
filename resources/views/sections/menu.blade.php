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
                                                <p>{{ $dish->description }}</p>
                                            @else
                                                <p>{{ substr($dish->description,0,100) }}...</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="fh5co-food-pricing">
                                        ${{ $dish->sell_price }}
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
    </div>
</div>
