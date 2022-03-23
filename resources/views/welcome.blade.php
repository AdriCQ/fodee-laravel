@extends('layouts.main')

@section('intro')

	@include('sections.home')

@endsection

@section('content')

    @include('sections.about')

    @include('sections.comments')

    @include('sections.features')

    @include('sections.menu')

    @include('sections.events')

    @include('sections.reservation')

@endsection

@section('extra_script')

<script>
    function openEventDetails(title, date, description){
        console.log({title, date, description});
        $('#event_details_modal').modal();
    }
</script>

@endsection
