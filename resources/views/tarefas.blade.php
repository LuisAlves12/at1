<h1>Tarefas para hoje</h1>
<ul>
    @foreach($tarefas as $tarefa)
        <li>{{$tarefa}}</li>
    @endforeach
</ul>