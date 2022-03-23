<div id="fh5co-about" data-section="about">
    <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url({{ asset('assets/images/res_img_1.jpg') }})"></div>
    <div class="fh5co-2col fh5co-text">
        <h2 class="heading to-animate">Sobre Nosotros</h2>
        <p class="to-animate"><span class="firstcharacter">{{ $config['about_us'][0] }}</span>{{ substr($config['about_us'],1, strlen($config['about_us'])) }}</p>
        <p class="text-center to-animate"><a href="mailto:{{ $config['email'] }}" class="btn btn-primary btn-outline">Contactarnos</a></p>
    </div>
</div>
