<?php

namespace App\Http\Controllers;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index(){
        $data = RoomType::orderby('id','desc')->get();
        return view('roomtype.index',compact('data'));
    }
    public function add(){
        return view('roomtype.create');
    }
    public function store(Request $request){
        $trans = [
            'name.required' => 'Tên  đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        $data = new RoomType();
        $data->name = $request->name;
        $data->hideshow = $request->hideshow;
        $data->save();
        alert()->success('Thành công','Đã thêm dữ liệu');
        return redirect()->route('roomtype.index');
    }
    public function edit($id){
        $data = RoomType::find($id);
        return view('roomtype.edit',compact('data'));
    }

    public function update($id,Request $request){
        $trans = [
            'name.required' => 'Tên  đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        $data = RoomType::find($id);
        $data->name = $request->name;
        $data->hideshow = $request->hideshow;
        $data->save();
        alert()->success('Thành công','Đã cập nhật dữ liệu');
        return redirect()->route('roomtype.index');
    }

    public function destroy($id){
        $data = RoomType::find($id);
        $data->delete();
        alert()->success('Thành công','Đã xóa dữ liệu');
        return redirect()->route('roomtype.index');
    }

}
