@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <form action="{{ route('admin.approval_levels.update', $approval_level) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name'){{ 'is-invalid' }}@enderror" name="name" id="name" placeholder="Name" value="{{ old('name', $approval_level->name) }}" autofocus>
                            @error('name')<div class="text-sm text-red py-1">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description'){{ 'is-invalid' }}@enderror" name="description" id="description" placeholder="Description">{{ old('description', $approval_level->description) }}</textarea>
                            @error('description')<div class="text-sm text-red py-1">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-between">
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn mr-2" href="{{ route('admin.approval_levels.index') }}">Back to List</a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete">
                                    Delete
                                </button>
                            </div>
                            <div>
                                <form action="{{ route('admin.approval_levels.destroy', $approval_level) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirm Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this item?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                    <form action="{{ route('admin.approval_levels.destroy', $approval_level) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Confirm</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection