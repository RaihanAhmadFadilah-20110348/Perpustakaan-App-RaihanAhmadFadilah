@extends('layouts.main2')
@section('container')
<h2 class="text-center mb-4">Data Pegawai</h2>
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
                <input class="form-control" type="text" name="p" value="{{ $p}}" placeholder="Pencarian..." />
            </div>
            <div class="form-group mr-1">
                <button class="btn btn-success">Cari</button>
            </div>
            <div class="form-group mr-1">
                <a class="btn btn-primary" href="{{ route('pegawai.create') }}">Tambah</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-light table-sm table-bordered border-dark table-hover mb-0">
            <thead>
                <tr class="bg-secondary text-dark">
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>No. Telepon</th>
                    <th>Email</th>
                    <th>NIK</th>
                    <th>Tgl. Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($rows as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->nama_pegawai }}</td>
                <td>{{ $row->no_telp }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->nik }}</td>
                <td>{{ $row->tgl_lahir }}</td>
                <td>{{ $row->alamat }}</td>
                <td class="text-center">
                    <a class="btn btn-sm btn-warning text-white" href="{{ route('pegawai.edit', $row) }}">Ubah</a>
                    <form method="POST" action="{{ route('pegawai.destroy', $row) }}" style="display: inline-block;">
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