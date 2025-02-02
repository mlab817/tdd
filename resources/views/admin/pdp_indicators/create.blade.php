@extends('layouts.admin')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add PDP Indicator</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.pdp_indicators.index') }}">PDP Indicators</a></li>
                        <li class="breadcrumb-item active">Add PDP Indicator</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <form action="{{ route('admin.pdp_indicators.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name <i class="text-danger fas fa-flag"></i></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                            @error('name')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="level">Level <i class="text-danger fas fa-flag"></i></label>
                            <select class="form-control @error('level') is-invalid @enderror" name="level" id="level">
                                <option value="" selected disabled>Select Level</option>
                                @foreach($levels as $key => $level)
                                    <option value="{{ $key }}" {{ old('level') == $key ? 'selected' : '' }}>{{ $level }}</option>
                                @endforeach
                            </select>
                            @error('label')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="parent_id">Parent</label>
                            <select class="form-control select2 @error('label') is-invalid @enderror" name="parent_id" id="parent_id">
                                <option value="" selected disabled>Select Parent Indicator</option>
                                @foreach($pdp_indicators as $option)
                                    <option value="{{ $option->id }}" {{ old('parent_id') == $option->id ? 'selected' : '' }}>{{ $option->name }}</option>
                                @endforeach
                                {{ old('parent_id') }}
                            </select>
                            @error('label')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.pdp_indicators.index') }}" class="btn mr-2">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
