@extends('template.admin')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Visi Misi</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Daftar Visi Misi</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto mt-4">
            <div class="btn-group">
                <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample"><i class="bx bx-plus me-1"></i>
                    Add New Visi Misi</a>
            </div>
        </div>
    </div>
    <!-- Collapse Create-->
    <div class="col-12">
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form action="{{ url('data-manager/visi') }}" method="post">
                    @csrf
                    <div class="form-grup">
                        <label for="" class="control-label">Status</label>
                        <select name="level" class="form-control">
                            <option>--Level--</option>
                            <option value="Visi">Visi</option>
                            <option value="Misi">Misi</option>
                        </select>
                    </div>
                    <div class="form-grup">
                        <label for="" class="control-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"> Save</i></button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Visi</th>
                                    <th>Tanggal Upload</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visi as $visi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $visi->deskripsi }}</td>
                                        <td>{{ $visi->created_at->format('d F Y') }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('data-manager/visi', $visi->id) }}" class="btn btn-info"
                                                    title="Show"><i class="bx bx-detail"></i></a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="{{ url('data-manager/visi', $visi->id) }}/edit"
                                                    class="btn btn-warning" title="Edit"><i class="bx bx-edit"></i></a>
                                            </div>
                                            <div class="btn-group">
                                                @include('utils.delete', [
                                                    'url' => url('data-manager/visi', $visi->id),
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
    </div>

    <hr>

    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Misi</th>
                                <th>Tanggal Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($misi as $misi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $misi->deskripsi }}</td>
                                    <td>{{ $misi->created_at->format('d F Y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('data-manager/visi', $misi->id) }}" class="btn btn-info"
                                                title="Show"><i class="bx bx-detail"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="{{ url('data-manager/visi', $misi->id) }}/edit"
                                                class="btn btn-warning" title="Edit"><i class="bx bx-edit"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            @include('utils.delete', [
                                                'url' => url('data-manager/visi', $misi->id),
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
</div>
@endsection
