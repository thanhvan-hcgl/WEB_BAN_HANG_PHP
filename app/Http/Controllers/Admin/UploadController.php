<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UploadService;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Requests\Product\ProductRequest;

class UploadController extends Controller
{
    protected $productService;
    public function __construct(UploadService $upload)
    {
        $this->upload=$upload;   
    }
    function create()
    {
        //$query=Menu::where('parent_id',0)->get();
        return view('admin.product.add',['title'=>'Thêm Danh Menu']);
    }
    public function store(Request $request)
    {
        $url = $this->upload->store($request);
        if ($url !== false) {
            return response()->json([
                'error' => false,
                'url'   => $url
            ]);
        }

        return response()->json(['error' => true]);
        //dd($request->file());
        }
    }

