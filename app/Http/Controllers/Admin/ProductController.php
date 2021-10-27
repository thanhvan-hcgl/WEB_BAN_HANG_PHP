<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product\ProductRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Services\Product\ProductAdminService;
use GrahamCampbell\ResultType\Result;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductAdminService $productService)
    {
        $this->productService=$productService;
        
    }
    //thuộc về lớp menucontroller
    function create()
    {
        return view('admin.product.add',[
        'title'=>'Thêm Sản Phẩm Mới',
        //Lấy danh mục sản phẩm
        'menus'=>$this->productService->getMenu()]);
    }
    public function store(ProductRequest $request)
    {
        $this->productService->insert($request);
        return redirect()->back();
    }
    public function index()
    {
        return view('admin.product.list',[
        'title'=>'Danh sách sản phẩm',
        'products'=>$this->productService->get()]);
    }
    //Truyền dữ liệu theo hướng Route Model Binding
    public function show(Product $product)
    {
        return view('admin.product.edit',[
            'title'=>'Chỉnh sửa sản phẩm',
            'product'=>$product,
            'menus'=>$this->productService->getMenu()
        ]);
    }
    public function update(Request $request,Product $product)
    {
        $result=$this->productService->update($request,$product);
        if ($result)
        {
            return redirect('admin.products/list');
        }
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $result=$this->productService->delete($request);
        if ($result)
        {
            return response()->json([
                'error' =>false,
                'message' =>'Xóa thành công'
            ]);
        }
        return response()->json(['error'=>true]);
    }

}
