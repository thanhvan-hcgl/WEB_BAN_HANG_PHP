		<!-- Product -->
        <section class="sec-product bg0 p-t-100 p-b-50">
            <div class="container">
                <div class="p-b-32">
                    <h3 class="ltext-105 cl5 txt-center respon1">
                        Store Overview
                    </h3>
                </div>
    
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item p-b-10">
                            <a class="nav-link {{request()->is('tab1')?'active':null}}" id="tab1 {{request()->is('tab1')?'active':null}}"  href="{{url('/tab1')}}" role="tab">Best Seller</a>
                        </li>
    
                        <li class="nav-item p-b-10">
                            <a class="nav-link {{request()->is('tab2')?'active':null}}"  href="{{url('/tab2')}}" role="tab">Featured</a>
                        </li>
    
                        <li class="nav-item p-b-10">
                            <a class="nav-link {{request()->is('tab3')?'active':null}}" href="{{url('/tab3')}}" role="tab">Sale</a>
                        </li>
    
                    </ul>
    
                    <!-- Tab panes -->
                    <div class="tab-content p-t-50">
                        <!-- - -->
                        <div class="tab-pane fade show {{request()->is('tab1')?'active':null}}" id="{{url('/tab1')}}" role="tabpanel">
                            <p>{{$products}}</p>
                            <!-- Slide2 -->
                            {{--<div class="wrap-slick2">
                                <div class="slick2">
                                    @foreach($products as $product)
                                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="{{ $product->thumb}}" alt="IMG-PRODUCT">
    
                                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    Quick View
                                                </a>
                                            </div>
    
                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        {{ $product->name}}
                                                    </a>
    
                                                    <span class="stext-105 cl3">
                                                        {{ $product->price}}
                                                    </span>
                                                </div>
    
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>--}}
                        </div>	
    
                                    
                        <!-- - -->
                        <div class="tab-pane fade {{request()->is('tab2')?'active':null}}" id="{{url('/tab2')}}" role="tabpanel">
                            <p>{{$products}}</p>
                            <!-- Slide2 -->
                            {{--<div class="wrap-slick2">
                                <div class="slick2">
                                    @foreach($products as $product)
                                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="{{ $product->thumb}}" alt="IMG-PRODUCT">
    
                                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    Quick View
                                                </a>
                                            </div>
    
                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        {{ $product->name}}
                                                    </a>
    
                                                    <span class="stext-105 cl3">
                                                        {{ $product->price}}
                                                    </span>
                                                </div>
    
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>--}}
                        </div>
                    </div>
    
                                    
                        <!-- - -->
                        {{--<div class="tab-pane fade" id="{{url('/tab3')}}" role="tabpanel">
                            <!-- Slide2 -->
                            <div class="wrap-slick2">
                                <div class="slick2">
                                    @foreach($products as $product)
                                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="{{ $product->thumb}}" alt="IMG-PRODUCT">
    
                                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    Quick View
                                                </a>
                                            </div>
    
                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        {{ $product->name}}
                                                    </a>
    
                                                    <span class="stext-105 cl3">
                                                        {{ $product->price}}
                                                    </span>
                                                </div>
    
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>--}}
        </section>
    
                <!-- Tab01 -->
                {{--<div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item p-b-10">
                            <a class="nav-link active" data-toggle="tab" href="{{ url('/', ['1']) }}" role="tab">New Arrival</a>
                        </li>
    
                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="{{ url('/van', ['2']) }}" role="tab">Sale</a>
                        </li>
    
                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="{{asset('/3')}}" role="tab">Best Seller</a>
                        </li>
                    </ul>
                    <div class="row isotope-grid">
                        @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{ $product->thumb}}" alt="IMG-PRODUCT">
        
                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                        Quick View
                                    </a>
                                </div>
        
                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{ $product->name}}
                                        </a>
        
                                        <span class="stext-105 cl3">
                                            {{ $product->price_sale}}
                                        </span>
                                    </div>
        
                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                            <img class="icon-heart1 dis-block trans-04" src="template/images/icons/icon-heart-01.png" alt="ICON">
                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="tempalte/images/icons/icon-heart-02.png" alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>--}}
    
                    <!-- Tab panes -->
                    {{--<div class="tab-content p-t-50">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                            <!-- Slide2 -->
                            <div class="wrap-slick2">
                                <div class="slick2">
                                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                        <!-- Block2 -->
                                        @foreach($products as $product)
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="{{ $product->thumb}}" alt="IMG-PRODUCT">
    
                                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    Quick View
                                                </a>
                                            </div>
    
                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        {{ $product->name}}
                                                    </a>
    
                                                    <span class="stext-105 cl3">
                                                        {{ $product->price}}
                                                    </span>
                                                </div>
    
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                        <img class="icon-heart1 dis-block trans-04" src="template/images/icons/icon-heart-01.png" alt="ICON">
                                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="template/images/icons/icon-heart-02.png" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}
    
        {{--<section class="bg0 p-t-23 p-b-140">
            <div class="container">
                <div class="p-b-10">
                    <h3 class="ltext-103 cl5">
                        Product Overview
                    </h3>
                </div>
    
                <div class="flex-w flex-sb-m p-b-52">
                    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                            All Products
                        </button>
                    </div>
                </div>
    
                <div id="loadProduct">
                    @include('products.list')
                </div>
    
    
                <!-- Load more -->
                <div class="flex-c-m flex-w w-full p-t-45" id="button-loadMore">
                    <input type="hidden" value="1" id="page">
                    <a onclick="loadMore()" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                        Load More
                    </a>
                </div>
            </div>
        </section>
    @endsection--}}
    