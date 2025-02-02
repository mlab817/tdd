@extends('layouts.admin')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $pageTitle }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">{{ $pageTitle }}</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {!! $dataTable->table(['class' => 'projects-table table-valign-middle table table-bordered table-hover table-striped', 'role' => 'grid', 'width' => '100%'], false) !!}
                        </div>
                        <div class="card-footer">
                            <p class="text-muted text-sm">
                                <b>Note:</b> For Office projects, the user will be able to view projects added by their office which
                                is based on which office the user is affiliated/assigned to when they added the project. For Own projects,
                                the user will be able to view the projects they added.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {!! $dataTable->scripts() !!}

    <script>
        function confirmDelete(slug) {
            let response = confirm('Are you sure you want to delete this project?')
            if (response) {
                // create a fake url using route helper
                let url = '{{ route("projects.destroy", ":id") }}'
                // replace id with the project slug
                url = url.replace(':id', slug);

                $.ajax({
                    url: url,
                    type: 'delete',
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    success: function (data) {
                        // prompt user of success
                        alert(data.message)
                        let oTable = $('.projects-table').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                })
            }
        }
    </script>
@endpush
