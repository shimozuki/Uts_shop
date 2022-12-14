@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('main-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">
        <form class="form" method="POST" action="{{route('cart.order')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <h2>Make Your Checkout Here</h2>
                        <p>Please register in order to checkout more quickly</p>
                        <!-- Form -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>First Name<span>*</span></label>
                                    <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}">
                                    @error('first_name')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Last Name<span>*</span></label>
                                    <input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}">
                                    @error('last_name')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email Address<span>*</span></label>
                                    <input type="email" name="email" placeholder="" value="{{old('email')}}">
                                    @error('email')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                    @error('phone')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Province<span>*</span></label>
                                    <select name="country" id="country">
                                        <option value="aceh">Aceh</option>
                                        <option value="Sumut">Sumatera Utara</option>
                                        <option value="sumbar">Sumatera Barat</option>
                                        <option value="Riau">Riau</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Sumsel">Sumatera Selatan</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="BaBel">Kep. Bangka Belitung</option>
                                        <option value="kepRiau">Kepulauan Riau</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Jabar">Jawa Barat</option>
                                        <option value="Banten">Banten</option>
                                        <option value="Jateng">Jawa Tengah</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Jatim">Jawa Timur</option>
                                        <option value="Kalbar">Kalimantan Barat</option>
                                        <option value="Kalteng">Kalimantan Tengah</option>
                                        <option value="Kalsel">Kalimantan Selatan</option>
                                        <option value="Kaltim">Kalimantan Timur</option>
                                        <option value="Kaltra">Kalimantan Utara</option>
                                        <option value="Bali">Bali</option>
                                        <option value="NTT">Nusa Tenggara Timur</option>
                                        <option value="NTB">Nusa Tenggara Barat</option>
                                        <option value="Sulut">Sulawesi Utara</option>
                                        <option value="Sulteng">Sulawesi Tengah</option>
                                        <option value="Sulsel">Sulawesi Selatan</option>
                                        <option value="Sultengg">Sulawesi Tenggara</option>
                                        <option value="Sulbar">Sulawesi Barat</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Maluku">Maluku</option>
                                        <option value="Maluku Utara">Maluku Utara</option>
                                        <option value="Papua">Papua</option>
                                        <option value="Papua Barat">Papua Barat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Address Line 1<span>*</span></label>
                                    <input type="text" name="address1" placeholder="" value="{{old('address1')}}">
                                    @error('address1')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" name="address2" placeholder="" value="{{old('address2')}}">
                                    @error('address2')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                    @error('post_code')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>CART TOTALS</h2>
                            <div class="content">
                                <ul>
                                    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Cart Subtotal<span>@currency(Helper::totalCartPrice())</span></li>
                                    <li class="shipping">
                                        Shipping Cost
                                        @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                        <select name="shipping" class="nice-select">
                                            <option value="">Select your address</option>
                                            @foreach(Helper::shipping() as $shipping)
                                            <option value="{{$shipping->id}}" class="shippingOption" data-price="@currency($shipping->price)">{{$shipping->type}}: @currency($shipping->price)</option>
                                            @endforeach
                                        </select>
                                        @else
                                        <span>Free</span>
                                        @endif
                                    </li>

                                    @if(session('coupon'))
                                    <li class="coupon_price" data-price="{{session('coupon')['value']}}">You Save<span>@currency(session('coupon')['value'])</span></li>
                                    @endif
                                    @php
                                    $total_amount=Helper::totalCartPrice();
                                    if(session('coupon')){
                                    $total_amount=$total_amount-session('coupon')['value'];
                                    }
                                    @endphp
                                    @if(session('coupon'))
                                    <li class="last" id="order_total_price">Total<span>@currency($total_amount)</span></li>
                                    @else
                                    <li class="last" id="order_total_price">Total<span>@currency($total_amount)</span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>Payments</h2>
                            <div class="content">
                                <div class="checkbox">
                                    {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                    <form-group>
                                        <input name="payment_method" id="cod" type="radio" onclick="myFunction()" value="cod"> <label> Cash On Delivery</label><br>
                                        <input name="payment_method" id="qris" type="radio" onclick="myFunction()" value="paypal"> <label> QrRis</label>
                                        <br>
                                        <input name="payment_method" id="tf" type="radio" onclick="myFunction()" value="paypal"> <label> Transfer Bank</label>
                                        <b>
                                            <p class="text-center" id="text"></p>
                                        </b>
                                        <p id='demo'></p>
                                        <center><p id='BSI'></p></center>
                                        <p class="text-center" style="color: #00a99d; font-size: 150%; margin-top: 5%;" id="rek"></p>
                                        <b>
                                            <p class="text-center" id="an"></p>
                                        </b>
                                    </form-group>
                                    <div id="upload">
                                        <label for=""><b>Upload Bukti Pembayaran*</b></label>
                                        <input type="file" name="bukti_tf">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/ End Order Widget -->
                        <!-- Payment Method Widget -->
                        <div class="single-widget payement">
                            <div class="content">
                                <img src="{{('backend/img/payment-method.png')}}" alt="#">
                            </div>
                        </div>
                        <!--/ End Payment Method Widget -->
                        <!-- Button Widget -->
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    <button type="submit" class="btn">proceed to checkout</button>
                                </div>
                            </div>
                        </div>
                        <!--/ End Button Widget -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!--/ End Checkout -->

<!-- Start Shop Services Area  -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->
@endsection
@push('styles')
<style>
    li.shipping {
        display: inline-flex;
        width: 100%;
        font-size: 14px;
    }

    li.shipping .input-group-icon {
        width: 100%;
        margin-left: 10px;
    }

    .input-group-icon .icon {
        position: absolute;
        left: 20px;
        top: 0;
        line-height: 40px;
        z-index: 3;
    }

    .form-select {
        height: 30px;
        width: 100%;
    }

    .form-select .nice-select {
        border: none;
        border-radius: 0px;
        height: 40px;
        background: #f6f6f6 !important;
        padding-left: 45px;
        padding-right: 40px;
        width: 100%;
    }

    .list li {
        margin-bottom: 0 !important;
    }

    .list li:hover {
        background: #F7941D !important;
        color: white !important;
    }

    .form-select .nice-select::after {
        top: 14px;
    }
</style>
@endpush
@push('scripts')
<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $("select.select2").select2();
    });
    $('select.nice-select').niceSelect();
