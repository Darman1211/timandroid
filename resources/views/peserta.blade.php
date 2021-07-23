@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

<div class="table-responsive">
    <div>
    <!-- cari data dan tambah data -->
    <form style="margin-top:20px; margin-left:20px" action="/peserta/cari" method="GET">
    <div class="row">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cari Peserta.." value="{{ old('cari') }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input class="btn btn-default" type="submit" value="Cari">
            <a href="/peserta/create" class="btn btn-default">Input Peserta</a>
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
@endsection
        