@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Edit Data Peserta')
    ])   

    <div style="margin-left:15%" class="container-fluid mt--7">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                    </div>
                    <div class="card-body">
                        <form method="post" action="/peserta/update/{{ $peserta->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                            <div class="pl-lg-4">

                                <!-- Nama Peserta -->

                                <div class="form-group">
                                    <label class="form-control-label">Nama Peserta
                                    </label>
                                    <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Peserta" value=" {{ $peserta->nama_peserta }}" required="required">
                                </div>

                                <!-- Tempat Lahir -->

                                <div class="form-group">
                                    <label class="form-control-label">Tempat Lahir
                                    </label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value=" {{ $peserta->tempat_lahir }}" required="required">
                                </div>

                                <!-- Tanggal Lahir -->

                                <div class="form-group">
                                    <label class="form-control-label">Tanggal Lahir
                                    </label>
                                    <input type="date" name="tanggal_lahir" class="form-control" value=" {{ $peserta->tanggal_lahir }}" required="required">
                                </div>

                                <!-- Alamat -->

                                <div class="form-group">
                                    <label class="form-control-label">Alamat
                                    </label>
                                    <input type="text" name="alamat" class="form-control" value=" {{ $peserta->alamat }}" placeholder="Alamat" required="required">
                                </div>

                                <!-- Email -->

                                <div class="form-group">
                                    <label class="form-control-label">Email
                                    </label>
                                    <input type="text" name="email" class="form-control" value=" {{ $peserta->email }}" placeholder="Email" required="required">
                                </div>

                                <div class="text-center">
                                    <input type="submit" class="btn btn-success mt-4" value="Save">
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            @include('layouts.footers.auth')
    </div>

@endsection