</script>
<script>
    var x = document.createElement("IMG");
    var bank = document.createElement("IMG");
    x.setAttribute("src", "{{asset('images/qrcode.png')}}");
    x.setAttribute("width", "304");
    x.setAttribute("height", "228");
    document.getElementById('demo').appendChild(x);
    document.getElementById('text').innerHTML = 'Sacaand Untuk Bayar';
    bank.setAttribute("src", "{{asset('images/bsi_.png')}}");
    bank.setAttribute("width", "200");
    bank.setAttribute("height", "200");
    document.getElementById('BSI').appendChild(bank);
    document.getElementById('rek').innerHTML = '74180705389';
    document.getElementById('an').innerHTML = 'A/n PT.Universitas Teknologi Sumbawa';
    $('#demo').hide();
    $('#text').hide();
    $('#upload').hide();
    $('#BSI').hide();
    $('#rek').hide();
    $('#an').hide();

    function myFunction() {
        var qris = document.getElementById("qris");
        var cod = document.getElementById("cod");
        var tf = document.getElementById("tf");
        if (qris.checked == true) {
            $('#demo').show();
            $('#text').show();
            $('#upload').show();
            $('#BSI').hide();
            $('#rek').hide();
            $('#an').hide();
        }
        if (cod.checked == true) {
            $('#demo').hide();
            $('#text').hide();
            $('#upload').hide();
            $('#BSI').hide();
            $('#rek').hide();
            $('#an').hide();
        }
        if (tf.checked == true) {
            $('#demo').hide();
            $('#text').hide();
            $('#upload').hide();
            $('#BSI').show();
            $('#rek').show();
            $('#an').show();
        }

    }
</script>
<script>
    function showMe(box) {
        var checkbox = document.getElementById('shipping').style.display;
        // alert(checkbox);
        var vis = 'none';
        if (checkbox == "none") {
            vis = 'block';
        }
        if (checkbox == "block") {
            vis = "none";
        }
        document.getElementById(box).style.display = vis;
    }
</script>
<script>
    $(document).ready(function() {
        $('.shipping select[name=shipping]').change(function() {
            let cost = parseFloat($(this).find('option:selected').data('price')) || 0;
            let subtotal = parseFloat($('.order_subtotal').data('price'));
            let coupon = parseFloat($('.coupon_price').data('price')) || 0;
            // alert(coupon);
            $('#order_total_price span').text('$' + (subtotal + cost - coupon).toFixed(2));
        });

    });
</script>

@endpush