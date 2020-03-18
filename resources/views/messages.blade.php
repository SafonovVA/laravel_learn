@extends('layouts.app')

@section('title-block')Messages
@endsection


@section('content')
    <h1>Messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <h3>{{ $el->name }}</h3>
            <h3>{{ $el->email }}</h3>
            <h3>{{ $el->message }}</h3>
            <h3>{{ $el->created_at }}</h3>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Detail</button></a>
        </div>
    @endforeach

@endsection

@section('aside')
    @parent
    <p>Additional text</p>
@endsection
