<div id="fh5co-contact" data-section="reservation">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">Reserva una Mesa</h2>
                <p class="sub-heading to-animate">{{$config['reserv_subtitle']}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 to-animate-2">
                <h3>Contacto</h3>
                <ul class="fh5co-contact-info">
                    <li class="fh5co-contact-address ">
                        <i class="icon-home"></i>
                        {{ $config['address']}}
                    </li>
                    <li><i class="icon-phone"></i> {{ $config['phone']}}</li>
                    <li><i class="icon-envelope"></i>{{ $config['email']}}</li>
                </ul>
            </div>
            <div class="col-md-6 to-animate-2">
                <h3>Formulario de Reserva</h3>
                <div class="form-group ">
                    <label for="name" class="sr-only">Nombre</label>
                    <input id="name" class="form-control" placeholder="Nombre" type="text">
                </div>
                <div class="form-group ">
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" class="form-control" placeholder="Email" type="email">
                </div>
                <div class="form-group">
                    <label for="occation" class="sr-only">Occation</label>
                    <select class="form-control" id="occation">
                        <option>Select an Occation</option>
                        <option>Wedding Ceremony</option>
                        <option>Birthday</option>
                        <option>Others</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="date" class="sr-only">Fecha</label>
                    <input id="date" class="form-control" placeholder="Fecha &amp; Hora" type="text">
                </div>



                <div class="form-group ">
                    <label for="message" class="sr-only">Mensaje</label>
                    <textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ">
                    <input class="btn btn-primary" value="Enviar Mensaje" type="submit">
                </div>
                </div>
        </div>
    </div>
</div>
