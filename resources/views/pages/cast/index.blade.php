@extends('pages.layouts.master')
@section('title')
Cast Page
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <a href="/cast/create" class="btn btn-primary btn-sm">+ Tambah Data</a>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <table id="table-data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="7%">#</th>
                    <th width="17%">NAME</th>
                    <th width="7%">AGE</th>
                    <th>BIO</th>
                    <th class="text-center" width="15%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cast as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->age }}</td>
                    <td>{{ $value->bio }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="/cast/{{ $value->id }}" class="btn btn-info btn-xs">Show</a>
                            <a href="/cast/{{ $value->id }}/edit" class="btn btn-warning btn-xs">Edit</a>
                            <form action="/cast/{{ $value->id }}" method="POST"
                                onsubmit="return confirm('Are you sure delete data?')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-xs" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
    $(function () {
        $("#table-data").DataTable();
    });
</script>
@endpush
