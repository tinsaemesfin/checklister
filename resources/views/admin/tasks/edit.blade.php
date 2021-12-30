@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if ($errors->storetask->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->storetask->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.checklists.tasks.update', [$checklist, $task]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edit Tasks in') }} </div>

                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col">
                                    <input value=" {{ $task->name }}" class="form-control" name="name" type="text"
                                        placeholder="" aria-label="First name">
                                </div>
                                <div class="row form-group">
                                <div class="col">
                                   
                                    <textarea id="task-textarea" class="form-control" name="description"
                                         rows="5" type="textarea">{{ $task->description }}</textarea>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
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