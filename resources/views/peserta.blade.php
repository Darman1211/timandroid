@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">

            <div class="col-xl-12">
                <h3 class="display-3" style="color: white">Data Peserta</h3>
            </div>

            <div class="col-xl-12" style="margin-top: 60px">
                <div style="align-self: flex-end" class="form-group">
                    <a href="/peserta/create" class="btn btn-default">Tambah Data</a>
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
                                    <th scope="col" >Nama Peserta</th>
                                    <th scope="col" >Tempat Lahir</th>
                                    <th scope="col" >Tanggal Lahir</th>
                                    <th scope="col" >Alamat</th>
                                    <th scope="col" >Email</th>
                                    <th scope="col" >Opsi</th>
                                </tr>
                            </thead>
                            @foreach($peserta as $p)
                                <tr>
                                    <td>{{ $p->nama_peserta}}</td>
                                    <td>{{ $p->tempat_lahir }}</td>
                                    <td>{{ $p->tanggal_lahir }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td class="text-left">
                                        <a href="/peserta/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                                        <a href="/peserta/hapus/{{ $p->id }}" class="btn btn-primary">Hapus</a>
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

