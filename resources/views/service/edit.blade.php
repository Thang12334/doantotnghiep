@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Quản lí dịch vụ
                </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dịch vụ</a></li>
                        <li class="breadcrumb-item active">Cập nhật</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('service.update',$data->id) }}"  enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="">Tên gọi</label>
                            <input name="name" value="{{ $data->name }}" type="text" placeholder="Cafe" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="">Đơn vị tính</label>
                            <input name="unit" value="{{ $data->unit }}" type="text" placeholder="Ly" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="">Giá tiền</label>
                            <input name="price" value="{{ $data->price }}" type="number" placeholder="200.000" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Ảnh đại diện</label>
                            <img src="{{ asset('uploads/'.$data->img) }}" style="width: 100px" alt="">
                            <input name="img" type="file" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Tình trạng</label>
                            <select name="hideshow" class="form-control">
                                <option {{ $data->hideshow == true ? 'selected'  : ''}} value="1">Còn</option>
                                <option {{ $data->hideshow == false ? 'selected'  : ''}} value="0">Hết</option>
                            </select>
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
