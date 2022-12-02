@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Sơ đồ phòng</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sơ đồ phòng</a></li>
                        <li class="breadcrumb-item active">Danh sách</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4>SƠ ĐỒ PHÒNG </h4>
                        {{-- <small>(*Click vào phòng để xem chi tiết)</small> --}}
                    </div>
                    <div class="text-center mb-3">
                        <b>Chú thích :</b>
                        <button class="btn color-box bg-secondary bg-soft mr-1"> Đang thuê </button>
                        <button class="btn color-box bg-info bg-soft"> Còn phòng </button>
                    </div>

                    <div class="row row-cols-5 box-room lane-a">
                        @foreach ($rooms as $item)
                        <div class="col mb-2">
                            <a>
                                <div class="room bg-no">
                                    <span class="btn color-box bg-secondary bg-soft {{ $item->status == true ? 'bg-info' : '' }}" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" >
                                        {{ $item->name }}
                                    </span>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-12">
        <img src="http://laserenavillas.com/wp-content/uploads/2017/02/laserena-villas-map.gif" class="w-100" alt="">
    </div> --}}
</div>
{{-- <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">THÔNG TIN PHÒNG A1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>
                        Ngày đặt phòng : 12/11/2022 23h35p
                    </li>
                    <li>
                        Ngày trả phòng : 13/11/2022 12h00p
                    </li>
                    <li>
                        Dịch vụ đã gọi
                        <ul>
                            <li>2 Nước suối</li>
                            <li>10 Chai bia</li>
                            <li>1 Combo trái cây</li>
                        </ul>
                    </li>
                </ul>
                <li>
                    Ghi chú : Đã thanh toán bằng thẻ
                </li>
            </div>
        </div>
    </div>
</div> --}}
@endsection
