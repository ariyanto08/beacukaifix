@extends('template.super-admin')

@section('content')
<a href="{{url('master-data/usersuper')}}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Data Admin</h4>
                </div>
                <div class="card-body">
                    <p>
                        Nama : {{ $admin->nama }}
                    </p>
                    <p>
                        NIP : {{ $admin->nip }}
                    </p>
                    <p>
                        Email : {{ $admin->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

