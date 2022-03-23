@if(count($events))
<div id="fh5co-events" data-section="events" style="background-image: url({{ asset('assets/images/slide_2.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2 to-animate">
                <h2 class="heading">Próximos Eventos</h2>
                <p class="sub-heading">{{ $config['events_subtitle']}}</p>
            </div>
        </div>
        <div class="row">
            @foreach ($events as $e)
            <div class="col-md-4">
                <div class="fh5co-event to-animate-2" >
                    <h3 >{{$e->title}}</h3>
                    <span class="fh5co-event-meta">{{ $e->date }}</span>
                    @if(strlen($e->description)<200)
                        <p  style="height: 20rem">{{ $e->description }}</p>
                    @else
                        <p style="height: 20rem">{{ substr($e->description,0,197) }}...</p>
                    @endif
                    <p><button data-toggle="modal" data-target="#eventModal-{{ $e->id }}" class="btn btn-primary btn-outline">Leer Más</a></p>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" data-backdrop="false" id="eventModal-{{ $e->id }}" role="dialog">
                <div class="modal-dialog" style="padding-top: 10rem">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                       <div class="fh5co-event to-animate-2" style="margin-top:2rem" >
                            <h3>{{$e->title}}</h3>
                            <span class="fh5co-event-meta">{{ $e->date }}</span>
                            <p  style="height: 20rem">{{ $e->description }}</p>
                        </div>
                    </div>
                </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
