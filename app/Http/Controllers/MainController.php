<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;

    public function __construct(SliderService $slider,MenuService $menu,
    ProductService $product)
    {
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
    }
    public function index()
    {
        return view('home',[
        'title'=>'Shop Quang Giap',
        'sliders' => $this->slider->show(),
        'menus'=>$this->menu->show(),
        'products'=> Product::orderBy('id', 'desc')->take(8)->get()
        ]);   
    }
    public function navs_pro(Request $request)
    {
        $data=$request->all();
        log::alert('thanhvan');
        $output='';
        if ($data['nav_id']==1)
        {
            $products=Product::orderBy('id','DESC')->take(8)->get();
        }
        if ($data['nav_id']==2)
        {
            $products=Product::orderByRaw('price - price_sale DESC')->take(8)->get();
        }
        if ($data['nav_id']==3)
        {
            $products=Product::orderBy('id','DESC')->take(8)->get();   
        }
        $product_count=$products->count();
        if ($product_count>0)
        {
            $output.='
            <div class="row isotope-grid">';
            foreach ($products as $product){
            $output.='
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="'.$product->thumb.'" alt="IMG-PRODUCT">
    
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
    
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    '.$product->name.'
                                    </a>
    
                                    <span class="stext-105 cl3">
                                    '.$product->price.'
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
                    </div>';
            };
            $output.='
                </div>';
        }
        else {
            $output.='<div>Chưa có sản phẩm</div>';
        }
        return $output;
    }
}
