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
                <a href="/cetak" class="btn btn-default">Tambah Cetak Sertifikat</a>
                </div>
            </div>
        </div>
    </div>
        </form>

    <table class="table align-items-center table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No Sertifikat</th>
            <th scope="col">Nama Peserta</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">Total Jam</th>
            <th scope="col">Tanggal Keluar</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
    @foreach($cetak as $c)
        <tr>
            <td>BG.{{ $c->kd_kelas }}.{{ date("Y") }}.{{ date("m") }}.{{ $c->id_cetak }}</td>
            <td>{{ $c->nama_peserta }}</td>
            <td>{{ $c->tempat_lahir }}</td>
            <td>{{ $c->tanggal_lahir }}</td>
            <td>{{ $c->nama_kelas }}</td>
            <td>{{ $c->tgl_mulai }}</td>
            <td>{{ $c->tgl_selesai }}</td>
            <td>{{ $c->total_jam }}</td>
            <td>{{ $c->tgl_keluar_sertifikat }}</td>
            <td class="text-left">
                <a href="#" class="btn btn-primary">Cetak</a>
            </td>
        </tr>
        @endforeach
</table>


</div>
   
@endsection

