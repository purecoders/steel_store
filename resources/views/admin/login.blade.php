<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود به پنل مدیریت</title>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<!--ENTERY-->
<section id="Entery">
    <div class="container" >
        <div class="row">
            <div class="col-md-5 ml-auto mr-auto " style=" ">
                <div class="card mt-3 py-2"style="text-align: right; border: 1px solid red;">
                    <div class="card-title bg-danger " style="text-align: center; ;">
                        <h5 class=" text-center text-white my-4"> ورود به سیستم </h5>
                    </div>
                    <div class="card-body" style="" >

                        <form action="{{route('login')}}" method="post" style="direction: rtl !important;">
                            @csrf
                            <div class="form-group row">
                                <label for="postTitle" class="col-sm-3 justify-content-center pt-2 " style="font-weight: bold; " >  نام کاربری  :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="postTitle"
                                           placeholder="نام کاربری خود را وارد کنید..."
                                    name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="postTitle" class="col-sm-3 justify-content-center pt-2 " style="font-weight: bold; " >  رمز عبور  :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="postTitle"
                                           placeholder="رمز عبور خود را وارد کنید..."
                                    name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <input type="submit" value="ورود" class="btn btn-success mr-auto ml-3" style="font-size: 1.09rem;"/>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@include('include.scripts')

</body>
</html>





