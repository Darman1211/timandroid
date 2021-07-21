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

                                <div class="form-group{{ $errors->has('tmptlahir') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tmptlahir">{{ __('Tempat Lahir') }}</label>
                                    <input type="text" name="tmptlahir" id="input-tmptlahir" class="form-control form-control-alternative{{ $errors->has('tmptlahir') ? ' is-invalid' : '' }}" placeholder="Isikan Tempat Lahir Peserta" required>

                                    @if ($errors->has('tmptlahir'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tmptlahir') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('tgll') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tgll">{{ __('Tanggal Lahir') }}</label>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
                                        </div>
                                    </div>

                                    @if ($errors->has('tgll'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ttgl') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-alamat">{{ __('Alamat') }}</label>
                                    <textarea class="form-control form-control-alternative{{ $errors->has('alamat') ? ' is-invalid' : '' }}" rows="3" placeholder="Isikan Alamat Peserta" required autofocus></textarea>

                                    @if ($errors->has('alamat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('emal') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="text" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Isikan Email Peserta" required autofocus>

                                    @if ($errors->has('email'))
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