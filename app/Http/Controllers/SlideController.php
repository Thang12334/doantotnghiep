<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index(){
        $data = Slide::orderby('id','desc')->get();
        return view('slide.index',compact('data'));
    }
    public function add(){
        return view('slide.create');
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
        $data = new Slide();
        $data->name = $request->name;
        $data->hideshow = $request->hideshow;
        $data->img = $filename ?? '';
        $data->save();
        alert()->success('Thành công','Đã thêm dữ liệu');
        return redirect()->route('slide.index');
    }
    public function edit($id){
        $data = Slide::find($id);
        return view('slide.edit',compact('data'));
    }

    public function update($id,Request $request){
        $trans = [
            'name.required' => 'Tên đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        $data = Slide::find($id);
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        }
        $data->name = $request->name;
        $data->hideshow = $request->hideshow;
        $data->img = $filename ?? $data->img;
        $data->save();
        alert()->success('Thành công','Đã cập nhật dữ liệu');
        return redirect()->route('slide.index');
    }

    public function destroy($id){
        $data = Slide::find($id);
        $data->delete();
        alert()->success('Thành công','Đã xóa dữ liệu');
        return redirect()->route('slide.index');
    }

}
