<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')

</head>
<body>

<div style="overflow-x: hidden">

    <!--TOP HEADER-->
@include('include.top_header')
    <!--NAVIGATION SECTION-->
@include('include.nav')

    <!--MAIN CONTENT-->
    <section id="calculator">
        <div class="container my-5">
            <div class="row" id="calculate-cards">


                <div class="col-lg-4 col-md-6 ">
                    <div class="card text-center bg-primary text-white mb-3 mt-5">
                        <div class="card-body">
                            <h3 class="pb-3">محاسبه وزن شفت فولادی</h3>
                            <div class="divider mb-3"></div>


                            <form action="{{route('cal-steel-shaft')}}" method="post" style="direction: rtl !important;">
                                @csrf
                                <div class="form-group row ">
                                    <label for="postTitle1" class="col-sm-5 col-form-label">قطر  :</label>
                                    <div class="col-sm-7">
                                        <input name="diagonal" type="number" step="any" class="form-control" required id="postTitle1"
                                               placeholder="بر حسب میلی متر">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="postTitle2" class="col-sm-5 col-form-label">طول :</label>
                                    <div class="col-sm-7">
                                        <input name="lenght" type="number" step="any" class="form-control" required id="postTitle2"
                                               placeholder="بر حسب میلی متر">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 align-items-center text-center">
                                        <button type="submit" class="btn btn-lg text-white bg-success example-2"> محاسبه </button>
                                    </div>
                                </div>
                            </form>



                        </div>
                        <div class="card-footer bg-light">
                            <h5 class="text-dark" style="text-align: right"> @if(!is_null($result1))  {{$result1}}   @endif     : (وزن (کیلوگرم </h5>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 ">
                    <div class="card text-center bg-primary text-white mb-3 mt-5">
                        <div class="card-body">
                            <h3 class="pb-3">محاسبه وزن ورق فولادی</h3>
                            <div class="divider mb-3"></div>

                            <form action="{{route('cal-steel-sheet')}}" method="post" style="direction: rtl !important;">
                                @csrf
                                <div class="form-group row ">
                                    <label for="postTitle3" class="col-sm-5 col-form-label">طول :</label>
                                    <div class="col-sm-7">
                                        <input name="lenght" type="number" step="any" class="form-control" required id="postTitle3"
                                               placeholder="به میلی متر">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="postTitle3" class="col-sm-5 col-form-label">عرض :</label>
                                    <div class="col-sm-7">
                                        <input name="width" type="number" step="any" class="form-control" required id="postTitle3"
                                               placeholder="به میلی متر">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="postTitle4" class="col-sm-5 col-form-label">ارتفاع :</label>
                                    <div class="col-sm-7">
                                        <input name="height" type="number" step="any" class="form-control" required id="postTitle4"
                                               placeholder="به میلی متر">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 align-items-center text-center">
                                        <button type="submit" class="btn btn-lg text-white bg-success example-2"> محاسبه </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="card-footer bg-light">
                            <h5 class="text-dark" style="text-align: right"> @if(!is_null($result2))  {{$result2}}   @endif     : (وزن (کیلوگرم </h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 d-none">
                    <div class="card text-center bg-primary text-white mb-3 mt-5">
                        <div class="card-body">
                            <h3 class="pb-3">محاسبه نوع سوم</h3>
                            <div class="divider mb-3"></div>
                            <form style="direction: rtl !important;">
                                <div class="form-group row ">
                                    <label for="postTitle5" class="col-sm-5 col-form-label">مقدار اول :</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required id="postTitle5"
                                               placeholder="به کیلوگرم">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="postTitle6" class="col-sm-5 col-form-label">مقدار اول :</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required id="postTitle6"
                                               placeholder="به کیلوگرم">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 align-items-center text-center">
                                        <button type="submit" class="btn btn-lg text-white bg-success example-2"> محاسبه </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="card-footer bg-light">
                            <h5 class="text-dark" style="text-align: right">: نتیجه</h5>
                        </div>

                    </div>
                </div>
            </div>


            </div>
    </section>

    <!--footer SECTION -->
   @include('include.footer')
</div>



<script>
    // handle links with @href started with '#' only
    $(document).on('click', 'a[href^="#"]', function(e) {
        // target element id
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $id.offset().top;

        // animated top scrolling
        $('body, html').animate({scrollTop: pos});
    });
</script>
<script>
    detectMobileScreen()
    function detectMobileScreen() {

        if (window.innerWidth <= 800 && window.innerHeight <= 600){
            console.log("this is mobile screen")
            document.getElementById("fab").setAttribute('href', "tel:04134478308");
            document.getElementById("logo").classList.remove("fa-map-marker");
            document.getElementById("logo").classList.add("fa-phone");
            document.getElementById("map").style.width = "250px";
            document.getElementById("map").style.height = "300px";
            // document.getElementById("address").remove("d-none");
            // document.getElementById("address").remove("d-md-block");

            return true
        }else {
            console.log("this is Not mobile screen")
            document.getElementById("logo").classList.remove("fa-phone");
            document.getElementById("logo").classList.add("fa-map-marker");
            return false
        }
    }
</script>
@include('include.scripts')

</body>
</html>
