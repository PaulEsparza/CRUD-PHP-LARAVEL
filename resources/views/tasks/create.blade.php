<form action="{{ route('tasks.create') }}" method="post">
@csrf
<input type="text" name="responsable" id="" placeholder="Responsable" value="{{ old('responsable') }}">
<input type="text" name="description" id="" placeholder="Description" value="{{ old('description') }}">
<button type="submit">Add Task</button>
<a href="{{ route('tasks.home') }}">Cancel</a>
</form>
