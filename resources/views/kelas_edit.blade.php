@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Edit Data Kelas')
    ])   

    <div style="margin-left:15%" class="container-fluid mt--7">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                    </div>
                    <div class="card-body">
                        <form method="post" action="/kelas/update/{{ $kelas->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                            <div class="pl-lg-4">

                                <!-- Nama Kelas -->

                                <div class="form-group">
                                    <label class="form-control-label">Kode Kelas
                                    </label>
                                    <input type="text" name="kd_kelas" class="form-control" placeholder="Kode Kelas" required="required">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">Nama Kelas
                                    </label>
                                    <input type="text" name="nama_kelas" class="form-control" placeholder="Nama Kelas" value=" {{ $kelas->nama_kelas}}" required="required">
                                </div>

                                 <!-- Tanggal Mulai -->

                                 <div class="form-group">
                                    <label class="form-control-label">Tanggal Mulai
                                    </label>
                                    <input type="date" name="tgl_mulai" class="form-control" value=" {{ $kelas->tgl_mulai }}" required="required">
                                </div>

                                <!-- Tanggal Selesai -->

                                <div class="form-group">
                                    <label class="form-control-label">Tanggal Selesai
                                    </label>
                                    <input type="date" name="tgl_selesai" class="form-control" value=" {{ $kelas->tgl_selesai}}" required="required">
                                </div>

                                <!-- Total Jam -->

                                <div class="form-group">
                                    <label class="form-control-label">Total Jam
                                    </label>
                                    <input type="text" name="total_jam" class="form-control" value=" {{ $kelas->total_jam }}" placeholder="Total Jam" required="required">
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