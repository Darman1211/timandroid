@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Input Data Peserta')
    ])   

    <div class="container-fluid mt--7">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                    </div>
                    <div class="card-body">
                        <form method="post" action="/peserta/store" autocomplete="off">
                        {{ csrf_field() }}

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nama Peserta') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Isikan Nama Peserta" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <!-- dropdowns nama kelas -->

                                <div class="form-group{{ $errors->has('kelas') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-kelas">{{ __('Kelas Yang Dipilih') }}</label>
                                    <select name="kelas" id="input-kelas" class="form-control form-control-alternative{{ $errors->has('kelas') ? ' is-invalid' : '' }}" required>
                                            <option value="">== Select Kelas ==</option>
                                        </select>

                                    @if ($errors->has('kelas'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('kelas') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('tmpt_l') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tmpt_l">{{ __('Tempat Lahir') }}</label>
                                    <input type="text" name="tmpt_l" id="input-tmpt_l" class="form-control form-control-alternative{{ $errors->has('tmpt_l') ? ' is-invalid' : '' }}" placeholder="Isikan Tempat Lahir Peserta" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('tgll') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tgll">{{ __('Tanggal Lahir') }}</label>
                                    <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="flatpickr flatpickr-input form-control" type="text" placeholder="Select Date..">
                                </div>
                                </div>

                                    @if ($errors->has('tgll'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
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