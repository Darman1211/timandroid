@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

<div class="table-responsive">
    <div>
    <!-- cari data dan tambah data -->
    <form style="margin-top:20px; margin-left:20px">
    <div class="row">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Cari Peserta..">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <button formaction="peserta/cari" type="button" class="btn btn-default">Cari</button>

            <button method="GET" formaction="peserta/create" type="submit" class="btn btn-default">Input Peserta</button>
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
                    <th scope="col" >Nomor Peserta</th>
                    <th scope="col" >Nama Peserta</th>
                    <th scope="col" >Nama Kelas</th>
                    <th scope="col" >Tempat Lahir</th>
                    <th scope="col" >Tanggal Lahir</th>
                    <th scope="col" >Alamat</th>
                    <th scope="col" >Email</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach($peserta as $p)
                <tr>
                    <td>{{ $p->no_peserta }}</td>
                    <td>{{ $p->nama_peserta}}</td>
                    <td>{{ $p->nama_kelas }}</td>
                    <td>{{ $p->tempat_lahir }}</td>
                    <td>{{ $p->tanggal_lahir }}</td>
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
               
        </table>
        
        </div>

        @endforeach

        @include('layouts.footers.auth')
           
        @endsection
        