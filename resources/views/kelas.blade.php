@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

<div class="table-responsive">
    <table class="table align-items-center table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Kode Kelas</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">Total Jam</th>
            <th scope="col">Opsi</th>
            <th scope="col"></th>
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
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Hapus</a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
</table>

</div>

@include('layouts.footers.auth')
   
@endsection
