@if(isset($equipas))
    @foreach ($equipas as $equipa)
        <h3>{{$equipa}}</h3>
    @endforeach
@else
        <h1>{{$equipa}}</h1>
@endif


