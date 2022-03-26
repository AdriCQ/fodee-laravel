@extends('layouts.main')


@section('content')
<div class="notification-content">
    <div class="container text-center">
        @if(isset($notification['title']))
            <div class="h1">{{ $notification['title'] }}</div>
        @endif

        @if(isset($notification['content']))
        @foreach ($notification['content'] as $content)
            <p class="h3"> {{ $content }}</p>
        @endforeach
        @endif
    </div>
</div>

@endsection


@section('extra_styles')
<style>
    .notification-content {
        width: 100%;
        background: rgba(0, 0, 0, 0.9);
        padding: 7em 0;
        z-index: 1;
        font-size: 14px;
        line-height: 1.5;
        color: rgba(255, 255, 255, 0.5);
    }
</style>
@endsection
