@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

<div class="table-responsive">
    <div>
    <!-- Cari Data dan Tambah Data -->
    <form style="margin-top:20px; margin-left:20px" action="/kelas/cari" method="GET">
        <div class="row">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cari Kelas.." value="{{ old('cari') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <input class="btn btn-default" type="submit" value="Cari">
                <a href="/kelas/inputkelas" class="btn btn-default">Input Kelas</a>
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
        </form>

    <table class="table align-items-center table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Kode Kelas</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">Total Jam</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
    @foreach($kelas as $k)
        <tr>
            <td>{{ $k->kd_kelas }}</td>
            <td>{{ $k->nama_kelas }}</td>
            <td>{{ $k->tgl_mulai }}</td>
            <td>{{ $k->tgl_selesai }}</td>
            <td>{{ $k->total_jam }}</td>
            <td class="text-left">
                <a href="/kelas/edit/{{ $k->id }}" class="btn btn-primary">Edit</a>
                <a href="/kelas/hapus/{{ $k->id }}" class="btn btn-primary">Hapus</a>
            </td>
        </tr>
        @endforeach
</table>


</div>
   
@endsection

