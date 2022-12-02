@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Quản lí phòng
                </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Phòng</a></li>
                        <li class="breadcrumb-item active">Thêm mới</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('room.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="">Tên gọi</label>-=+-
                            <input name="name" type="text" placeholder="Phòng A1" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="">Giá 1 đêm</label>
                            <input name="price" type="number" placeholder="300000" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="">Danh mục</label>
                            <select name="parent_id" class="form-control">
                                <option value="1">---Chọn danh mục phòng---</option>
                                @foreach ($parent as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Tình trạng</label>
                            <select name="status" class="form-control">
                                <option value="1">Còn trống</option>
                                <option value="0">Đang thuê</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <select name="hideshow" class="form-control">
                                <option value="1">Hoạt động</option>
                                <option value="0">Không hoạt động</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="">Thông tin phòng</label>
                            <textarea name="content" id="elm1" name="area"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <button class="btn btn-success"><i class="fas fa-check"></i> LƯU</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
