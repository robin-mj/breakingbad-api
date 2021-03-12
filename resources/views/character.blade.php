<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BreakingBad API</title>
    <link href="resources/css/app.css">
</head>
<body>
<h1>Chercher un personnage</h1>
<img src="{{$img}}">
<p>Name : {{$name}}</p>
<p>Occupations : </p>
@foreach($occupations as $occupation)
    <p>- {{$occupation}}</p>
@endforeach
<p>Nickname : {{$nickname}}</p>
@if($birthday !="Unknown")
    <p>Birhtday : {{$birthday}}</p>
@endif
<p>Appear in season :
@foreach($appearances as $appearance)
    {{$appearance}}
@endforeach
</p>
<p>Portayed by {{$portrayed}}</p>
</body>

</html>
