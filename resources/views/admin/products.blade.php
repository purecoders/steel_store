<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.admin_head')
</head>
<body class="bg-light" style="">
<!--NAV BAR-->

<!--HEADER-->
@include('include.admin_header')

<section id="add-product">
    <div class="container" style="direction: rtl !important">
        <div class="d-flex py-3 mt-2">
            <hr>
            <h3 class="">اضافه کردن کالا</h3>
            <hr>
        </div>
        <div class="row ">
            <div class="col-md-12 mt-1 " >
                <form action="{{route('admin-product-add')}}" method="post">
                    @csrf
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">DIN</label>
                        <div class="col-sm-10">
                            <input name="din" type="text" class="form-control" id="postTitle" required>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">سیمبل DIN </label>
                        <div class="col-sm-10">
                            <input name="din_symbol" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">نام مصطلح در بازار ایران</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">کاربرد</label>
                        <div class="col-sm-10">
                            <input name="usage" type="text" class="form-control">
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


<!--DELETE NABS-->
<section id="deletNav" class="mt-5">
    <div class="container-fluid  bg-light p-1">
        <div class="d-flex pb-3 ">
            <hr>
            <h3 class="">حذف و آپدیت کالاهای موجود</h3>
            <hr>
        </div>
        <table class="table table-striped">
            <thead class="thead-inverse bg-dark text-white " >
            <tr>
                <th>#</th>
                <th>DIN</th>
                <th>سیمبل DIN</th>
                <th>نام مصطلح در بازار ایران</th>
                <th>کاربرد</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$product->din}}</td>
                <td>{{$product->din_symbol}}</td>
                <td>{{$product->name}}</td>
                <td >{{$product->usage}}</td>

                <td>
                    <a href="{{route('admin-product-edit-page', $product->id)}}">
                        <button class="btn bg-success  text-white" type="button" > ویرایش</button>
                    </a>
                    <a href="{{route('admin-product-remove', $product->id)}}">
                        <button class="btn bg-danger text-white" type="button" data-toggle="modal" > حذف</button>
                    </a>
                </td>

            </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</section>

<!--MESSAGE MODAL-->
<div class="modal fade rtl" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title ml-auto" id="exampleModalLabel"> پیام کاربر</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <p class="user-messages" >
                    بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی
                    برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر
                    چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و
                    بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از اینکه
                    متن در آن قرار گیرد چگونه  </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>

            </div>
        </div>
    </div>
</div>



@include('include.scripts')
</body>
</html>