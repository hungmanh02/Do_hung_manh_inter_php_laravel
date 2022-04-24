<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đầm Sen Park</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
</head>

<body class="home bg">
    <div class="main">
        <div class="frame">
            {{ $cart_event=Cart::content(); }}
            
            <div class="content-wraper">
                
                <img class="thanhtoan-text" src="{{ asset('assets/images/thanh-toan.png') }}">
                
               <div class="frame-tt">
                <img class="votay" src="{{ asset('assets/images/votay.png') }}">
                   
                   <div class="group-1">
                        <img class="votay" src="{{ asset('assets/images/votay.png') }}">
                        <img  src="{{ asset('assets/images/khung-1.png') }}">
                        <img class="vecong" src="{{ asset('assets/images/vecong.png') }}">
                        <div class="form-thanhtoan-ve">
                            @foreach ( $cart_event as $c_event )
                                
                            
                            <div class="email-thanhtoan">
                                <label for="" class="email-thanhtoan-label">Email</label>
                                    <input class="frame12" type="text"  value="{{ $c_event->options->email }}">
                            </div>
                            <div class="dienthoai-thanhtoan">
                                <label for="" class="dienthoai-thanhtoan-label">Điện thoại</label>
                                    <input class="frame11-thanhtoan" type="text"  value="{{ $c_event->options->so_dien_thoai }}">
                            </div>
                            <div class="lienhe-thanhtoan">
                                <label for="" class="lienhe-thanhtoan-label">Thông tin liên hệ</label>
                                    <input class="frame10" type="text"  value="{{ $c_event->options->ho_ten }}">
                            </div>
                            <div class="ngaysudung-thanhtoan">
                                <label for="" class="lienhe-thanhtoan-label">Ngày sự dụng</label>
                                    <input class="frame9" type="date" value="{{ $c_event->options->date }}" >
                            </div>
                            <div class="soluong-thanhtoan">
                                <label for="" class="lienhe-thanhtoan-label">Số lượng</label>
                                <input class="frame41" type="text"  value="{{ $c_event->qty }}"> 
                                    
                            </div>
                            <div class="sotien-thanhtoan">
                                <label for="" class="lienhe-thanhtoan-label">Số tiền thanh toán</label>
                                    <input class="frame5-thanhtoan" type="text" value="{{Cart::priceTotal()  }}" >
                            </div>
                            @endforeach
                        </div>
                    
                     </div>
                   
                    <div class="vector-tt">
                        <img  class="khung-2" src="{{ asset('assets/images/khung-2.png') }}">
                    </div>
                    
                   <div class="group-2">  
                    <img  src="{{ asset('assets/images/khung-3.png') }}">
                    <img class="thongtinthanhtoan" src="{{ asset('assets/images/g_thanhtoan.png') }}">
                    <div class="frame42">
                    <form class="form-thanhtoan" action="{{ URL::to('/save-cart') }}">
                           
                        
                            <div class="sotienthanhtoan">
                           
                                <label for="" class="sothe">Số thẻ</label>
                                <input class="frame5" type="text">
                                
                            </div>
                            <div class="sotienthanhtoan">
    
                                <label for="" class="hotenchuthe">Họ tên chủ thẻ</label>
                                <input class="frame5" type="text">
                            </div>
                            <div class="sotienthanhtoan">
                                <label for="" class="ngayhethan">Ngày hết hạn</label>
                                <div class="frame43">
                                   
                                        <input class="frame-ngay" type="date" placeholder="Ngày sử dụng"  style="line-height: 45px;">
                                    
                                    
                                    <a href="#" class="btn-date1"></a>
                                </div>
                                
                            </div>
                            <div class="sotienthanhtoan">
    
                                <label for="" class="hotenchuthe">CVV/CVC</label>
                                <input class="frame5" type="text">
                            </div>
                        </div>
                       
                        
                        <button class="btn-thanhtoan"><a href=""><img src="{{ asset('assets/images/btn-thanhtoan.png') }}" alt=""></a></button>
                    </form>
                   </div>
                   
                   
                   
                   
               </div>
              
            </div>
        </div>
        <div class="navigation">
            <img class="navigation-bg" src="{{ asset('assets/images/navigation-bg.png') }}">
            <div class="group2">
                <div class="frame22">
                    <div class="phone">
                        <div class="frame21">
                            <div class="vectorstroke"><img src="{{ asset('assets/images/phone.svg') }}"></div>
                        </div>
                    </div>
                    <div class="textnumber">0123456789</div>
                </div>
                <div class="frame20">
                    <div class="item active"><a href="/" style="color: #FFFFFF">Trang chủ</a></div>
                    <div class="item"><a href="/event">Sự kiện</a></div>
                    <div class="item"><a href="/contact">Liên hệ</a></div>
                </div>
            </div>
            <a href="/">
                <div class="logo"></div>
            </a>
        </div>
    </div>
</body>

</html>
