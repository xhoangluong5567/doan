@extends('frontend.partials.master')
@section('content')
<script type="text/javascript">
    $(function() {
        var pull = $('#pull');
        menu = $('nav ul');
        menuHeight = menu.height();

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
    });

    $(window).resize(function() {
        var w = $(window).width();
        if (w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
</script>


<div class="container">
    <div id="product-info">
        <div class="clearfix"></div>
        <h3>{{$product->name}}</h3>
        <div class="product-details">
            <!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{url('upload')}}/{{$product->images}}" style="width:350px; height:400px;">
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <div style="margin-left:80px" class="carousel-inner" role="listbox">
                        @foreach($product_images as $anhphu)
                        <img style="width:80px; height:80px;padding:10px;" src="{{url('/')}}/{{$anhphu->image}}" alt="...">
                        @endforeach

                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


















                </div>
            </div>





            <div class="col-sm-7">
                <div class="product-information">
                    <!--/product-information-->
                    <p>Giá: <span class="price">{{number_format($product->price)}} VND</span></p>
                    <p>Bảo hành: 1 đổi 1 trong 12 tháng</p>
                    <p>Phụ kiện: Dây cáp sạc, tai nghe</p>
                    <p>Tình trạng: Máy mới 100%</p>
                    <p>Khuyến mại: Hỗ trợ trả góp 0% dành cho các chủ thẻ Ngân hàng Sacombank</p>
                    <p>Còn hàng: Còn hàng</p>
                    <p class="add-cart text-center"><a href="#">Đặt hàng online</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr width="100%" size="10px" align="center"/>
<div class="container">
    <div id="product-detail">
        <h3>Chi tiết sản phẩm</h3>
        <p class="text-justify"> <?php
                                    echo "<p >{$product->desc}</p>" ?></p>
    </div>
    <div id="comment">
        <h3>Bình luận</h3>
        <div class="col-md-9 comment">
            <form>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input required type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="name">Tên:</label>
                    <input required type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="cm">Bình luận:</label>
                    <textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-default">Gửi</button>
                </div>
            </form>
        </div>
    </div>
    <div id="comment-list">
        <ul>
            <li class="com-title">
                Vietpro Education
                <br>
                <span>2017-19-01 10:00:00</span>
            </li>
            <li class="com-details">
                HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
            </li>
        </ul>
        <ul>
            <li class="com-title">
                Vietpro Education
                <br>
                <span>2017-19-01 10:00:00</span>
            </li>
            <li class="com-details">
                HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
            </li>
        </ul>
        <ul>
            <li class="com-title">
                Vietpro Education
                <br>
                <span>2017-19-01 10:00:00</span>
            </li>
            <li class="com-details">
                HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
            </li>
        </ul>
    </div>
</div>
<!-- end main -->
</div>
</div>
</div>
</section>
@endsection