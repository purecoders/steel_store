<header id="main-header" class="py-3 bg-primary text-white "style="text-align: end">
    <div class="container">
        <div class="d-flex flex-row justify-content-between">
        <span>
            <a href="{{route('index')}}" class="mb-2" style="text-decoration: none; color:#1b1e21;"> <h5 class=" ">بازگشت به صفحه اصلی سایت</h5> </a>

            <form class="mt-3" style="text-decoration: none;color:#fff4f4;" action="{{route('logout')}}" method="post">
                <h5><input  class="mt-3 btn-danger" value="خروج" type="submit" style="text-decoration: none;color:#fff4f4;"/></h5>
            </form>
        </span>
            <h2 class="rtl"> <a style="color: white; text-decoration: none" href="{{route('admin-dashboard')}}"> داشبورد  <i class="fa fa-gear"></i></a></h2>
        </div>


    </div>
</header>