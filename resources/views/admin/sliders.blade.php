<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.admin_head')
</head>


<body class="bg-light">

<!--HEADER-->
@include('include.admin_header')


<!--ADD SLIDE-->
<section id="add-product">
    <div class="container" style="direction: rtl !important">
        <div class="d-flex py-3 mt-2">
            <hr>
            <h3 class="">اضافه کردن اسلاید</h3>
            <hr>
        </div>
        <div class="row ">
            <div class="col-md-12 mt-1 " >
                <form>
                    <div class="form-group row  ">
                        <legend for="postTitle" class="col-sm-2 col-form-label">عنوان اسلاید </legend>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postTitle">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                         <legend class="col-form-label col-sm-2 pt-0 ">تصویر اسلاید</legend>
                         <div class="col-sm-10 ">
                            <input type="file" name="" accept="image/*" class="form-control-file" placeholder="با کیفیت بالا"/>
                         </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 ">توضیحات مختصر </legend>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="جهت نمایش در صفحه اصلی"></inputty>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 ">لینک اسلاید</legend>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="در صورت وجود">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <input type="submit" class="btn btn-success ml-auto mr-auto  mr-auto d-block " value="ثبت" style="width: 200px;height: 50px; font-weight: 800;" >

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
<hr>
<hr>
<!--REMOVE SLIDE-->
<section id="deletNav" class="mt-5">
    <div class="container  bg-light p-1">
        <div class="d-flex pb-3 ">
            <hr>
            <h3 class="">حذف اسلاید های قبلی</h3>
            <hr>
        </div>
        <table class="table table-striped">
            <thead class="thead-inverse bg-dark text-white " >
            <tr>
                <th>#</th>
                <th>نام</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>علی</td>
                <td>
                    <button class="btn bg-danger text-white" type="button" data-toggle="modal" data-target="#Modal"> حذف</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>محسن</td>
                <td>
                    <button class="btn bg-danger text-white" type="button" data-toggle="modal" data-target="#Modal"> حذف</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>مریم</td>
                <td>
                    <button class="btn bg-danger text-white" type="button" data-toggle="modal" data-target="#Modal"> حذف</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- MODAL-->
<div class="modal fade rtl" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title ml-auto py-" id="exampleModalLabel">آیا مطمئن هستید؟</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-lg" data-dismiss="modal">بله</button>
                <button type="submit" class="btn btn-danger btn-lg" data-dismiss="modal">خیر</button>

            </div>
        </div>
    </div>
</div>



@include('include.scripts')
</body>
</html>