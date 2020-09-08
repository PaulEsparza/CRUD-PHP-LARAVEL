@extends('../layout/header')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Create new task</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('tasks.create') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="responsable" id="" placeholder="Responsable" value="{{ old('responsable') }}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="description" id="" placeholder="Description" value="{{ old('description') }}">
                    </div>
                    <div class="form-group">
                        <button class="form-control btn btn-success" type="submit">Add Task</button>
                    </div>
                    <div class="form-group">
                        <a href="{{ route('tasks.home') }}" class="form-control btn btn-link">Cancel</a>
                    </div>
                    </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
</div>

@endsection

@extends('../layout/footer')
