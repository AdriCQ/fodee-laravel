<div class="js-sticky">
    <div class="fh5co-main-nav">
        <div class="container-fluid">
            @if(!isset($fullMenu))
            <div class="fh5co-menu-1">
                <a href="{{ route('welcome') }}" data-nav-section="home">Inicio</a>
                <a href="{{ route('welcome') }}" data-nav-section="about">Sobre Nosotros</a>
                @if(isset($features) && count($features)>=6)
                <a href="{{ route('welcome') }}" data-nav-section="features">Destacados</a>
                @endif
            </div>
            <div class="fh5co-logo">
                <a href="{{ route('welcome') }}" data-nav-section="home">{{ $config['title'] }}</a>
            </div>
            <div class="fh5co-menu-2">
                <a href="{{ route('welcome') }}" data-nav-section="menu">Menu</a>
                <a href="{{ route('welcome') }}" data-nav-section="events">Eventos</a>
                <a href="{{ route('welcome') }}" data-nav-section="reservation">Reserva</a>
            </div>
            @else
            <div class="fh5co-menu-1">
                <a class="external" href="{{ route('welcome') }}/#fh5co-home" >Inicio</a>
                <a class="external" href="{{ route('welcome') }}/#fh5co-about">Sobre Nosotros</a>
                @if(isset($features) && count($features)>=6)
                <a class="external" href="{{ route('welcome') }}/#fh5co-featured" >Destacados</a>
                @endif
            </div>
            <div class="fh5co-logo">
                <a class="external" href="{{ route('welcome') }}">{{ $config['title'] }}</a>
            </div>
            <div class="fh5co-menu-2">
                <a href="{{ route('menu') }}" data-nav-section="menu">Menu</a>
                <a class="external" href="{{ route('welcome') }}/#fh5co-events">Eventos</a>
                <a href="{{ route('menu') }}" data-nav-section="reservation">Reserva</a>
            </div>
            @endif
        </div>

    </div>
</div>
