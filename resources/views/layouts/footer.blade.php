<div id="fh5co-footer">
    <div class="container">
        <div class="row row-padded">
            <div class="col-md-12 text-center">
                <p class="to-animate">&copy; {{ now()->year }} GoDjango. All Rights Reserved
                </p>
                <p class="text-center to-animate"><a href="#" class="js-gotop">Ir al Inicio</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="fh5co-social">
                    @if(isset($config['social_fb']))
                        <li class="to-animate-2"><a href="{{ $config['social_fb'] }}"><i class="icon-facebook"></i></a></li>
                    @endif
                    @if(isset($config['social_in']))
                        <li class="to-animate-2"><a href="{{ $config['social_in'] }}"><i class="icon-instagram"></i></a></li>
                    @endif
                    @if(isset($config['social_yt']))
                        <li class="to-animate-2"><a href="{{ $config['social_yt'] }}"><i class="icon-youtube"></i></a></li>
                    @endif
                    @if(isset($config['social_tw']))
                        <li class="to-animate-2"><a href="{{ $config['social_tw'] }}"><i class="icon-twitter"></i></a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>
