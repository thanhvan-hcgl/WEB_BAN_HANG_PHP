<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Product;

class productController extends Controller
{
    public function index()
    {
        $query=Menu::where('parent_id',0)->get();
        return view('product',['title'=>'Sản Phẩm','menus'=>$query]);
    }
    public function product_tabs(Request $request)
    {
        $data=$request->all();
        $output='';
        $products=Product::where('menu_id',$data['menu_id'])->orderBy('id','DESC')->get();
        $product_count=$products->count();
        if ($product_count>0)
        {
            $output .='
            <div class="row isotope-grid">'
            ;
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
            }
            
                $output.='
            </div>';
            }

        else {
            $output.='
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <p>Hiện không có sản phẩm</p>
                </div>
            </div>';
        }
        return $output;
    }
}
