<h2>Users and Their Tasks</h2>
<ul>
    @php
        $users = \App\Models\User::all(); // Fetch all users
    @endphp
    @foreach ($users as $user)
        <li>
            <strong>{{ $user->name }}</strong>
            <ul>
                @foreach ($user->tasks as $task) {{-- This causes an N+1 problem --}}
                    <li>{{ $task->title }} - {{ $task->description }}</li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
