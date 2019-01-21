<?php

namespace App\Http\Controllers;

use App\Info;
use App\Post;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{

  public function login(){
    return view('admin.login');
  }


  public function index(){
    $sliders = Slider::orderBy('id', 'desc')->get();
    $products = Product::orderBy('id', 'desc')->take(10)->get();
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
    $products = Product::orderBy('id', 'desc')->get();
    return view('site.products', compact('products'));
  }


  public function calcPage(){
    return view('site.calculation');
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
}
