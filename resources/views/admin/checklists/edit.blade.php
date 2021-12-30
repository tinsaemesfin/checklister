@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.checklist_groups.checklists.update', [$checklistGroup, $checklist]) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edit Checklist in') }} </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <input value=" {{ $checklist->name }}" class="form-control" name="name" type="text"
                                        placeholder="CheckList  Name" aria-label="First name">
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>


                        </div>
                    </form>
                    <form action="{{ route('admin.checklist_groups.checklists.destroy', [$checklistGroup, $checklist]) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Are you Sure?')">Delete</button>
                            </div>
                        </div>
                    </form>
                    <hr />
                    <h2> List Of Tasks </h2>
                    <div class="row">
                        <div class="col">
                            @livewire('tasks-table',['checklist'=>$checklist])
                            
                        </div>
                    </div>



                    @if ($errors->storetask->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->storetask->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.checklists.tasks.store', [$checklist]) }}" method="POST">
                        @csrf
                        <div class="card-header">{{ __('New Tasks') }} </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" name="name" type="text" placeholder="Task Name"
                                        aria-label="First name">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control" name="description" type="textarea"
                                            placeholder="Description" id="task-textarea" rows="5"> </textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Save Task</button>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#task-textarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection