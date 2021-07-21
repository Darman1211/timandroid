@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Input Data Kelas')
    ])   
<!-- Kode Kelas -->
    <div style="margin-left:15%" class="container-fluid mt--7">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                    </div>
                    <div class="card-body">
                        <form method="post" action="/kelas/store" autocomplete="off">
                        {{ csrf_field() }}

                            <div class="pl-lg-4">
                        <!--        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Kode Kelas') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Isikan Kode Kelas" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div> -->
<!-- Nama Kelas -->
                        <div class="form-group">
                            <label class="form-control-label">{{ __('Nama Kelas') }}</label>
                            <input type="text" name="nama" class="form-control" placeholder="Isikan Nama Kelas" required="required">
                        </div>

<!-- Tanggal Mulai -->
                                <div class="form-group">
                                    <label class="form-control-label">{{ __('Tanggal Mulai') }}</label>
                                    <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="flatpickr flatpickr-input form-control" name="tgll" type="text" placeholder="Select Date..">
                                    </div>
                                    </div>
                                    @if ($errors->has('tgll'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

<!-- Tanggal Selesai -->
                                <div class="form-group{{ $errors->has('tgll') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tgll">{{ __('Tanggal Selesai') }}</label>
                                    <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="flatpickr flatpickr-input form-control" name="tgll" type="text" placeholder="Select Date..">
                                    </div>
                                    </div>
                                    @if ($errors->has('tgll'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
<!-- Total Jam -->
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-name">{{ __('Total Jam') }}</label>
                            <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Total Jam" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection