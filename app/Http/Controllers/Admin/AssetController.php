<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Asset;
use App\Models\AdminRole;
use App\Models\BannerImage;
use Hash;
use Auth;

class AssetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $logedInAdmin = Auth::guard('admin')->user();
        if($logedInAdmin->admin_type >= 3){
            $assets = Asset::orderBy('id','asc')->get();
            return view('admin.assets', compact('assets'));
        }else return abort(404);

    }

    public function create(){
        $logedInAdmin = Auth::guard('admin')->user();
        $adminRole = AdminRole::where('id', '!=', 4)->get();
        if($logedInAdmin->admin_type >= 3){
            return view('admin.create_asset', compact('adminRole'));
        }else return abort(404);


    }

    public function store(Request $request){
        $rules = [
            'name' => 'required',
            'code' => 'required',
            'buy' => 'required',
            'sell' => 'required',
            'buy_min' => 'required',
            'buy_max' => 'required',
            'sell_min' => 'required',
            'sell_max' => 'required',
            'status' => 'required',
        ];

        $customMessages = [
            'name.required' => trans('admin_validation.Name is required'),
            'code.required' => trans('admin_validation.Asset Code is required'),
            'buy.required' => trans('admin_validation.Buy Price is required'),
            'sell.required' => trans('admin_validation.Sell Price is required'),
            'buy_min.required' => trans('admin_validation.Buy Minimum is required'),
            'buy_max.required' => trans('admin_validation.Buy Maximum is required'),
            'sell_min.required' => trans('admin_validation.Sell Minimum is required'),
            'sell_max.required' => trans('admin_validation.Sell Maximum is required'),
            'status.required' => trans('admin_validation.Asset Status is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        $asset = new Asset();
        $asset->name =$request->name;
        $asset->code =$request->code;
        $asset->status =$request->status;
        $asset->buy =$request->buy;
        $asset->sell =$request->sell;
        $asset->buy_min =$request->buy_min;
        $asset->buy_max =$request->buy_max;
        $asset->sell_min =$request->sell_min;
        $asset->sell_max =$request->sell_max;
        $asset->save();

        $notification = trans('admin_validation.Create Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }


    public function destroy($id){
        $asset = Asset::find($id);
        $old_image = $asset->image;
        $asset->delete();
        if($old_image){
            if(File::exists(public_path().'/'.$old_image))unlink(public_path().'/'.$old_image);
        }
        $notification = trans('admin_validation.Delete Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function changeStatus($id){
        $asset = Asset::find($id);
        if($asset->status == 1){
            $asset->status = 0;
            $asset->save();
            $message = trans('admin_validation.Inactive Successfully');
        }else{
            $asset->status = 1;
            $asset->save();
            $message = trans('admin_validation.Active Successfully');
        }
        return response()->json($message);
    }
}
