@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

<div class="table-responsive">
    <div>
        <table class="table align-items-center table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" >Nomor Peserta</th>
                    <th scope="col" >Nama Peserta</th>
                    <th scope="col" >Kode Kelas</th>
                    <th scope="col" >Nama Kelas</th>
                    <th scope="col" >Tempat Tanggal Lahir</th>
                    <th scope="col" >Alamat</th>
                    <th scope="col" >Email</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach($peserta as $p)
                <tr>
                    <td>{{ $p->no_peserta }}</td>
                    <td>{{ $p->nama_peserta}}</td>
                    <td>{{ $p->kd_kelas }}</td>
                    <td>{{ $p->nama_kelas }}</td>
                    <td>{{ $p->ttl }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->email }}</td>
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
        