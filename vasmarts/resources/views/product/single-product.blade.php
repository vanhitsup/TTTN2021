@extends('layout')
@section('content')
<div class="breadcrumbs-section plr-200 mb-80 section">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Chi tiết sản phẩm</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{\Illuminate\Support\Facades\URL::to('index')}}">Trang Chủ</a></li>
                            <li>Chi tiết sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper section">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- single-product-area start -->
                    @foreach($detail_product as $key =>$value)
                    <div class="single-product-area mb-80">
                        <div class="row">
                            <!-- imgs-zoom-area start -->
                            <div class="col-lg-5">
                                <div class="imgs-zoom-area">
                                    <img src="{{\Illuminate\Support\Facades\URL::to('../public/uploads/products/'.$value->product_image)}}" alt=""/>                                                    </a>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                <div class="p-c">
                                                    <a href="#" data-image="img/product/2.jpg" data-zoom-image="img/product/2.jpg">
                                                        <img class="zoom_03" src="{{asset('../public/frontend/img/product/2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="img/product/3.jpg" data-zoom-image="img/product/3.jpg">
                                                        <img class="zoom_03" src="{{asset('../public/frontend/img/product/3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="img/product/4.jpg" data-zoom-image="img/product/4.jpg">
                                                        <img class="zoom_03" src="{{asset('../public/frontend/img/product/4.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="img/product/5.jpg" data-zoom-image="img/product/5.jpg">
                                                        <img class="zoom_03" src="{{asset('../public/frontend/img/product/5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="img/product/6.jpg" data-zoom-image="img/product/6.jpg">
                                                        <img class="zoom_03" src="{{asset('../public/frontend/img/product/6.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="img/product/7.jpg" data-zoom-image="img/product/7.jpg">
                                                        <img class="zoom_03" src="{{asset('../public/frontend/img/product/7.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- imgs-zoom-area end -->
                            <!-- single-product-info start -->
                            <div class="col-lg-7">
                                <div class="single-product-info">
                                    <h3 class="text-black-1">{{$value->product_name}}</h3>
                                    <span style="margin-top: 10px">Mã sản phẩm: {{$value->product_id}}</span>
                                    <h6 class="brand-name-2" style="margin-top: 10px">Thương hiệu: {{$value->brand_name}}</h6>
                                    <h6 class="brand-name-2" style="margin-top: 10px">Danh mục: {{$value->category_name}}</h6>
                                    <!--  hr -->
                                    <hr>
                                    <!-- single-pro-color-rating -->

                                    <div class="single-pro-color-rating clearfix">
                                        <div class="sin-pro-color f-left">
                                            <p class="color-title f-left">Màu</p>
                                            <div class="widget-color f-left">
                                                <ul>
                                                    <li class="color-1"><a href="#"></a></li>
                                                    <li class="color-2"><a href="#"></a></li>
                                                    <li class="color-3"><a href="#"></a></li>
                                                    <li class="color-4"><a href="#"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pro-rating sin-pro-rating f-right">
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <span class="text-black-5">( 27 Rating )</span>
                                        </div>

                                    </div>
                                    <br>
                                    <h7>Tình Trạng: Còn Hàng</h7>
                                    <hr>

                                    <!-- plus-minus-pro-action -->
                                    <form action="{{\Illuminate\Support\Facades\URL::to('/save-cart')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="plus-minus-pro-action clearfix">
                                            <div class="sin-plus-minus f-left clearfix">
                                                <p class="color-title f-left">Số lượng</p>
                                                <div class="cart-plus-minus f-left">
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                    <input type="hidden" value="{{$value->product_id}}" name="productid_hidden" >

                                                </div>
                                            </div>
                                            <div class="sin-pro-action f-right">
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- single-product-price -->
                                        <h3 class="pro-price">Giá: {{number_format($value->product_price)}} đ</h3>
                                        <!--  hr -->
                                        <hr>
                                            <button type="submit" class="btn btn-outline-success" style="height: 45px; width: 200px; border-radius: 5px">
                                                <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                Thêm vào giỏ hàng
                                            </button>
                                    </form>


                                </div>
                            </div>
                            <!-- single-product-info end -->

                        </div>
                        <!-- single-product-tab -->

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- hr -->
                                <hr>
                                <div class="single-product-tab reviews-tab">
                                    <ul class="nav mb-20">
                                        <li><a class="active" href="#description" data-toggle="tab">Mô tả</a></li>
                                        <li ><a href="#information" data-toggle="tab">Thông tin chi tiết</a></li>
                                        <li ><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div  style="color: #3a3b45" role="tabpanel" class="tab-pane active show" id="description">
                                           <p> {!! $value->product_desc !!}</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="information">
                                            <p style="color: #3a3b45"> {!! $value->product_content !!}</p>
                                            </div>
                                        <div role="tabpanel" class="tab-pane" id="reviews">
                                            <!-- reviews-tab-desc -->
                                            <div class="reviews-tab-desc">
                                                <!-- single comments -->
                                                <div class="media mt-30">
                                                    <div class="media-left">
                                                        <a href="#"><img class="media-object" src="{{asset('../public/frontend/img/author/1.jpg')}}" alt="#"></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="clearfix">
                                                            <div class="name-commenter pull-left">
                                                                <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                                <p class="mb-10">27 Jun, 2019 at 2:30pm</p>
                                                            </div>
                                                            <div class="pull-right">
                                                                <ul class="reply-delate">
                                                                    <li><a href="#">Reply</a></li>
                                                                    <li>/</li>
                                                                    <li><a href="#">Delate</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                    </div>
                                                </div>
                                                <!-- single comments -->
                                                <div class="media mt-30">
                                                    <div class="media-left">
                                                        <a href="#"><img class="media-object" src="{{asset('../public/frontend/img/author/2.jpg')}}" alt="#"></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="clearfix">
                                                            <div class="name-commenter pull-left">
                                                                <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                                <p class="mb-10">27 Jun, 2019 at 2:30pm</p>
                                                            </div>
                                                            <div class="pull-right">
                                                                <ul class="reply-delate">
                                                                    <li><a href="#">Reply</a></li>
                                                                    <li>/</li>
                                                                    <li><a href="#">Delate</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  hr -->
                                <hr>
                            </div>
                        </div>

                    </div>
                    <!-- single-product-area end -->
                    @endforeach
                    <div class="related-product-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-left mb-40">
                                    <h2 class="uppercase">Sản phẩm liên quan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="active-related-product">
                            <!-- product-item start -->
                            @foreach($related_product as $key =>$value_related)

                            <div class="col-lg-12" >
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{\Illuminate\Support\Facades\URL::to('single-product/'.$value_related->product_id)}}">
                                            <img height="250px" src="{{\Illuminate\Support\Facades\URL::to('../public/uploads/products/'.$value_related->product_image)}}" alt=""/>                                                    </a>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{\Illuminate\Support\Facades\URL::to('single-product/'.$value_related->product_id)}}">{{$value_related->product_name}}</a>
                                        </h6>
                                        <div class="pro-rating">
                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        </div>
                                        <h3 class="pro-price">Giá: {{number_format($value_related->product_price)}} đ</h3>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- product-item end -->
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- widget-search -->
                    <aside class="widget-search mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search here...">
                            <button type="submit"><i class="zmdi zmdi-search"></i></button>
                        </form>
                    </aside>
                    <!-- widget-categories -->
                    <aside class="widget widget-categories box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Danh mục</h6>
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                @foreach($cate_pro as $key=>$value_cate)
                                    <li class="closed"><a href="{{\Illuminate\Support\Facades\URL::to('/danh-muc/'.$value_cate->category_id)}}">{{$value_cate->category_name}}</a>
                                        {{--                                        <ul>--}}
                                        {{--                                            <li><a href="#">Mobile</a></li>--}}
                                        {{--                                            <li><a href="#">Tab</a></li>--}}
                                        {{--                                            <li><a href="#">Watch</a></li>--}}
                                        {{--                                            <li><a href="#">Head Phone</a></li>--}}
                                        {{--                                            <li><a href="#">Memory</a></li>--}}
                                        {{--                                        </ul>--}}
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </aside>

                    <aside class="widget widget-categories box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Thương hiệu</h6>
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                @foreach($brand_pro as $key=>$value_brand)
                                    <li class="closed"><a href="{{\Illuminate\Support\Facades\URL::to('/thuong-hieu/'.$value_brand->brand_id)}}">{{$value_brand->brand_name}}</a>
                                        {{--                                        <ul>--}}
                                        {{--                                            <li><a href="#">Mobile</a></li>--}}
                                        {{--                                            <li><a href="#">Tab</a></li>--}}
                                        {{--                                            <li><a href="#">Watch</a></li>--}}
                                        {{--                                            <li><a href="#">Head Phone</a></li>--}}
                                        {{--                                            <li><a href="#">Memory</a></li>--}}
                                        {{--                                        </ul>--}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>

                    <!-- widget-product -->
                    <aside class="widget widget-product box-shadow">
                        <h6 class="widget-title border-left mb-20">recent products</h6>
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.blade.php">
                                    <img src="{{asset('../public/frontend/img/product/4.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.blade.php">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.blade.php">
                                    <img src="{{asset('../public/frontend/img/product/5.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.blade.php">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.blade.php">
                                    <img src="{{asset('../public/frontend/img/product/12.jpg')}}" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.blade.php">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>
@endsection
