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


                <form action="{{route('admin-post-edit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input name="id" value="{{$post->id}}" type="hidden">
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">عنوان</label>
                        <div class="col-sm-10">
                            <input  name="title" type="text" class="form-control" id="postTitle"
                                   value="{{$post->title}}" placeholder="عنوان دوره را وارد کنید..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 ">تصویر</legend>
                            <div class="col-sm-10 ">
                                <input type="file" name="image" accept="image/*" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 ">توضیحات </legend>
                            <div class="col-sm-10">
                                <textarea name="content" class="form-control"
                                          placeholder="محتوای پست..." required>{{$post->content}}</textarea>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="">
                            <input type="submit" class="btn btn-success ml-auto mr-auto  mr-auto d-block " value="ثبت تغییرات" style="width: 200px;height: 50px; font-weight: 800;" >

                        </div>
                    </div>
                </form>





                    <form action="{{route('admin-tag-add')}}" method="post">
                        <div class="form-group row  ">
                           <label for="postTitle2" class="col-sm-2 col-form-label">کلمه کلیدی</label>
                        @csrf
                        <div class="col-sm-4">
                            <input name="name" type="text" class="form-control" id="postTitle2"
                                   placeholder=" کلمه کلیدی مرتبط با متن را وارد کنید..." required>
                        </div>
                        <div class="col-sm-4">
                            <input name="url" type="text" class="form-control"
                                   placeholder="لینک  مرتبط با کلمه کلیدی را وارد کنید..." required>
                        </div>
                        <input type="hidden" name="id" value="{{$post->id}}" >
                        <div class="col-sm-2">
                            <input type="submit" class="btn btn-success  " value="اضافه کردن کلمه " style=" font-weight: 300;" >
                        </div>

                        </div>
                    </form>



            </div>
        </div>

        <div class="container" style="alignment: right; direction: rtl !important;">
            <h6 class="p-2 text-dark " style="direction: rtl ; float: right ;" > تمام کلمات کلیدی   </h6>
            <div class="row key-words">
                <div class="col-md-12">
                    @foreach($post->tags as $tag)
                        <a class="p-1" href="{{$tag->url}}"> {{$tag->name}} </a>
                    @endforeach
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
</section>
<hr>
<hr>





@include('include.scripts')
</body>
</html>