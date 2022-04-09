@extends('layouts.main')

@section('content')
<div id="fh5co-events">

    <div class="fh5co-event to-animate-2" >
        <h3 style="height: 6rem" >{{$event->title}}</h3>
        <span style="height: 2rem" >{{ $event->date }}</span>
        <p>{{ $event->description }}</p>
    </div>
</div>
@endsection
