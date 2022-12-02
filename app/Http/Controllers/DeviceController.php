<?php

namespace App\Http\Controllers;
use App\Models\Device;
use App\Models\Room;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index(){
        $data = Device::orderby('id','desc')->get();
        return view('device.index',compact('data'));
    }
    public function add(){
        $room = Room::orderby('id','desc')->where('hideshow','1')->get();
        return view('device.create',compact('room'));
    }
    public function store(Request $request){
        $trans = [
            'name.required' => 'Tên đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        $data = new Device();
        $data->name = $request->name;
        $data->room_id = $request->room_id ?? true;
        $data->status = $request->status;
        $data->qty = $request->qty;
        $data->save();
        alert()->success('Thành công','Đã thêm dữ liệu');
        return redirect()->route('device.index');
    }
    public function edit($id){
        $room = Room::orderby('id','desc')->where('hideshow','1')->get();
        $data = Device::find($id);
        return view('device.edit',compact('data','room'));
    }
    public function update($id,Request $request){
        $trans = [
            'name.required' => 'Tên đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        $data = Device::find($id);
        $data->name = $request->name;
        $data->room_id = $request->room_id ?? true;
        $data->status = $request->status;
        $data->qty = $request->qty;
        $data->save();
        alert()->success('Thành công','Đã cập nhật dữ liệu');
        return redirect()->route('device.index');
    }
    public function destroy($id){
        $data = Device::find($id);
        $data->delete();
        alert()->success('Thành công','Đã xóa dữ liệu');
        return redirect()->route('device.index');
    }

}
