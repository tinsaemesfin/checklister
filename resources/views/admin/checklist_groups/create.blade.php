@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ route('admin.checklist_groups.store') }}" method="POST">
                        @csrf
                        <div class="card-header">{{ __('New Checklist Group') }}</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" name="name" type="text" placeholder="Check List Group Name"
                                        aria-label="First name">
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
