<?php

namespace App\Http\Controllers;

use App\Info;
use App\Post;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{

  public function login(){
    return view('admin.login');
  }


  public function index(){
    $sliders = Slider::orderBy('id', 'desc')->get();
    $products = Product::orderBy('id', 'asc')->take(10)->get();
    $posts = Post::orderBy('id', 'desc')->take(3)->get();
    $infos = Info::all();

    $email = '';
    $phone = '';
    $address = '';
    $mobile = '';
    $mobile2 = '';
    foreach ($infos as $info){
      if($info->key == 'email') $email = $info->value;
      if($info->key == 'phone') $phone = $info->value;
      if($info->key == 'address') $address = $info->value;
      if($info->key == 'mobile') $mobile = $info->value;
      if($info->key == 'mobile2') $mobile2 = $info->value;
    }


    return view('site.index', compact(['sliders', 'products', 'posts', 'email', 'phone', 'address', 'mobile', 'mobile2']));
  }



  public function post($id){
    $posts = Post::orderBy('id', 'desc')->take(8)->get();
    $post1 = Post::find($id);
    $tags = $post1->tags;
    return view('site.article_details', compact(['posts', 'post1', 'tags']));
  }


  public function posts(){
    $posts = Post::orderBy('id', 'desc')->paginate(9);
    $posts1 = array();
    $posts2 = array();
    $posts3 = array();
    $i = 0;
    foreach ($posts as $post){
      $i++;
      if($i > 0 && $i <= 3) $posts1 [] = $post;
      else if($i > 3 && $i <= 6) $posts2 [] = $post;
      else if($i > 6 && $i <= 9) $posts3 [] = $post;
    }
    $links = $posts->links();
    return view('site.articles', compact(['links', 'posts1', 'posts2', 'posts3']));
  }


  public function products(){
    $products = Product::orderBy('id', 'asc')->get();
    return view('site.products', compact('products'));
  }


  public function calcPage(){
    $result1 = Session::get('result1');
    $result2 = Session::get('result2');
    $result3 = Session::get('result3');
    return view('site.calculation', compact(['result1', 'result2', 'result3']));
  }


  public function search(Request $request){
    $text = $request->text;
    $products = Product::where('din', 'like', "%$text%")
      ->orWhere('din_symbol', 'like', "%$text%")
      ->orWhere('name', 'like', "%$text%")
      ->orWhere('usage', 'like', "%$text%")
      ->get();

    return view('site.products', compact('products'));

  }





  public function calSteelShaft(Request $request){
    $this->validate($request, [
      'diagonal' => 'required|numeric|max:90000000|min:0',
      'lenght' => 'required|numeric|max:90000000|min:0'
    ]);

    $diagonal = $request->diagonal;
    $lenght = $request->lenght;
    $result1 = $diagonal * $diagonal * 0.00000617 * $lenght;
    return redirect(route('calc-page'))->with('result1', $result1);
  }

  public function calSteelSheet(Request $request){
    $this->validate($request, [
      'lenght' => 'required|numeric|max:90000000|min:0',
      'width' => 'required|numeric|max:90000000|min:0',
      'height' => 'required|numeric|max:90000000|min:0',
      ]);

    $lenght = $request->lenght;
    $width = $request->width;
    $height = $request->height;

    $result = $lenght * $width * $height * 0.00000785;

    return redirect(route('calc-page'))->with('result2', $result);
  }


}
