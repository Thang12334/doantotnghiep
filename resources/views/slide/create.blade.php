@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Quản lí slide
                </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dịch vụ</a></li>
                        <li class="breadcrumb-item active">Thêm mới</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('slide.store') }}"  enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Ảnh </label>
                            <input name="img" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="form-group">
                            <label for="">Tên </label>
                            <input name="name" type="text" placeholder="Slide 1" class="form-control" required>
                        </div>
                    </div>



                    <div class="col-md-8 mb-3">
                        <div class="form-group">
                            <label for="">Tình trạng</label>
                            <select name="hideshow" class="form-control">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
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
