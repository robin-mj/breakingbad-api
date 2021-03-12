@for($i = 0; $i<count($response); $i++)
    <p>{{$response[$i]->name}}</p>
    <p><img src="{{$response[$i]->img}}"></p>
@endfor
