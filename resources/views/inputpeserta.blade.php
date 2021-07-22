@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Input Data Peserta')
    ])   

    <div style="margin-left:15%" class="container-fluid mt--7">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                    </div>
                    <div class="card-body">
                        <form method="post" action="/peserta/store" autocomplete="off">
                        {{ csrf_field() }}
                            <div class="pl-lg-4">

                                <!-- Nama Peserta -->

                                <div class="form-group">
                                    <label class="form-control-label">Nama Peserta
                                    </label>
                                    <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Peserta" required="required">
                                </div>

                                <!-- Tempat Lahir -->

                                <div class="form-group">
                                    <label class="form-control-label">Tempat Lahir
                                    </label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required="required">
                                </div>

                                <!-- Tanggal Lahir -->

                                <div class="form-group">
                                    <label class="form-control-label">Tanggal Lahir
                                    </label>
                                    <input type="date" name="tanggal_lahir" class="form-control" required="required">
                                </div>

                                <!-- Alamat -->

                                <div class="form-group">
                                    <label class="form-control-label">Alamat
                                    </label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="required">
                                </div>

                                <!-- Email -->

                                <div class="form-group">
                                    <label class="form-control-label">Email
                                    </label>
                                    <input type="text" name="email" class="form-control" placeholder="Email" required="required">
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