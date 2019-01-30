<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')

</head>
<body>

<div style="overflow-x: hidden">

    <!--TOP HEADER-->
@include('include.top_header')

<!--NAVIGATION SECTION-->
    <nav class="navbar navbar-expand-lg  text-white" >
        <form action="{{route('search')}}" method="post" style="width: 600px; " id="search-form" >
            @csrf
            <div class="input-group" >
              <span class="">
                  <button class="btn btn-default " style="background-color:#540004 " type="submit">
                    <i class="fa fa-search "></i>
                 </button>
              </span>
                <input type="text"  style="background-color: #540004" name="text" class=" text-white d-block" placeholder="جستجو براساس  نام و کد کالا..." id="search-button">
            </div>
        </form>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-toggle-down" style="color: #ffffff"  id="toggle-icon"> </span>
        </button>
        <div class="collapse navbar-collapse " style="direction: rtl !important; " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto " style="text-align: end">
                <li class="nav-item active ">
                    <a class="nav-link  active" style="" href="#">خانه <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#prices">اجناس</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link " href="#news-section">آخرین مطالب</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="#location">آدرس ما</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link  " href="{{route('calc-page')}}"> محاسبه وزن مواد</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- SHOWCASE SLIDER -->
    <section id="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @php($i=0)
                @foreach($sliders as $slider)
                    <li data-target="#myCarousel{{$slider->id}}" data-slide-to="0" class="@if($i == 0) active @endif "></li>
                    @php($i++)
                @endforeach
            </ol>



            <div class="carousel-inner">
                @php($i=0)
                @foreach($sliders as $slider)
                    @php($i++)
                    <div class="carousel-item carousel-image-1  @if($i==1) active @endif"  style="background:{{asset($slider->image_path)}}" >
                        <img src="{{asset($slider->image_path)}}" style="height: 100%; width: 100%;position: relative">
                        <div class="container">
                            <div class="carousel-caption  text-right mb-5 p-4"style="background: #00000070;
  color: white;
  border-radius: .25rem;">
                                <h1 class="display-3 text-center d-none d-sm-block" style="font-weight: 500;">{{$slider->title}}</h1>
                                <p class="lead pt-5 text-center "style="font-weight: 500;">{{$slider->description}}</p>
                                @if(!is_null($slider->url))
                                    <a href="{{$slider->url}}" class="btn btn-success btn-lg text-center" style="font-weight: 500">بیشتر</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach





            </div>





            <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <!-- PRICES TABLE -->
    <section id="prices" class="p-1">
        <div class="row ">
            <div class="col-md-4 ml-auto mr-auto text-center p-3">
                <h1 class="text-white" style="font-weight: 300;"> بخشی از کالاهای عرضه شده </h1>
            </div>
        </div>
        <div class="col-12 col-xl-8 m-auto">
            <div class="card" style="background-color: #f5bbbb">
                <div class="table-responsive ">
                    <table class="table table-striped table-bordered">
                        <thead class="text-white text-center">
                        <tr>
                            <th style="background: #82804b">کد</th>
                            <th style="background: #57415b">نماد</th>
                            <th style="background: #2b5833;min-width:100px">نام مصطلح </th>
                            <th style="background: #0a405a;min-width:100px">کاربرد</th>
                        </tr>
                        <thead>
                        <tbody class="text-center">

                        @foreach($products as $product)
                            <tr>
                                <td style="background: #d0ce7f">{{$product->din}}</td>
                                <td style="background: #a380a7">{{$product->din_symbol}}</td>
                                <td style="background: #6db77a">{{$product->name}}</td>
                                <td style="background: #0b87b7">{{$product->usage}}</td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="d-flex flex-row ">
            <a href="#location" id="fab" class="btn btn-success btn-lg ml-5 example-1" style="text-align: center;vertical-align: center;position: fixed;bottom: 0;z-index: 9000;margin-bottom: 5%;"><span class="fa fa-phone pt-2" id="logo"></span></a>
        </div>
        <div class="d-flex flex-row ml-3 ml-xl-5 mb-3 mt-2">
            <a href="{{route('products')}}" class="btn btn-lg text-white bg-light text-dark " style=" font-weight: 300"> همه کالا ها </a>
        </div>
    </section>

    <!--NEWS CARD -->
    <section class="details-card mt-4 bg-light py-5" id="news-section">
        <div class="row">
            <div class="col-md-4 ml-auto mr-auto text-center pb-5">
                <h1 class="text-dark" style="font-weight: 500;"> آخرین اخبار و مطالب  </h1>
            </div>
        </div>
        <div class="container" >
            <div class="row mb-5">

                @foreach($posts as $post)
                    <div class="col-md-4 col-sm-6 m-auto text-center">
                        <div class="card-content my-3">
                            <div class="card-img">
                                <img src="{{$post->image_path}}" alt="" class="">
                            </div>
                            <div class="card-desc">
                                <h3>{{$post->title}}</h3>
                                <p class="card-main-content">
                                    {{$post->content}}
                                </p>
                                <a href="{{route('post', $post->id)}}" class="btn-card">بیشتر</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="d-flex flex-row ml-5 mb-3">
            <a href="{{route('posts')}}" class="btn btn-lg text-white " style="background-color: #c1190b; font-weight: 300"> همه مطالب </a>
        </div>
    </section>



    <!--LOCATION SECTION -->
    <section id="location">
        <div class="container-fluid p-5">
            <div class="row ">
                <div class=" col-md-4  ml-auto mr-auto text-center py-5">

                    <h1 class="text-white" style="font-weight: 500;"> آدرس ما</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 pl-5 pb-3">
                    <iframe class="w-100 h-100" style="min-height:250px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d785.3364617462274!2d46.228920829221956!3d38.06232605463805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDAzJzQ0LjQiTiA0NsKwMTMnNDYuMSJF!5e0!3m2!1sen!2s!4v1548230745574"  frameborder="1" style=" border-radius:15px;border:#c1190b " allowfullscreen id="map"></iframe>

                </div>
                <div class="col-md-7 text-white" style="direction: rtl !important; text-align: start" id="address">

                    <h3 class="pt-3 ">
                        <i class="fa fa-location-arrow"></i>
                        نشانی :
                    </h3>
                    <p class="py-3 mr-3"style="font-weight:500;"> {{$address}}</p>
                    <h3 class="pt-3 ">
                        <i class="fa fa-phone"></i>
                        شماره های تماس :
                    </h3>
                    {{--<p class="py-3 mr-3"style="font-weight:500;">{{$phone}} , {{$mobile}} , {{$mobile2}} </p>--}}
                    <br>
                    <p class=" mr-3"style="font-weight:500;">{{$phone}} </p>
                    <p class="mr-3"style="font-weight:500;">{{$mobile}}  </p>
                    <p class="mr-3"style="font-weight:500;">{{$mobile2}}  </p>


                </div>
            </div>
            <!--<div id="googleMap" style="width:100%;height:400px;"></div>-->
        </div>

    </section>

    @include('include.footer')

</div>



<script>
  // handle links with @href started with '#' only
  $(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
      return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
  });
</script>
<script>
  detectMobileScreen()
  function detectMobileScreen() {

    if (window.innerWidth <= 800 && window.innerHeight <= 600){
      console.log("this is mobile screen")
      document.getElementById("fab").setAttribute('href', "tel:{{str_replace('-', '', $phone)}}");
      document.getElementById("logo").classList.remove("fa-map-marker");
      document.getElementById("logo").classList.add("fa-phone");
      document.getElementById("map").style.width = "230px";
      document.getElementById("map").style.height = "300px";
      document.getElementById("search-form").style.width = "250px";
      // document.getElementById("address").remove("d-none");
      // document.getElementById("address").remove("d-md-block");

      return true
    }else {
      console.log("this is Not mobile screen")
      document.getElementById("logo").classList.remove("fa-phone");
      document.getElementById("logo").classList.add("fa-map-marker");
      return false
    }
  }
</script>

@include('include.scripts')

</body>
</html>
