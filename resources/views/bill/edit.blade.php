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
                        <li class="breadcrumb-item active">Cập nhật</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('bill.update',$data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label>Mã hóa đơn</label>
                            <input type="text" name="code" value="{{ $data->code }}" class="form-control"
                                data-toggle="tooltip" data-placement="top" data-original-title="" title="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label>Tên Khách hàng</label>
                            <input type="text" name="name" value="{{ $data->name }}" class="form-control"
                                data-toggle="tooltip" data-placement="top" data-original-title="" title="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label>Điện thoại Khách hàng</label>
                            <input type="text" name="phone" id="phone" data-length="120" value="{{ $data->phone }}"
                                class="form-control" data-toggle="tooltip" data-placement="top" data-original-title=""
                                title="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label>Email Khách hàng</label>
                            <input type="text" name="email" id="email" data-length="120" value="{{ $data->email }}"
                                class="form-control" data-toggle="tooltip" data-placement="top" data-original-title=""
                                title="">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="">Phòng</label>
                            <select name="room_id" class="form-control">
                                <option value="1">---Chọn phòng---</option>
                                @foreach ($rooms as $item)
                                <option {{ $data->room->id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{
                                    $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <div class="form-group">
                            <label>Ngày đến</label>
                            <input class="form-control" type="date" placeholder="dd-mm-yyyy" name="from_day"
                                value="{{ $data->from_day }}">
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <div class="form-group">
                            <label>Ngày đi</label>
                            <input class="form-control" placeholder="dd-mm-yyyy" type="date" name="to_day"
                                value="{{ $data->to_day }}">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <select name="status" class="form-control">
                                <option {{ $data->status == 1 ? 'selected' : '' }} value="1">Đã thanh toán</option>
                                <option {{ $data->status == 0 ? 'selected' : '' }} value="0">Đang thuê</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label for="">Ghi chú</label>
                            <textarea class="form-control" name="note" id="note" data-length="400" rows="3"
                                data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Nhập ghi chú">{{ $data->note }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="header">
                            <div class="box-header with-border ">
                                <div class=" justify-content-space-between">
                                    <h4 class="box-title">Chi tiết hóa đơn</h4>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#ModalAdd">
                                        + Thêm dịch vụ
                                    </button>
                                    {{-- <a href="in-hoa-don.html" target="_blank" class="btn btn-primary">
                                        Xuất hóa đơn
                                    </a> --}}
                                </div>
                            </div>


                        </div>
                        <div class="box-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tên dịch vụ</th>
                                        <th>Số lượng</th>
                                        <th>Đơn vị tính</th>
                                        <th>Giá bán</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data->detail as $item)
                                    <tr>

                                        <td><strong>
                                        @if($loop->first)
                                        {{ $item->room->name ?? '-' }}
                                        @else
                                        {{ $item->service->name ?? '-' }}
                                        @endif
                                        </strong></td>
                                        <td>
                                           {{ $item->qty }}
                                        </td>
                                        <td>{{ $item->service->unit ?? 'Đêm' }}</td>
                                        @if($loop->first)
                                        <td>{{ number_format($item->room->price) }} đ</td>
                                        <td>{{ number_format($item->total) }} đ</td>
                                        @else
                                        <td>{{ number_format($item->service->price) }} đ</td>
                                        <td>{{ number_format($item->total) }} đ</td>

                                        @endif
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td style="text-align: right" colspan="4"><b>TỔNG CỘNG </b></td>
                                        <td><b id="reload_price" style="color: #dd4b39">{{ number_format($total) }} đ</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Cập nhật</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="ModalAdd" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalAdd">Thêm dịch vụ phòng</h5>
            </div>

         <form action="{{ route('bill.add_detail') }}" method="post">
            @csrf
            <div class="col-md-12 p-3">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Dịch vụ</label>
                        <input hidden  type="text" name="room_id" value="{{ $data->room->id }}">
                        <input hidden  type="text" name="bill_id" value="{{ $data->id }}">
                        <select name="service_id" class="form-control">
                            @foreach ($services as $item)
                            <option value="{{ $item->id }}">{{ $item->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Số lượng</label>
                        <div class="form-group">
                            <input type="number" value="1" name="qty"  class="form-control">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
         </form>
        </div>
    </div>
</div>
@endsection
