<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')

</head>
<body class="bg-dark">

<div class="" style="overflow-x: hidden">

    @include('include.top_header')
    @include('include.nav')

    <section id="products-table">
        <div class="row ">
            <div class="col-md-4 ml-auto mr-auto text-center p-3">
                <h1 class="text-dark" style="font-weight: 300;"> بخشی از کالاهای عرضه شده </h1>
            </div>
        </div>
        <div class="container-fluid p-1 p-sm-5 mb-5" style="min-height:500px">
            <div class="card" style="background-color: #f5bbbb">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="text-white text-center">
                        <tr>
                            <th style="background: #82804b">کد</th>
                            <th style="background: #57415b">نماد</th>
                            <th style="background: #2b5833;min-width:50px">نام مصطلح  </th>
                            <th style="background: #0a405a;min-width:50px">کاربرد</th>
                        </tr>
                        <thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td style="background: #d0ce7f">{{$product->din}}</td>
                                <td style="background: #a380a7">{{$product->din_symbol}}</td>
                                <td style="background: #6db77a">{{$product->name}}</td>
                                <td style="background: #0b87b7">{{$product->usage}}</td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>






    @include('include.footer')


    <script>
      detectMobileScreen()
      function detectMobileScreen() {



        if (window.innerWidth <= 800 && window.innerHeight <= 600){
          console.log("this is mobile screen")
            @php
                $phone = \App\Info::where('key', '=', 'phone')->first()->value;
            @endphp
          document.getElementById("fab").setAttribute('href', "tel:{{str_replace('-', '', $phone)}}");
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
</div>
</body>
</html>
