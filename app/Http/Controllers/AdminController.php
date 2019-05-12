<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use App\Product;


class AdminController extends Controller
{
    //
    public function __contruct(){
        $this->middleware('auth');
        $this->middleware(['role:super-admin']);
    }

    public function index(){

        $products = Product::orderby('id','desc')->get();
        $data = [
            'title' => 'Admin Dashboard',
            'products' => $products

        ];
        return view('back.index',$data);
    }

    public function addProduct(Request $request){
        $user = auth()->user();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'amount' => 'required',

        ]);


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $code = str_random(5);
        $destinationPath = "products";

        if ($request->image1) {

            $file = $request->file('image1');
            $fileName = str_random(5);
            $file->move($destinationPath, $fileName . $file->getClientOriginalName());

            $picture = $fileName . $file->getClientOriginalName();
            $picture_path = $destinationPath . "/" . $picture;
        }else{
            $picture_path='';
        }

        if ($request->image2) {

            $file2 = $request->file('image2');
            $fileName2 = str_random(5);
            $file2->move($destinationPath, $fileName2 . $file2->getClientOriginalName());

            $picture2 = $fileName2 . $file2->getClientOriginalName();
            $picture_path2 = $destinationPath . "/" . $picture2;
        }else{
            $picture_path2='';
        }

        $data = new Product;
        $data->code = $code;
        $data->name = $request->name;
        $data->image1 = $picture_path;
        $data->image2 = $picture_path2;
        $data->quantity = $request->quantity;
        $data->amount = $request->amount;
        $data->description = $request->description;
        $data->save();

        Session::flash('msg', 'Successful, Your Product Has been Successfully Added');
        return back();


    }

    public function chgStatus($id, $status){

        if($status == 'active'){
            $chfStatus = 'inactive';
        }else{
            $chfStatus = 'active';
        }

        Product::where('id', $id)->update([
            'status' => $chfStatus,
        ]);        

        Session::flash('msg', 'Successful, Your Product Has been Successfully Updated');
        return back();
    }

    public function viewProduct($id){

        $product = Product::where('id',$id)->first();
        $data = [
            'title' => 'Admin Dashboard',
            'product' => $product

        ];
        return view('back.single',$data);

    }
}
