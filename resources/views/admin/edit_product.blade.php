<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.admin_head')
</head>
<body class="bg-light">
<!--NAV BAR-->

<!--HEADER-->
@include('include.admin_header')

<section id="add-product">
    <div class="container" style="direction: rtl !important">
        <div class="d-flex py-3 mt-2">
            <hr>
            <h3 class="">ویرایش اطلاعات کالا</h3>
            <hr>
        </div>
        <div class="row ">
            <div class="col-md-12 mt-1 " >
                <form action="{{route('admin-product-edit')}}" method="post">
                    @csrf
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">DIN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle"
                                   value="{{$product->din}}" name="din" required>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">سیمبل DIN </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle"
                                   value="{{$product->din_symbol}}" name="din_symbol" required>
                        </div>
                    </div>

                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">نام مصطلح در بازار ایران</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle"
                                   value="{{$product->name}}" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">کاربرد</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle"
                                   value="{{$product->usage}}" name="usage">
                        </div>
                    </div>

                    <input type="hidden" value="{{$product->id}}" name="id">

                    <div class="form-group">
                        <div class="">
                            <input type="submit" class="btn btn-success ml-auto mr-auto  mr-auto d-block " value=" ثبت تغییرات" style="width: 200px;height: 50px; font-weight: 800;" >

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
<hr>
<hr>





@include('include.scripts')
</body>
</html>