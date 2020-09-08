@extends('../layout/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Update task</h4>
                </div>
                <div class="card-body">
                    <!--<form action="{ url('/tareas/'.$task->id) }}" method="post">-->
<form action="{{ route('tasks.update', $task->id) }}" method="post">
    @csrf @method('PATCH')
    <div class="form-group">
        <input type="number" name="id" value="{{ old('id', $task->id) }}" class="form-control" readonly>
    </div>
    <div class="form-group">
        <input type="text" name="responsable" id="" placeholder="Responsable" value="{{ old('responsable', $task->responsable) }}" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="description" id="" placeholder="Description" value="{{ old('description', $task->description) }}" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-success">Update Task</button>
    </div>
    <div class="form-group">
        <a href="{{ route('tasks.home') }}" class="form-control btn btn-link">Cancel</a>
    </form>
    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>

    @endsection

    @extends('../layout/footer')
