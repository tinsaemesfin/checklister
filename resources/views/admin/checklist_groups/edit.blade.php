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
                    <form action="{{ route('admin.checklist_groups.update', $checklistGroup) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edit Checklist Group') }}</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <input value="{{ $checklistGroup->name }}" class="form-control" name="name"
                                        type="text" aria-label="First name">
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>


                        </div>
                    </form>
                    <form action="{{ route('admin.checklist_groups.destroy', $checklistGroup) }}" method="post">
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
