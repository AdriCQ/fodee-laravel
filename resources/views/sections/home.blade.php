<div id="fh5co-home" class="js-fullheight" data-section="home">

    <div class="flexslider">

        <div class="fh5co-overlay"></div>
        <div class="fh5co-text">
            <div class="container">
                <div class="row">
                    <h1 class="to-animate">{{ $config['title'] }}</h1>
                    <h2 class="to-animate">{{ $config['home_subtitle'] }}</a></h2>
                </div>
            </div>
        </div>
        <ul class="slides">
        <li style="background-image: url({{ asset($images['slider1']) }});" data-stellar-background-ratio="0.5"></li>
        <li style="background-image: url({{ asset($images['slider3']) }});" data-stellar-background-ratio="0.5"></li>
        <li style="background-image: url({{ asset($images['slider3']) }});" data-stellar-background-ratio="0.5"></li>
        </ul>

    </div>

</div>
