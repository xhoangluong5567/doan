@extends('frontend.partials.master')
@section('content')

<div class="product-hot">
    <div class="container">
        <h3
            style=" margin-top: 40px; margin-bottom: 30px;color: var(--red);font-size: 22px;font-weight: 700; text-transform: uppercase;">
            Sản phẩm nổi bật
        </h3>
        <div class="autoplay">
            @if(isset($productHot))
                @foreach($productHot as $hot)
                    <div class="col-md-3">
                        <td><img style="width:200px; height:200px;"
                                src="{{ url('upload') }}/{{ $hot->images }}" class="thumbnail"></td>
                        <h5>{{ $hot->name }}</h5>

                        <p>                            <a style="color:white;"
                                href="{{ asset('cart/add/'.$hot->id) }}"
                                class="btn btn-warning">Mua Hàng</a>
                            <a style="color:white;" href="{{ url('product') }}/{{ $hot->id }}"
                                class="btn btn-danger">Xem chi tiết</a>
                        </p>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
    <!-- Left and right controls -->

    <script type="text/javascript">
        $('.autoplay').slick({
            infinite: true,
            autoplay: true,
            mobileFirst: true,
            autoplaySpeed: 4000,
            arrows: false,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 568,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 800,
                    settings: "unslick"
                }

            ]
        });

    </script>




    <div class="container products">
        <div class="products">
            <?php $categories = App\Category::all() ?>
            @foreach($categories as $categories)
                <a>
                    <h1 style="text-align:center; margin-top:30px; margin-bottom:30px; color:black; border:2px solid orange; "
                        value="{{ $categories->id }}">{{ $categories->name }}</h1>
                </a>
                <div class="product-list row">
                    @foreach($categories->products as $product)

                        <div class="product-item col-md-3 col-sm-6 col-xs-12">
                            <a href="{{ url('product') }}/{{ $product->id }}"><img
                                    src="{{ url('upload') }}/{{ $product->images }}"
                                    class="img-thumbnail" style=" height:200px;"></a>
                            <p class="name">{{ ($product->name) }} VND</p>
                            <p class="price">{{ number_format($product->price) }} VND</p>
                            <a style="color:white;"
                                href="{{ asset('cart/add/'.$product->id) }}"
                                class="btn btn-warning">Mua Hàng</a>
                            <a style="color:white;" href="{{ url('product') }}/{{ $product->id }}"
                                class="btn btn-danger">Xem chi tiết</a>



                        </div>

                    @endforeach




                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- end main -->
</div>
</div>
</div>

<!-- endmain -->
<div class="plc">
    <ul>
        <li><i class="icGh"></i><span>Giao hàng nhanh chóng</span></li>
        <li><i class="icTn"></i><span>Trải nghiệm sản phẩm tại nhà</span></li>
        <li><i class="icLd"></i><span>Lỗi đổi tại nhà nhanh chóng</span></li>
        <li><i class="icHt"></i><span>Hỗ trợ suốt thời gian sử dụng. Hotline: <a
                    href="tel:18001763">0963600036</a></span></li>
    </ul>
</div>
<!-- footer -->
@endsection
