<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $data = Service::orderby('id','desc')->get();
        return view('service.index',compact('data'));
    }
    public function add(){
        return view('service.create');
    }
    public function store(Request $request){
        $trans = [
            'name.required' => 'Tên đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        }
        $data = new Service();
        $data->name = $request->name;
        $data->hideshow = $request->hideshow;
        $data->unit = $request->unit;
        $data->price = $request->price;
        $data->img = $filename ?? '';
        $data->save();
        alert()->success('Thành công','Đã thêm dữ liệu');
        return redirect()->route('service.index');
    }
    public function edit($id){
        $data = Service::find($id);
        return view('service.edit',compact('data'));
    }

    public function update($id,Request $request){
        $trans = [
            'name.required' => 'Tên  đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        $data = Service::find($id);
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        }
        $data->name = $request->name;
        $data->hideshow = $request->hideshow;
        $data->unit = $request->unit;
        $data->price = $request->price;
        $data->img = $filename ?? $data->img;

        $data->save();
        alert()->success('Thành công','Đã cập nhật dữ liệu');
        return redirect()->route('service.index');
    }

    public function destroy($id){
        $data = Service::find($id);
        $data->delete();
        alert()->success('Thành công','Đã xóa dữ liệu');
        return redirect()->route('service.index');
    }

}
