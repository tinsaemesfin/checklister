@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
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
                    <form action="{{ route('admin.checklist_groups.checklists.destroy', [$checklistGroup,$checklist]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Are you Sure?')">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection