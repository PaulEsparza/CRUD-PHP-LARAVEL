@extends('../layout/header')

@section('content')

<div class="container">
    <a href="{{ route('tasks.newTask') }}" class="btn btn-success mb-2">New Task</a>
<table class="table table-dark table-hover">
    <tr>
        <td>ID</td>
        <td>Responsable</td>
        <td>Description</td>
        <td>Actions</td>
    </tr>
    @forelse ($tasks as $task)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $task->responsable }}</td>
        <td>{{ $task->description }}</td>
        <td>
        <!--<a href="{  url('/tareas/'.$task->id.'/edit') }}">Edit</a>-->
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-block btn-warning mb-2">Edit</a>
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-block btn-danger">Delete</button>
            </form>
        </td>
        @empty
        <h3>Empty data</h3>
        @endforelse
    </tr>
</table>
</div>
@endsection

@extends('../layout/footer')
