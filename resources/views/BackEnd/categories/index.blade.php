@extends('layouts.backend.master')
@section('title', 'Kategori')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Kategori</li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ route('backend.categories.create') }}" class="btn btn-primary">Tambah Kategori</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="category_datatable" class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            const table = $('#category_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('backend.categories.index') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'category_name',
                        name: 'category_name'
                    },
                    {
                        data: 'category_slug',
                        name: 'category_slug'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],

            });

            $('#category_datatable').on('click', '.btn-delete', function(e) {
                e.preventDefault();
                const url = $(this).attr('href');
                showConfirmationDialog('Are you sure?', 'You won\'t be able to revert this!', 'warning',
                    'Yes, delete it!', (result) => {
                        if (result.isConfirmed) {
                            handleAction(url, 'DELETE', 'Category has been deleted!',
                                'Failed to delete category!', {}, null, () => {
                                    table.ajax.reload();
                                });
                        }
                    });
            });
        });
    </script>
@endpush
