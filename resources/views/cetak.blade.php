@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Cetak Sertifikat')
    ])

   <div style="margin-left:15%" class="container-fluid mt--7">
    <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
            </div>
            <div class="card-body">
                <form method="post" action="/cetak/store" autocomplete="off">
                {{ csrf_field() }}
                    <div class="pl-lg-4">

                        <!-- Id Peserta -->

                        <div class="form-group">
                            <label class="form-control-label">ID Peserta
                            </label>
                            <select class="form-control" id="id_peserta-option" name="id_peserta">
                            @foreach ($peserta as $peserta)
                                <option value="{{ $peserta->id_peserta }}">{{ $peserta->id }}</option>
                            @endforeach
                            </select>
                        </div>

                        <!-- Id Kelas -->

                        <div class="form-group">
                            <label class="form-control-label">ID Kelas
                            </label>
                            <select class="form-control" id="id_kelas-option" name="id_kelas">
                            @foreach ($kelas as $kelas)
                                <option value="{{ $kelas->id_kelas }}">{{ $kelas->id }}</option>
                            @endforeach
                            </select>
                        </div>

                         <!-- Tanggal Cetak Sertifikat -->

                         <div class="form-group">
                            <label class="form-control-label">Tanggal Cetak Sertifikat
                            </label>
                            <input type="date" name="tgl_keluar_sertifikat" class="form-control" required="required">
                        </div>
                      
                        <div class="text-center">
                            <input type="submit" class="btn btn-success mt-4" value="Tampilkan Data">
                        </div>
                    </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth')
</div>

@endsection