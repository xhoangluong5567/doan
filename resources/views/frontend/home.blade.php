@extends('frontend.partials.master')
@section('content')

<div class="product-hot">
    <div class="container">
        <h3 style=" margin-top: 40px; margin-bottom: 30px;color: var(--red);font-size: 22px;font-weight: 700; text-transform: uppercase;">
            Sản phẩm nổi bật
        </h3>
        <div class="autoplay">
            @if(isset($productHot))
            @foreach($productHot as $hot)
            <div class="col-md-3" style="text-align: center;">
                <td><img style="width:200px; height:200px; margin: 0px auto;" src="{{ url('upload') }}/{{ $hot->images }}" class="thumbnail"></td>
                <h5>{{ $hot->name }}</h5>

                <p> <a style="color:white;" href="{{ route('add.cart',$hot->id) }}" class="btn btn-warning">Mua Hàng</a>
                    <a style="color:white;" href="{{ url('product') }}/{{ $hot->id }}" class="btn btn-danger">Xem chi tiết</a>
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
            @foreach($categoriesPublic as $categoriesPublic)
            <a>
                <h1 style="text-align:center; margin-top:30px; margin-bottom:30px; color:black; border:2px solid orange; " value="{{ $categoriesPublic->id }}">{{ $categoriesPublic->name }}</h1>
            </a>
            <div class="product-list row">

                @foreach($categoriesPublic->products as $product)

                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                    @if ($product->quantity == 0)
                    <span style="position: absolute; background:#e91e63; color:white; padding: 2px 6px;border-radius:5px;font-size:10px;">Tam het hang</span>
                    @endif

                    <a href="{{ url('product') }}/{{ $product->id }}"><img src="{{ url('upload') }}/{{ $product->images }}" class="img-thumbnail" style=" height:200px;"></a>
                    <p class="name">{{ ($product->name) }} VND</p>
                    <p class="price">{{ number_format($product->price) }} VND</p>
                    <a style="color:white;" href="{{ route('add.cart',$product->id) }}" class="btn btn-warning">Mua Hàng</a>
                    <a style="color:white;" href="{{ url('product') }}/{{ $product->id }}" class="btn btn-danger">Xem chi tiết</a>



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
        <li><i class="icHt"></i><span>Hỗ trợ suốt thời gian sử dụng. Hotline: <a href="tel:18001763">0963600036</a></span></li>
    </ul>
</div>
<!-- footer -->
@endsection
