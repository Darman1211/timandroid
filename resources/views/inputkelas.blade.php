@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Input Data Kelas')
    ])

   <div style="margin-left:15%" class="container-fluid mt--7">
    <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
            </div>
            <div class="card-body">
                <form method="post" action="/kelas/store" autocomplete="off">
                {{ csrf_field() }}
                    <div class="pl-lg-4">

                        <!-- Nama Kelas -->

                        <div class="form-group">
                            <label class="form-control-label">Nama Kelas
                            </label>
                            <input type="text" name="nama_kelas" class="form-control" placeholder="Nama Kelas" required="required">
                        </div>

                         <!-- Tanggal Mulai -->

                         <div class="form-group">
                            <label class="form-control-label">Tanggal Mulai
                            </label>
                            <input type="date" name="tgl_mulai" class="form-control" required="required">
                        </div>

                        <!-- Tanggal Selesai -->

                        <div class="form-group">
                            <label class="form-control-label">Tanggal Selesai
                            </label>
                            <input type="date" name="tgl_selesai" class="form-control" required="required">
                        </div>

                        <!-- Total Jam -->

                        <div class="form-group">
                            <label class="form-control-label">Total Jam
                            </label>
                            <input type="text" name="total_jam" class="form-control" placeholder="Total Jam" required="required">
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