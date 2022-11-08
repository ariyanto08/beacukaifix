@extends('template.super-admin')

@section('content')
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Revenue</p>
                        <h4 class="my-1">$4805</h4>
                    </div>
                    <div class="widgets-icons ms-auto"><i class="bx bxs-wallet"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Total Customers</p>
                        <h4 class="my-1">8.4K</h4>
                    </div>
                    <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Store Visitors</p>
                        <h4 class="my-1">59K</h4>
                    </div>
                    <div class="widgets-icons ms-auto"><i class='bx bxs-binoculars'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Bounce Rate</p>
                        <h4 class="my-1">34.46%</h4>
                    </div>
                    <div class="widgets-icons ms-auto"><i class='bx bx-line-chart-down'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

