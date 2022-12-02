@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Quản lí thiết bị
                </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Thiết bị</a></li>
                        <li class="breadcrumb-item active">Thêm mới</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('device.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Thiết bị</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Số lượng</label>
                            <input value="1" type="number" class="form-control" name="qty">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Chọn Phòng</label>
                            <select name="room_id" class="form-control">
                               <option value="0">---Chọn phòng---</option>
                               @foreach ($room as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Tình trạng</label>
                            <select name="status" class="form-control">
                                <option value="1">Tốt</option>
                                <option value="0">Hỏng</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <button class="btn btn-success"><i class="fas fa-check"></i> LƯU</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
