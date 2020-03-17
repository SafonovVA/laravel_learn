@extends('layouts.app')

@section('title-block')Contacts
@endsection

@section('content')

    <h1>Contacts</h1>



    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Input name:</label>
            <input type="text" name="name" placeholder="NAME" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Input email:</label>
            <input type="text" name="email" placeholder="EMAIL" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" placeholder="SUBJECT" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="MESSAGE"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>

@endsection
