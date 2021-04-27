@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add New User</h3>
                </div>
                <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name <i class="text-danger fas fa-flag"></i></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                   id="name" placeholder="Juan dela Cruz" value="{{ old('name', $user->name) }}">
                            @error('name')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email <i class="text-danger fas fa-flag"></i></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                   id="email" value="{{ old('email', $user->email) }}" disabled>
                            @error('email')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="roles">Roles</label>
                            @foreach ($roles as $role)
                                <div class="form-check">
                                    <label for="role_{{ $role->id }}" class="form-check-label">
                                        <input id="role_{{ $role->id }}" name="roles[]" type="checkbox"
                                               class="form-check-input" value="{{ $role->id }}"
                                               @if(in_array($role->id, old('roles', $user->roles->pluck('id')->toArray()) ?? [])) checked @endif>
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.users.index') }}" class="btn mr-2">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection