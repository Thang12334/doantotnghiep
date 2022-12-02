<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $data = Room::orderby('id','desc')->get();
        return view('room.index',compact('data'));
    }
    public function add(){
        $parent = RoomType::orderby('id','desc')->where('hideshow','1')->get();
        return view('room.create',compact('parent'));
    }
    public function store(Request $request){
        $trans = [
            'name.required' => 'Tên đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        // khai báo thuộc tính trong bảng
        $data = new Room();
        $data->name = $request->name;
        $data->parent_id = $request->parent_id ?? true;
        $data->hideshow = $request->hideshow;
        $data->status = $request->status;
        $data->content = $request->content;
        $data->price = $request->price;
        $data->save();
        alert()->success('Thành công','Đã thêm dữ liệu');
        return redirect()->route('room.index');
    }
    public function edit($id){
        $parent = RoomType::orderby('id','desc')->where('hideshow','1')->get();
        $data = Room::find($id);
        return view('room.edit',compact('data','parent'));
    }
    public function update($id,Request $request){
        $trans = [
            'name.required' => 'Tên đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        $data = Room::find($id);
        $data->name = $request->name;
        $data->parent_id = $request->parent_id;
        $data->hideshow = $request->hideshow;
        $data->status = $request->status;
        $data->content = $request->content;
        $data->price = $request->price;
        $data->save();
        alert()->success('Thành công','Đã cập nhật dữ liệu');
        return redirect()->route('room.index');
    }
    public function destroy($id){
        $data = Room::find($id);
        $data->delete();
        alert()->success('Thành công','Đã xóa dữ liệu');
        return redirect()->route('room.index');
    }

}
