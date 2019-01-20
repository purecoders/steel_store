<nav class="navbar navbar-expand-lg  text-white" >
    <form action="{{route('search')}}" method="post" style="width: 600px; "  >
        @csrf
        <div class="input-group" >
              <span class="">
                  <button class="btn btn-default " style="background-color:#540004 " type="submit">
                    <i class="fa fa-search "></i>
                 </button>
              </span>
            <input type="text"  style="background-color: #540004" name="text" class=" text-white d-block" placeholder="جستجو براساس  نام و کد کالا..." id="search-button">
        </div>
    </form>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-toggle-down" style="color: #ffffff"  id="toggle-icon"> </span>
    </button>
    <div class="collapse navbar-collapse " style="direction: rtl !important; " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto " style="text-align: end">

            @php($path = \Illuminate\Support\Facades\Request::path())

            <li class="nav-item active ">
                <a class="nav-link " style="" href="{{route('index')}}">خانه <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($path == 'products') active @endif" href="{{route('products')}}">تمامی کالاها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($path == 'posts') active @endif" href="{{route('posts')}}">همه مطالب</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link @if($path == 'calc-page') active @endif" href="{{route('calc-page')}}">محاسبه وزن</a>
            </li>




        </ul>

    </div>
</nav>