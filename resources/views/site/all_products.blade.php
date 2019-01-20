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
        <div class="container-fluid mb-5">
            <table class="table-striped">
                <thead class="text-white">
                <tr>
                    <th>DIN</th>
                    <th>DIN سیمبل</th>
                    <th>نام مصطلح در بازار ایران</th>
                    <th>کاربرد</th>
                </tr>
                <thead>
                <tbody>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                <tr>
                    <td>CES-9000</td>
                    <td>50mt</td>
                    <td>9mm</td>
                    <td>1/2"</td>

                </tr>
                </tbody>
            </table>
        </div>
    </section>









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
</div>
</body>
</html>
