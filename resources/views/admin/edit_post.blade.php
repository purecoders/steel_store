<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.admin_head')
</head>
<body class="bg-light">
<!--NAV BAR-->

<!--HEADER-->
@include('include.admin_header')

<!--EDIT Post-->
<section id="edit-post">
    <div class="container" style="direction: rtl !important">
        <div class="d-flex py-3 mt-2">
            <hr>
            <h3 class="">ویرایش پست</h3>
            <hr>
        </div>
        <div class="row " id="edit-posts">
            <div class="col-md-12 mt-1 " >
                <form>
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">عنوان</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle"
                                   placeholder="عنوان دوره را وارد کنید...">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 ">تصویر</legend>
                            <div class="col-sm-10 ">
                                <input type="file" name="" accept="image/*" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 ">توضیحات </legend>
                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="محتوای پست..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="postTitle2" class="col-sm-2 col-form-label">کلمه کلیدی</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="postTitle2"
                                   placeholder=" کلمه کلیدی مرتبط با متن را وارد کنید...">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"
                                   placeholder="لینک  مرتبط با کلمه کلیدی را وارد کنید...">
                        </div>
                        <div class="col-sm-2">
                            <input type="submit" class="btn btn-success  " value="اضافه کردن کلمه " style=" font-weight: 300;" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <input type="submit" class="btn btn-success ml-auto mr-auto  mr-auto d-block " value="ثبت تغییرات" style="width: 200px;height: 50px; font-weight: 800;" >

                        </div>
                    </div>


                </form>
            </div>
        </div>
        <div class="container" style="alignment: right; direction: rtl !important;">
            <h6 class="p-2 text-dark " style="direction: rtl ; float: right ;" > تمام کلمات کلیدی   </h6>
            <div class="row key-words">
                <div class="col-md-12">
                    <a href="#"> آهن </a>
                    <a href="#"> فولاد </a>
                    <a href="#"> تبریز استیل </a>
                    <a href="#"> تبریز فولاد </a>
                    <a href="#"> فولاد </a>
                    <a href="#"> آهن </a>
                    <a href="#"> فولاد </a>
                    <a href="#"> تبریز استیل </a>
                    <a href="#"> تبریز فولاد </a>
                    <a href="#"> فولاد </a>
                    <a href="#" class="mr-3"> فولاد </a>
                    <a href="#"> تبریز استیل </a>
                    <a href="#"> تبریز فولاد </a>
                    <a href="#"> فولاد </a>
                    <a href="#"> آهن </a>
                    <a href="#"> فولاد </a>
                    <a href="#"> تبریز استیل </a>
                    <a href="#"> تبریز فولاد </a>
                    <a href="#"> فولاد </a>
                    <a href="#" class="mr-3"> فولاد </a>

                    <a href="#"> تبریز استیل </a>
                    <a href="#"> تبریز فولاد </a>
                    <a href="#"> فولاد </a>
                    <a href="#"> آهن </a>
                    <a href="#"> فولاد </a>
                    <a href="#"> تبریز استیل </a>
                    <a href="#"> تبریز فولاد </a>
                    <a href="#"> فولاد </a>
                    <a href="#" class="mr-3"> فولاد </a>


                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<hr>





@include('include.scripts')
</body>
</html>