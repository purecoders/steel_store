<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.admin_head')
</head>
<body class="bg-light"style="">
<!--HEADER-->
@include('include.admin_header')

<!--POSTS-->
<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center bg-primary text-white mb-3 mt-5">
                    <div class="card-body">
                        <h3 class="pb-3">مدیریت پست ها</h3>
                        <h1 class="display-4">
                            <i class="fa fa-pencil"></i>
                        </h1>
                        <a href="{{route('admin-posts')}}" class="btn btn-outline-light btn-lg">مشاهده</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-success text-white mb-3 mt-5">
                    <div class="card-body">
                        <h3 class="pb-3"> مدیریت اسلایدر</h3>
                        <h1 class="display-4">
                            <i class="fa fa-folder-open-o"></i>
                        </h1>
                        <a href="{{route('admin-sliders')}}" class="btn btn-outline-light btn-lg">مشاهده</a>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-center bg-danger text-white mb-3 mt-5">
                    <div class="card-body">
                        <h3 class="pb-3">اضافه کردن کالا و آپدیت</h3>
                        <h1 class="display-4">
                            <i class="fa fa-product-hunt"></i>
                        </h1>
                        <a href="{{route('admin-products')}}" class="btn btn-outline-light btn-lg">مشاهده</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="changePass" class="mb-5">
    <div class="container" style="direction: rtl !important">
        <hr>


        <div class="d-flex flex-row-reverse justify-content-end  ">
            <h4 class="flex-item text-dark"> تغییر کلمه عبور</h4>
        </div>

        <div class="row">
            <div class="col-md-6 mt-3">
                <form action="{{route('admin-change-password')}}" method="post">
                    @csrf
                    <div class="form-group row  ">
                        <label  class="col-sm-4 col-form-label" >رمز فعلی</label>
                        <div class="col-sm-8">
                            <input name="old_password" type="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label  class="col-sm-4 col-form-label" >رمز جدید</label>
                        <div class="col-sm-8">
                            <input name="new_password1" type="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label  class="col-sm-4 col-form-label" >تکرار رمز جدید</label>
                        <div class="col-sm-8">
                            <input name="new_password2" type="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mr-auto">
                            <button type="submit" class="btn btn-success w-50">تایید</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <div class="d-flex flex-row-reverse justify-content-end ">
            <h4 class="flex-item text-dark"> تغییر اطلاعات سایت</h4>
        </div>
        <div class="row">
            <div class="col-md-6 mt-3">

                <form action="{{route('admin-change-site-info')}}" method="post">
                    @csrf
                    <div class="form-group row  ">
                        <label class="col-sm-4 col-form-label" >آدرس :</label>
                        <div class="col-sm-8">
                            <input name="address" type="text" class="form-control" value="{{$address}}" required>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label class="col-sm-4 col-form-label" > شماره تلفن ثابت :</label>
                        <div class="col-sm-8">
                            <input name="phone" type="text" class="form-control" value="{{$phone}}" required>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label class="col-sm-4 col-form-label" > شماره تلفن موبایل :</label>
                        <div class="col-sm-8">
                            <input name="mobile" type="text" class="form-control" value="{{$mobile}}" required>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label class="col-sm-4 col-form-label" > ایمیل   :</label>
                        <div class="col-sm-8">
                            <input name="email" type="text" class="form-control" value="{{$email}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mr-auto">
                            <button type="submit"  class="btn btn-success w-50">تایید</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</section>

@include('include.scripts')

</body>
</html>
