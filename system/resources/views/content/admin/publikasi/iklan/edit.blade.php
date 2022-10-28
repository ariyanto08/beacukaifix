@extends ('template.admin')

@section('content')
    <div class="container">
        <a href="{{ url('data-manager/iklan') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url('public', $iklan->foto) }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Edit Data Iklan
                    </div>
                    <div class="card-body">
                        <form action="{{ url('data-manager/iklan', $iklan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $iklan->nama }}">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" class="form-control" name="foto" accept="png,jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $iklan->deskripsi }}</textarea>
                            </div>
                            <button class="btn-warning float-end btn btn-sm mt-3"><i class="bx bx-save"></i> Save </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
