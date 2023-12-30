@extends('layouts.main2')
@section('container')
<h2 class="text-center mb-4">Data User</h2>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
<div class="card border-dark card-default">
    <div class="card-header text-white bg-dark">
        <form class="form-inline">
            <div class="form-group mr-1">
                <input class="form-control" type="text" name="q" value="{{ $q}}" placeholder="Pencarian..." />
            </div>
            <div class="form-group mr-1">
                <button class="btn btn-success">Cari</button>
            </div>
            <div class="form-group mr-1">
                <a class="btn btn-primary" href="{{ route('user.create') }}">Tambah</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-light table-sm table-bordered border-dark table-hover mb-0">
            <thead>
                <tr class="bg-secondary text-dark">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($rows as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->username }}</td>
                <td>{{ $row->email }}</td>
                <td class="text-center">
                    <a class="btn btn-sm btn-warning text-white" href="{{ route('user.edit', $row) }}">Ubah</a>
                    <form method="POST" action="{{ route('user.destroy', $row) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="card-footer text-white bg-dark">
        <div class="form-group mr-1">
            <a class="btn btn-secondary float-right" href="/dashboard">Kembali</a>
        </div>
    </div>
</div>
@endsection