<?php
namespace App\Http\Controllers;
use App\Models\Bill;
use App\Models\Service;
use App\Models\Room;
use Str;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BillDetail;

class BillzController extends Controller
{
    // để xuất hóa đơn 
    public function index(){
        $data = Bill::orderby('id','desc')->get();
        foreach($data as $dataz){
            $t = 0;
           foreach($dataz->detail as $total){
            $t += $total->total;
            }
           $dataz->total = $t;
        }
        return view('bill.index',compact('data'));
    }
    public function add(){
        $rooms = Room::orderby('id','desc')->where('hideshow','1')->get();
        return view('bill.create',compact('rooms'));
    }
    public function store(Request $request){
        $trans = [
            'name.required' => 'Tên đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        $data = new Bill();
        $data->code = $random = mt_rand(111111, 999999);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->from_day = $request->from_day;
        $data->to_day = $request->to_day;
        $data->room_id = $request->room_id;
        $data->note = $request->note;
        $data->status = $request->status ?? false;
        $data->save();

        $data_detail = new BillDetail();
        $data_detail->room_id = $data->room_id;
        $data_detail->qty =Carbon::parse( $data->from_day )->diffInDays( $data->to_day );
        $data_detail->total =$data_detail->qty * Room::find($data->room_id)->price;
        $data_detail->bill_id = $data->id;
        $data_detail->save();
        alert()->success('Thành công','Đã thêm dữ liệu');
        return redirect()->route('bill.index');
    }
    public function edit($id){
        $rooms = Room::orderby('id','desc')->where('hideshow','1')->get();
        $services = Service::orderby('id','desc')->where('hideshow','1')->get();
        $data = Bill::find($id);

        $total = 0;
        foreach ($data->detail as $d){
            $total += json_decode($d->total);
        }
        return view('bill.edit',compact('data','rooms','services','total'));
    }

    public function add_detail(Request $request){
         $data = new BillDetail();
         $data->bill_id = $request->bill_id;
         $data->room_id = $request->room_id;
         $data->service_id = $request->service_id;
         $data->qty = $request->qty;
         $data->total = Service::find($request->service_id)->price  * $request->qty;
         $data->save();
         alert()->success('Thành công','Đã thêm dữ liệu');
         return back();

    }

    public function update($id,Request $request){
        $trans = [
            'name.required' => 'Tên đang bỏ trống !',
        ];
        $validated = $request->validate([
            'name' => 'required|max:100',
        ],$trans);
        $data = Bill::find($id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->from_day = $request->from_day;
        $data->to_day = $request->to_day;
        $data->room_id = $request->room_id;
        $data->note = $request->note;
        $data->status = $request->status;
        $data->save();
        alert()->success('Thành công','Đã cập nhật dữ liệu');
        return redirect()->route('bill.index');
    }
    
    public function destroy($id){
        $data = Bill::find($id);
        $data->delete();
        alert()->success('Thành công','Đã xóa dữ liệu');
        return redirect()->route('bill.index');
    }

}
