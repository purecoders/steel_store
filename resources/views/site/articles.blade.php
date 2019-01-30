<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')

</head>
    <body class="bg-light">

<div class="" style="overflow-x: hidden">

@include('include.top_header')

@include('include.nav')

    <!--CARDS SECTION-->

    <section class="details-card mt-4 py-5 bg-light" id="card-section">
        <div class="container">
            <div class="row mb-5">


                @foreach($posts1 as $post)
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="{{$post->image_path}}" alt="">

                    </div>
                    <div class="card-desc">
                        <h3>{{$post->title}}</h3>
                        <p class="card-main-content">
                            {{$post->content}}
                        </p>
                        <a href="{{route('post', $post->id)}}" class="btn-card" style="background-color: #c1190b">بیشتر</a>
                    </div>
                </div>
            </div>

                @endforeach



        </div>
            <div class="row mb-5">
                @foreach($posts2 as $post)
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="{{$post->image_path}}" alt="">

                            </div>
                            <div class="card-desc">
                                <h3>{{$post->title}}</h3>
                                <p class="card-main-content">
                                    {{$post->content}}
                                </p>
                                <a href="{{route('post', $post->id)}}" class="btn-card" style="background-color: #c1190b">بیشتر</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

            <div class="row mb-5">
                @foreach($posts3 as $post)
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="{{$post->image_path}}" alt="">

                            </div>
                            <div class="card-desc">
                                <h3>{{$post->title}}</h3>
                                <p class="card-main-content">
                                    {{$post->content}}
                                </p>
                                <a href="{{route('post', $post->id)}}" class="btn-card" style="background-color: #c1190b">بیشتر</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

    <div class="container" >
        <div class="d-flex align-items-center">
            <div class="flex-item text-center ml-auto mr-auto" style="">
                <nav aria-label="Page navigation example"  >
                    <ul class="pagination" >
                        {{$links}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>





@include('include.footer')


    <script>
        detectMobileScreen()
        function detectMobileScreen() {

            if (window.innerWidth <= 800 && window.innerHeight <= 600){
                console.log("this is mobile screen")
                @php
                    $phone = \App\Info::where('key', '=', 'phone')->first()->value;
                @endphp
                document.getElementById("fab").setAttribute('href', "tel:{{str_replace('-', '', $phone)}}");
                document.getElementById("logo").classList.remove("fa-map-marker");
                document.getElementById("logo").classList.add("fa-phone");
                document.getElementById("map").style.width = "250px";
                document.getElementById("map").style.height = "300px";
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
</div>
    </body>
</html>
