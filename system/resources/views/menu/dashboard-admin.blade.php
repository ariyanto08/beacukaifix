@extends('template.admin')

@section('content')
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto mb-3"><i class='bx bxl-facebook-square'></i>
                        </div>
                        <h4 class="my-1">{{ $berita }}</h4>
                        <p class="mb-0">Jumlah Berita</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto mb-3"><i class='bx bxl-linkedin-square'></i>
                        </div>
                        <h4 class="my-1">{{ $iklan }}</h4>
                        <p class="mb-0">Jumlah Iklan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto mb-3"><i class='bx bxl-youtube'></i>
                        </div>
                        <h4 class="my-1">{{ $video }}</h4>
                        <p class="mb-0">Jumlah Video Youtube</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
