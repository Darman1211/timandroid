@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">

            <div class="col-xl-12">
                <h3 class="display-3" style="color: white">Data Cetak Sertifikat</h3>
            </div>

            <div class="col-xl-12" style="margin-top: 60px">
                <div style="align-self: flex-end" class="form-group">
                    <a href="/cetak" class="btn btn-default">Tambah Data</a>
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
                                    <th scope="col">No Sertifikat</th>
                                    <th scope="col">Nama Peserta</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Tanggal Mulai</th>
                                    <th scope="col">Tanggal Selesai</th>
                                    <th scope="col">Total Jam</th>
                                    <th scope="col">Tanggal Keluar</th>
                                    <th scope="col">Aksi</th>
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
                                        <a href="/cetak/sertifikat" class="btn btn-primary">Cetak</a>
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

