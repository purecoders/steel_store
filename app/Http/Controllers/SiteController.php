<?php

namespace App\Http\Controllers;

use App\Info;
use App\Post;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{

  public function index(){
    $sliders = Slider::orderBy('id', 'desc')->get();
    $products = Product::orderBy('id', 'desc')->take(10)->get();
    $posts = Post::orderBy('id', 'desc')->take(3)->get();
    $infos = Info::all();

    $email = '';
    $phone = '';
    $address = '';
    foreach ($infos as $info){
      if($info->key == 'email') $email = $info->value;
      if($info->key == 'phone') $phone = $info->value;
      if($info->key == 'address') $address = $info->value;
    }


    return view('site.index', compact(['sliders', 'products', 'posts', 'email', 'phone', 'address']));
  }



  public function post($id){
    $posts = Post::orderBy('id', 'desc')->take(8)->get();
    $post1 = Post::find($id);
    $tags = $post1->tags;
    return view('site.article_details', compact(['posts', 'post1', 'tags']));
  }


  public function posts(){
    $posts = Post::orderBy('id', 'desc')->paginate(9);
    return view('site.articles', compact('posts'));
  }

}
