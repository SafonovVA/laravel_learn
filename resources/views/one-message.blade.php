@extends('layouts.app')

@section('title-block')One message
@endsection


@section('content')
    <h1>{{ $data->subject }}</h1>

    <div class="alert alert-info">
        <h3>{{ $data->subject }}</h3>
        <h3>{{ $data->name }}</h3>
        <h3>{{ $data->email }}</h3>
        <h3>{{ $data->message }}</h3>
        <h3>{{ $data->created_at }}</h3>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Edit</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>

    </div>

@endsection

@section('aside')
    @parent
    <p>Additional text</p>
@endsection
