@extends('template.admin')
@section('content')
    <div class="row">
        <div class="card">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Janji Layanan</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item active" aria-current="page">Daftar Link</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto mt-4">
                    <div class="btn-group">
                        <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample"><i class="bx bx-plus me-1"></i>
                            Add New Link</a>
                    </div>
                </div>
            </div>
            <!-- Collapse Create-->
            <div class="col-12">
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <form action="{{ url('data-manager/janji') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-grup">
                                <label for="" class="control-label">Link</label>
                                <input type="text" class="form-control" name="link">
                            </div>
                            <div class="form-grup">
                                <label for="" class="control-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar" accept="png,jpg">
                            </div>
                            <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"> Save</i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Link</th>
                                <th>Tanggal Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_janji as $janji)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $janji->link }}</td>
                                    <td>{{ $janji->created_at->format('d F Y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('data-manager/janji', $janji->id) }}" class="btn btn-info"
                                                title="Show"><i class="bx bx-detail"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="{{ url('data-manager/janji', $janji->id) }}/edit"
                                                class="btn btn-warning" title="Edit"><i class="bx bx-edit"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            @include('utils.delete', [
                                                'url' => url('data-manager/janji', $janji->id),
                                            ])
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
