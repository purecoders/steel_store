<div class="top-header">
    <div class="container-fluid">
        @php
            $infos = \App\Info::all();
            $email = '';
            $phone = '';
            $address = '';
            foreach ($infos as $info){
                if($info->key == 'email') $email = $info->value;
                if($info->key == 'phone') $phone = $info->value;
                if($info->key == 'address') $address = $info->value;
            }
        @endphp
        <div class="d-flex flex-row justify-content-between p-3" style=";color: #ffffff; font-weight: 900">
            <div>
           <span class="d-none d-md-block">
            <span class="call-no ">{{$email}}</span>: ایمیل
          </span>
            </div>

            <div>
          <span class="d-none d-md-block">
            <i class="fa fa-phone-square"></i>
            <span class="call-no" >{{$phone}}</span> : شماره تماس
          </span>
            </div>

            <div style="font-family: Vazir">
          <span>
            آدرس :
            <span class="call-no">{{$address}}</span>
          </span>
            </div>
        </div>
    </div>
</div>
