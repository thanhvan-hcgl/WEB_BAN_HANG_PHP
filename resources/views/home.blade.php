@extends('main')

@section('content')
    <!-- Slider -->

    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">

                @foreach($sliders as $slider)

                    <div class="item-slick1" style="background-image: url({{ $slider->thumb }});">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                HOT 2021
                            </span>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                        {{ $slider->name }}
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                    <a href="{{ $slider->url }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Banner -->
    <div class="sec-banner bg0">
		<div class="flex-w flex-c-m">
            @foreach($menus as $menu)
			<div class="size-202 m-lr-auto respon4">
				<!-- Block1 -->
				<div class="block1 wrap-pic-w">
					<img src="{{ $menu->thumb}}" alt="IMG-BANNER">

					<a href="/danh-muc/{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html"  class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
						<div class="block1-txt-child1 flex-col-l">
							<span class="block1-name ltext-102 trans-04 p-b-8">
								{{ $menu->name }}
							</span>

							<span class="block1-info stext-102 trans-04">
								Spring 2021
							</span>
						</div>

						<div class="block1-txt-child2 p-b-4 trans-05">
							<div class="block1-link stext-101 cl0 trans-09">
								Shop Now
							</div>
						</div>
					</a>
				</div>
			</div>
            @endforeach
		</div>
	</div>

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
						<a class="nav-link active" data-id="{{1}}" data-toggle="tab" href="#best-seller" role="tab">New Arrival</a>
					</li>

					<li class="nav-item p-b-10">
						<a class="nav-link" data-id="{{2}}" data-toggle="tab" href="#featured" role="tab">Sale</a>
					</li>

					<li class="nav-item p-b-10">
						<a class="nav-link" data-id="{{3}}" data-toggle="tab" href="#sale" role="tab">Best Seller</a>
					</li>
				</ul>

                <div id="nav_product">

                </div>
            
            </div>
        </div>
    </section>

				
