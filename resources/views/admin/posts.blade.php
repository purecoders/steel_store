<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.admin_head')
</head>
<body class="bg-light">
<!--NAV BAR-->

<!--HEADER-->
@include('include.admin_header')
<!--ADD Post-->
<section id="add-post">
    <div class="container" style="direction: rtl !important">
        <div class="d-flex py-3 mt-2">
            <hr>
            <h3 class="">اضافه کردن پست</h3>
            <hr>
        </div>
        <div class="row ">
            <div class="col-md-12 mt-1 " >
                <form action="{{route('admin-post-add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-2 col-form-label">عنوان</label>
                        <div class="col-sm-10">
                            <input name="title" type="text" class="form-control" id="postTitle"
                                   placeholder="عنوان دوره را وارد کنید..." required>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0 ">تصویر</legend>
                    <div class="col-sm-10 ">
                    <input type="file" name="image" accept="image/*" class="form-control-file" required/>
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 ">توضیحات </legend>
                            <div class="col-sm-10">
                                <textarea name="content" class="form-control" placeholder="محتوای پست..." required></textarea>
                            </div>
                        </div>
                    </div>




                      <div class="form-group">
                        <div class="">
                            <input type="submit" class="btn btn-success ml-auto mr-auto  mr-auto d-block " value="اضافه کردن پست" style="width: 200px;height: 50px; font-weight: 800;" >

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
<hr>
<hr>


<!--MANAGE POSTS-->
<section id="deletNav" class="mt-5">
    <div class="container-fluid  bg-light p-1 mb-5">
        <div class="d-flex pb-3 ">
            <hr>
            <h3 class="">مدیریت پست ها</h3>
            <hr>
        </div>
        <table class="table table-striped">
            <thead class="thead-inverse bg-dark text-white " >
            <tr>
                <th>#</th>
                <th>عنوان</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>

            @php($i = 0)
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$post->title}}</td>

                    <td>
                        <a href="{{route('admin-post-edit-page', $post->id)}}">
                            <button class="btn bg-success  text-white"> ویرایش</button>

                        </a>
                    </td>
                    <td>
                        <a>
                            {{--<button onclick="removePost({{route('admin-post-remove', $post->id)}})" class="btn bg-danger text-white"> حذف</button>--}}
                            <button onclick="removePost({{$post->id}})" class="btn bg-danger text-white"> حذف</button>
                        </a>
                    </td>

                </tr>
            @endforeach


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
<script>
  function removePost(id){
    if (confirm("َآیا میخواهید این پست را حذف کنید؟")) {
      window.location.href = "/admin-post-remove/" + id.toString();
    }
  }
</script>
</body>
</html>