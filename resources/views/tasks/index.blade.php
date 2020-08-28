<a href="{{ route('tasks.newTask') }}">New Task</a>

<table>
    <tr>
        <td>ID</td>
        <td>Responsable</td>
        <td>Description</td>
        <td>Actions</td>
    </tr>
    @forelse ($tasks as $task)
    <tr>
        <td>{{ $task->id }}</td>
        <td>{{ $task->responsable }}</td>
        <td>{{ $task->description }}</td>
        <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
        </td>
        @empty
        <h3>Empty data</h3>
        @endforelse
    </tr>
</table>
