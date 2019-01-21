<!DOCTYPE html>
<html lang="en">
<head>
   @include('include.head')

</head>
<body class="bg-light" style="overflow-x: hidden">

   @include('include.top_header')
   @include('include.nav')

    <!--MAIN CONTENT-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-4 pr-0 d-none d-md-block" id="news">
                <div class="container-news text-dark" >
                    <h6 class="pt-3" style="text-align: end">آخرین عناوین و مطالب</h6>
                    <div class="divider"></div>
                    <ul class="d-flex flex-column nav-list pt-2 mb-0" style=" text-align: end">


                        @foreach($posts as $post)
                        <li class="my-2">
                            <a href="{{route('post', $post->id)}}" >
                                {{$post->title}}
                            </a>
                        </li>
                        @endforeach

                    </ul>

                </div>

            </div>



            @php($p_date = new \App\Http\Controllers\PersianDate())
            <div class="col-md-8 p-4" id="content">
                <div class="container-content">
                    <img src="{{asset($post1->image_path)}}" alt="" class="img-fluid p-3">
                    <div class="d-flex flex-row justify-content-between p-3">
                        <h6 class="">
                            {{$p_date->to_date($post1->created_at, 'Y/m/d')}}
                        </h6>
                        <h3 class="p-3">
                            {{$post1->title}}
                        </h3>
                    </div>
                    <p class="p-3">
                        {{$post1->content}}
                    </p>

                    <div class="divider my-4 "></div>
                    <h6 class="p-2 text-muted ">: کلمات کلیدی   </h6>
                    <div class="row key-words">
                        <div class="col-md-12">
                            @foreach($tags as $tag)
                            <a class="p-1" href="{{$tag->url}}"> {{$tag->name}} </a>
                            @endforeach
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer SECTION -->
   @include('include.footer')


   @include('include.scripts')
</body>
</html>
