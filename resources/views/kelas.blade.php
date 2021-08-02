@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">

            <div class="col-xl-12">
                <h3 class="display-3" style="color: white">Data Kelas</h3>
            </div>

            <div class="col-xl-12" style="margin-top: 60px">
                <div style="align-self: flex-end" class="form-group">
                    <a href="/kelas/inputkelas" class="btn btn-default">Tambah Data</a>
                </div>
            </div>
        
            <div class="col-xl-12">
                <div class="card shadow">
                    <!-- Button Tambah -->
                    
                    <div class="table-responsive">
                    
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Kode Kelas</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Tanggal Mulai</th>
                                    <th scope="col">Tanggal Selesai</th>
                                    <th scope="col">Total Jam</th>
                                    <th scope="col">Aksi</th>
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
                </div>
            </div>
        </div>
    </div>
@endsection

