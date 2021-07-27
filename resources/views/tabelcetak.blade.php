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
                <a href="/kelas/inputkelas" class="btn btn-default">Cetak Sertifikat</a>
                </div>
            </div>
        </div>
    </div>
        </form>

    <table class="table align-items-center table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID Peserta</th>
            <th scope="col">ID Kelas</th>
            <th scope="col">Tanggal Keluar</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
    @foreach($cetak as $c)
        <tr>
            <td>{{ $c->id_peserta }}</td>
            <td>{{ $c->id_kelas }}</td>
            <td>{{ $c->tgl_keluar_sertifikat }}</td>
            <td class="text-left">
                <a href="#" class="btn btn-primary">Cetak</a>
            </td>
        </tr>
        @endforeach
</table>


</div>
   
@endsection

