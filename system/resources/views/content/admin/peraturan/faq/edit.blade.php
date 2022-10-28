@extends ('template.admin')

@section('content')
    <div class="container">
        <a href="{{ url('data-manager/faq') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data FAQ
                    </div>
                    <div class="card-body">
                        <form action="{{ url('data-manager/faq', $faq->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="" class="control-label">Kategori</label>
                                <input type="text" class="form-control" name="kategori" value="{{ $faq->kategori }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Pertanyaan</label>
                                <input type="text" class="form-control" name="pertanyaan" value="{{ $faq->pertanyaan }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Jawaban</label>
                                <textarea name="jawaban" class="form-control">{{ $faq->jawaban }}</textarea>
                            </div>
                            <button class="btn-warning float-end btn btn-sm mt-3"><i class="bx bx-save"></i> Save </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
