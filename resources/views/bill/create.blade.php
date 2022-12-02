@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Quản lí hóa đơn
                </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hóa đơn</a></li>
                        <li class="breadcrumb-item active">Thêm mới</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
           <form action="{{ route('bill.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label>Mã hóa đơn</label>
                        <input type="text" name="code" id="code" data-length="120" placeholder="Mã đc tạo tự động"
                            class="form-control" data-toggle="tooltip" data-placement="top"
                            data-original-title="" title="" readonly>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label>Tên Khách hàng</label>
                        <input type="text" name="name" id="name" data-length="120"
                            placeholder=" Tên khách hàng" class="form-control" data-toggle="tooltip"
                            data-placement="top" data-original-title="" title="">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label>Điện thoại Khách hàng</label>
                        <input  type="text" name="phone" id="phone" data-length="120"
                            placeholder=" Nhập SĐT khách hàng" class="form-control" data-toggle="tooltip"
                            data-placement="top" data-original-title="" title="">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label>Email Khách hàng</label>
                        <input type="text" name="email" id="email" data-length="120"
                            placeholder="Nhập email khách hàng" class="form-control" data-toggle="tooltip"
                            data-placement="top" data-original-title="" title="">
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="">Phòng</label>
                        <select class="form-control" name="room_id">
                            @foreach ($rooms as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label>Ngày đến</label>
                        <input class="form-control" id="from_date" type="date"
                            placeholder="dd-mm-yyyy" name="from_day">
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label>Ngày đi</label>
                        <input class="form-control" placeholder="dd-mm-yyyy" id="to_date"
                            type="date" name="to_day">
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <textarea class="form-control" name="note" id="note" data-length="400" rows="3"
                            data-toggle="tooltip" data-placement="top" title=""
                            placeholder="Nhập ghi chú"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-primary">Lưu</button>
                </div>
            </div>
           </form>
        </div>
    </div>
</div>
@endsection
