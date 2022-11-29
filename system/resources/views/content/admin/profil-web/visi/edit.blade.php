@extends('template.admin')
@section('content')
    <a href="{{ url('data-manager/visi') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="{{ url('data-manager/visi', $visi->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01" name="level">
                                <option selected>Choose...</option>
                                <option value="Visi">Visi</option>
                                <option value="Misi">Misi</option>
                                <option value="Motto">Motto</option>
                            </select>
                        </div>
                        <div class="form-grup">
                            <label for="" class="control-label">Isi</label>
                            <textarea id="mytextarea" name="deskripsi" class="form-control">{{ $visi->deskripsi }}</textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label for="" class="control-label">Isi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div> --}}
                        <button class="btn-warning float-end btn btn-sm mt-3"><i class="bx bx-save"></i> Save </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
