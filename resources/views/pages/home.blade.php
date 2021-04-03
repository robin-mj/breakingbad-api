@extends('layout.head')
@section('content')
    <div class="home-wrap">
        <div>
            <input type="text" id="research" name="character" placeholder="Walter White, Jesse Pinkman...">
            <p>Press enter after typing the charcater's name</p>
        </div>
        <button onclick="window.location.href='/randomcharacter'">Get a random character !</button>
        <button onclick="window.location.href='/characters'">Display all characters</button>
    </div>
@endsection
