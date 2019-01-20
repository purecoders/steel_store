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


                @foreach($posts as $post)
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


            {{--<div class="col-md-4">--}}
                {{--<div class="card-content">--}}
                    {{--<div class="card-img">--}}
                        {{--<img src="img/round_steel_bar.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="card-desc">--}}
                        {{--<h3>عنوان متن</h3>--}}
                        {{--<p class="card-main-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                            {{--voluptas totam</p>--}}
                        {{--<a href="Article Details.html" class="btn-card"  style="background-color: #c1190b">بیشتر</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<div class="card-content">--}}
                    {{--<div class="card-img">--}}
                        {{--<img src="img/round_steel_bar.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="card-desc">--}}
                        {{--<h3>عنوان متن</h3>--}}
                        {{--<p class="card-main-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                            {{--voluptas totam dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                            {{--voluptas totamdolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                            {{--voluptas totam</p>--}}
                        {{--<a href="Article Details.html" class="btn-card"  style="background-color: #c1190b">بیشتر</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
            {{--<div class="row mb-5">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card-content">--}}
                        {{--<div class="card-img">--}}
                            {{--<img src="img/image3.jpg" alt="">--}}

                        {{--</div>--}}
                        {{--<div class="card-desc">--}}
                            {{--<h3>عنوان متن</h3>--}}
                            {{--<p class="card-main-content">icing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totam</p>--}}
                            {{--<a href="Article Details.html" class="btn-card" style="background-color: #c1190b">بیشتر</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card-content">--}}
                        {{--<div class="card-img">--}}
                            {{--<img src="img/round_steel_bar.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="card-desc">--}}
                            {{--<h3>عنوان متن</h3>--}}
                            {{--<p class="card-main-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totam</p>--}}
                            {{--<a href="Article Details.html" class="btn-card"  style="background-color: #c1190b">بیشتر</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card-content">--}}
                        {{--<div class="card-img">--}}
                            {{--<img src="img/round_steel_bar.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="card-desc">--}}
                            {{--<h3>عنوان متن</h3>--}}
                            {{--<p class="card-main-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totam dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totamdolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totam</p>--}}
                            {{--<a href="Article Details.html" class="btn-card"  style="background-color: #c1190b">بیشتر</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row mb-5">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card-content">--}}
                        {{--<div class="card-img">--}}
                            {{--<img src="img/image3.jpg" alt="">--}}

                        {{--</div>--}}
                        {{--<div class="card-desc">--}}
                            {{--<h3>عنوان متن</h3>--}}
                            {{--<p class="card-main-content">icing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totam</p>--}}
                            {{--<a href="Article Details.html" class="btn-card" style="background-color: #c1190b">بیشتر</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card-content">--}}
                        {{--<div class="card-img">--}}
                            {{--<img src="img/round_steel_bar.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="card-desc">--}}
                            {{--<h3>عنوان متن</h3>--}}
                            {{--<p class="card-main-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totam</p>--}}
                            {{--<a href="Article Details.html" class="btn-card"  style="background-color: #c1190b">بیشتر</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card-content">--}}
                        {{--<div class="card-img">--}}
                            {{--<img src="img/round_steel_bar.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="card-desc">--}}
                            {{--<h3>عنوان متن</h3>--}}
                            {{--<p class="card-main-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totam dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totamdolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                                {{--voluptas totam</p>--}}
                            {{--<a href="Article Details.html" class="btn-card"  style="background-color: #c1190b">بیشتر</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>








    <script>
        detectMobileScreen()
        function detectMobileScreen() {

            if (window.innerWidth <= 800 && window.innerHeight <= 600){
                console.log("this is mobile screen")
                document.getElementById("fab").setAttribute('href', "tel:04134478308");
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
