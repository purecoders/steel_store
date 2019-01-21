<?php

namespace App\Http\Controllers;

use App\Info;
use App\Post;
use App\Product;
use App\Slider;
use App\Tag;
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
      $mobile2 = '';
      $email = '';
      foreach ($infos as $info){
        if($info->key == 'address') $address = $info->value;
        if($info->key == 'phone') $phone = $info->value;
        if($info->key == 'mobile') $mobile = $info->value;
        if($info->key == 'mobile2') $mobile2 = $info->value;
        if($info->key == 'email') $email = $info->value;
      }


      return view('admin.dashboard', compact(['address', 'phone', 'mobile', 'mobile2', 'email']));
    }

    public function posts(){
      $posts = Post::orderBy('id', 'desc')->get();
      return view('admin.posts', compact('posts'));
    }

    public function sliders(){
      $sliders = Slider::all();
      return view('admin.sliders', compact('sliders'));
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
        'mobile2' => 'required|string|max:250',
        'email' => 'required|string|max:250',
      ]);

      $address = Info::where('key', '=', 'address')->first();
      $phone = Info::where('key', '=', 'phone')->first();
      $mobile = Info::where('key', '=', 'mobile')->first();
      $mobile2 = Info::where('key', '=', 'mobile2')->first();
      $email = Info::where('key', '=', 'email')->first();

      $address->value = $request->address;
      $phone->value = $request->phone;
      $mobile->value = $request->mobile;
      $mobile2->value = $request->mobile2;
      $email->value = $request->email;

      $address->save();
      $phone->save();
      $mobile->save();
      $mobile2->save();
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

    public function productEditPage($id){
      $product = Product::find($id);
      return view('admin.edit_product', compact('product'));
    }

    public function productEdit(Request $request){
      $this->validate($request, [
        'id' => 'required|numeric',
        'din' => 'required|string|max:250',
        'din_symbol' => 'required|string|max:250',
        'name' => 'required|string|max:250',
        'usage' => 'max:250',
      ]);

      $product = Product::find($request->id);
      $product->din = $request->din;
      $product->din_symbol = $request->din_symbol;
      $product->name = $request->name;
      $product->usage = $request->usage;
      $product->save();

      return redirect(route('admin-products'));
    }

    public function productRemove($id){
      $product = Product::find($id);
      $product->delete();
      return redirect(route('admin-products'));
    }


    public function sliderRemove($id){
      $slider = Slider::find($id);
      $slider->delete();
      return redirect(route('admin-sliders'));
    }

    public function sliderAdd(Request $request){
      $this->validate($request, [
        'title' => 'required|string|max:250',
        'image' => 'required|image',
        'description' => 'string|max:250',
        'url' => 'max:250',
      ]);

      $image = $request->file('image');
      $file_path = '';
      if ($image !== null) {
        $file_extension = $image->getClientOriginalExtension();
        $dir = FileHelper::getFileDirName('images/slider');
        $file_name = FileHelper::getFileNewName();
        $image_name = $file_name . '.' . $file_extension;
        $file_path = $dir . '/' . $file_name . '.' . $file_extension;
        $image->move($dir, $image_name);
      }

      $slider = Slider::create([
        'title' => $request->title,
        'description' => $request->description,
        'url' => $request->url,
        'image_path' => $file_path,
      ]);

      return redirect(route('admin-sliders'));
    }



    public function postAdd(Request $request){
      $this->validate($request, [
        'title' => 'required|string|max:250',
        'image' => 'required|image',
        'content' => 'required|string|max:6000',
      ]);

      $image = $request->file('image');
      $file_path = '';
      if ($image !== null) {
        $file_extension = $image->getClientOriginalExtension();
        $dir = FileHelper::getFileDirName('images/post');
        $file_name = FileHelper::getFileNewName();
        $image_name = $file_name . '.' . $file_extension;
        $file_path = $dir . '/' . $file_name . '.' . $file_extension;
        $image->move($dir, $image_name);
      }

      $post = Post::create([
        'title' => $request->title,
        'content' => $request->get('content'),
        'image_path' => $file_path,
      ]);

      return redirect(route('admin-posts'));
    }



  public function postEditPage($id){
      $post = Post::find($id);
      return view('admin.edit_post', compact('post'));
  }



  public function postEdit(Request $request){
    $this->validate($request, [
      'id' => 'required|numeric',
      'title' => 'required|string|max:250',
      'image' => 'image',
      'content' => 'required|string|max:6000',
    ]);

    $post = Post::find($request->id);
    $file_path = $post->image_path;
    $image = $request->file('image');
    if ($image !== null) {
      $file_extension = $image->getClientOriginalExtension();
      $dir = FileHelper::getFileDirName('images/post');
      $file_name = FileHelper::getFileNewName();
      $image_name = $file_name . '.' . $file_extension;
      $file_path = $dir . '/' . $file_name . '.' . $file_extension;
      $image->move($dir, $image_name);
    }

    $post->title = $request->title;
    $post->content = $request->get('content');
    $post->image_path = $file_path;
    $post->save();

    return redirect(route('admin-posts'));
  }



  public function postRemove($id){
      $post = Post::find($id);
      $post->delete();
      return redirect(route('admin-posts'));
  }

  public function tagAdd(Request $request){
    $this->validate($request, [
      'name' => 'required|string|max:250',
      'url' => 'required|string|max:250',
      'id' => 'required|numeric',
    ]);

    $tag = Tag::create([
      'post_id' => $request->id,
      'name' => $request->name,
      'url' => $request->url,
    ]);

    return redirect(route('admin-post-edit-page', $request->id));
  }




}
