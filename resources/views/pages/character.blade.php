@extends('layout.head')
@section('content')
    <div class="character-infos">
        <img src="{{$img}}">

        <div class="description">
            <p>{{$name}}</p>
            @if($occupations[0] != "unknown")
                <p>Occupations : </p>
                @foreach($occupations as $occupation)
                    <p>- {{$occupation}}</p>
                @endforeach
            @endif

            <p>Often called {{$nickname}}</p>

            @if($birthday !="Unknown")
                <p>Birthday : {{$birthday}}</p>
            @endif

            <p>Appear in season
                @for ($i = 0; $i<count($appearances)-1; $i++)
                    {{$appearances[$i]}},
                @endfor
                {{end($appearances)}}

            <p>Portayed by {{$portrayed}}</p>
        </div>
    </div>

@endsection
