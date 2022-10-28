@extends('template.admin')

@section('content')
    <div class="container">
        <a href="{{ url('data-manager/video') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ url('public', $video->foto) }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            Data Video
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h4>{{ $video->nama }}</h4>
                                    <hr>
                                    <p>
                                        {!! nl2br($video->deskripsi) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
