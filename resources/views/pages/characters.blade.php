@extends('layout.head')
@section('content')
    <div class="wrap">
        @for($i = 0; $i<count($response); $i++)
            <div class="character" id="{{$response[$i]->name}}">
                <img class="character_img"
                        src="{{$response[$i]->img}}"
                        alt="Photo of {{$response[$i]->name}}" >
                <p>{{$response[$i]->name}}</p>
            </div>
        @endfor
    </div>
@endsection
