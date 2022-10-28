@extends('template.super-admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 bg-primary bg-gradient">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Total Orders</p>
                                    <h4 class="my-1 text-white">845</h4>
                                </div>
                                <div class="text-white ms-auto font-35"><i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-danger bg-gradient">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Total Income</p>
                                    <h4 class="my-1 text-white">$89,245</h4>
                                </div>
                                <div class="text-white ms-auto font-35"><i class='bx bx-dollar'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-warning bg-gradient">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-dark">Total Users</p>
                                    <h4 class="text-dark my-1">24.5K</h4>
                                </div>
                                <div class="text-dark ms-auto font-35"><i class='bx bx-user-pin'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-success bg-gradient">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Comments</p>
                                    <h4 class="my-1 text-white">8569</h4>
                                </div>
                                <div class="text-white ms-auto font-35"><i class='bx bx-comment-detail'></i>
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

