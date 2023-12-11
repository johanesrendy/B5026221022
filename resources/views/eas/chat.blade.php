
@extends('eas/master')
@section('title','Chat')
@section('konten')

<div class="container">
    @foreach($chats as $c)
        <p class="h-100">{!! $c->pesan !!}</p>
    @endforeach
</div>

@endsection