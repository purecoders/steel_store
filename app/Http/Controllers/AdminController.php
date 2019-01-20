<?php

namespace App\Http\Controllers;

use App\Info;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }


    public function dashboard(){
      $infos = Info::all();
      $address = '';
      $phone = '';
      $mobile = '';
      $email = '';
      foreach ($infos as $info){
        if($info->key == 'address') $address = $info->value;
        if($info->key == 'phone') $phone = $info->value;
        if($info->key == 'mobile') $mobile = $info->value;
        if($info->key == 'email') $email = $info->value;
      }


      return view('admin.dashboard', compact(['address', 'phone', 'mobile', 'email']));
    }

    public function posts(){
      return view('admin.posts');
    }

    public function sliders(){
      return view('admin.sliders');
    }

    public function products(){
      $products = Product::orderBy('id', 'desc')->get();
      return view('admin.products', compact('products'));
    }


    public function changePassword(Request $request){
      $this->validate($request, [
        'old_password' => 'required|string|min:6|max:250',
        'new_password1' => 'required|string|min:6|max:250',
        'new_password2' => 'required|string|min:6|max:250',
      ]);

      $user = Auth::user();
      if(Hash::check($request->old_password, $user->password)){
        if($request->new_password1 == $request->new_password2){
          $user->password = Hash::make($request->new_password1);
          $user->save();
        }
      }

      return redirect(route('admin-dashboard'));
    }


    public function changeInfo(Request $request){
      $this->validate($request, [
        'address' => 'required|string|max:250',
        'phone' => 'required|string|max:250',
        'mobile' => 'required|string|max:250',
        'email' => 'required|string|max:250',
      ]);

      $address = Info::where('key', '=', 'address')->first();
      $phone = Info::where('key', '=', 'phone')->first();
      $mobile = Info::where('key', '=', 'mobile')->first();
      $email = Info::where('key', '=', 'email')->first();

      $address->value = $request->address;
      $phone->value = $request->phone;
      $mobile->value = $request->mobile;
      $email->value = $request->email;

      $address->save();
      $phone->save();
      $mobile->save();
      $email->save();

      return redirect(route('admin-dashboard'));
    }



    public function productAdd(Request $request){
      $this->validate($request, [
        'din' => 'required|string|max:250',
        'din_symbol' => 'required|string|max:250',
        'name' => 'required|string|max:250',
        'usage' => 'max:250',
      ]);

      $product = Product::create([
        'din' => $request->din,
        'din_symbol' => $request->din_symbol,
        'name' => $request->name,
        'usage' => $request->usage,
      ]);

      return redirect(route('admin-products'));

    }

    public function productEdit($id){
      $product = Product::find($id);
      return view('admin.edit_product', compact('product'));
    }

    public function productRemove($id){
      $product = Product::find($id);
      $product->delete();
      return redirect(route('admin-products'));
    }



}
