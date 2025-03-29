<h2>Tasks</h2>
<ul>
    @foreach ( User::find(1)->tasks as $task)
        <li>{{ $task->title }} - {{ $task->description }}</li>
    @endforeach
</ul>
