@extends('layouts.app')

@section('content')
<div class="card-body">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Tổng quan</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tổng quan</a></li>
                        <li class="breadcrumb-item active">Thống kê</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">PHÒNG</p>
                            <h4 class="mb-0">{{ App\Models\Room::count() }}</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                <a href="{{ route('room.index') }}">
                                <span class="avatar-title">
                                    <i class="bx bx-bed font-size-24"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">THIẾT BỊ</p>
                            <h4 class="mb-0">{{ App\Models\Device::count() }}</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                            <a href="{{ route('device.index') }}">
                                <span class="avatar-title">
                                    <i class="bx bx-package font-size-24"></i>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">HÓA ĐƠN</p>
                            <h4 class="mb-0">{{ App\Models\Bill::count() }}</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center ">
                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                            <a href="{{ route('bill.index') }}">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-credit-card font-size-24"></i>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">DỊCH VỤ</p>
                            <h4 class="mb-0">{{ App\Models\Service::count() }}</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                            <a href="{{ route('room.index') }}">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-like font-size-24"></i>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-inner" role="listbox">
                            @foreach ($slides as $item)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img class="d-block img-fluid" style="width: 100%;" src="{{ asset('uploads/'.$item->img) }}" alt="{{ $item->name ?? '' }}">
                            </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
