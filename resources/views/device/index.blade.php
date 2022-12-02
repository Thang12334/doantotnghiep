@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Quản lí thiết bị
                    <a href="{{ route('device.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm mới</a>
                </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Thiết bị</a></li>
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
                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Số lượng</th>
                        <th>Phòng</th>
                        <th>Tình Trạng</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $item)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <th>{{ $item->name ?? '' }}</th>
                            <td>{{ $item->qty }}</td>
                            <td><a href="#">{{ $item->room->name ?? '' }}</a></td>
                            <td><span class="btn btn-{{ $item->status == true ? 'success' : 'warning' }} btn-rounded waves-effect waves-light">{{ $item->status==true ? 'Tốt' : 'Hỏng' }}</span></td>
                            <td>
                                <a href="{{ route('device.edit',$item->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                                <a onclick="return confirm('Xác nhận xóa?')" href="{{ route('device.destroy',$item->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
