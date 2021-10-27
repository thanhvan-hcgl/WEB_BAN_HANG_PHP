<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class MenuController extends Controller
{
    //thuộc về lớp menucontroller
    function create()
    {
        $query=Menu::where('parent_id',0)->get();
        return view('admin.menu.add',['title'=>'Thêm Danh Mục Mới','menus'=>$query]);
    }
    public function store(CreateFormRequest $request)
    {
        //in ra những request
        //dd($request->input());
        //$result=$this->menuService->create($request);
        try {
            Menu::create($request->all());
        Session::flash('success', 'Tạo Danh Mục Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return redirect()->back();
    }
    public function index(){
        $querys=Menu::orderbyDesc('id')->paginate(20);
        //kiểm tra kết quả querys
        //foreach ($querys as $query) {
        //    echo $query;
        //}
        return view('admin.menu.list',[
           'title'=> 'Danh sách danh mục',
           'menus' => $querys
        ]);
    }
    public function destroy(Request $request)
    {
        //lấy ra id của request
        $id=(int) $request->input('id');
        //kiểm tra xem id menu 
        $menu=Menu::where('id',$id)->first();
        if ($menu){
            $result=Menu::where('id',$id)->orWhere('parent_id',$id)->delete();
        }
        if ($result)
            {
                return response()->json([
                    'error' =>false,
                    'message' =>'Xóa thành công'
                ]);
            }
        else
            {
                return response()->json([
                    'error' =>true,
                    'message' =>'Xóa thành công'
                ]);
            }
        
    }
    public function show(Menu $menu){
        //dd($menu);
        return view('admin.menu.edit',[
            'title' => 'Chỉnh sửa Danh Mục'. $menu->name,
            'menu' => $menu,
            'menus' =>Menu::where('parent_id',0)->get()
        ]);
    }
    public function update(Menu $menu,CreateFormRequest $request){
        if ($request->input('parent_id') != $menu->id) {
            $menu->parent_id = (int)$request->input('parent_id');
        }
        try{
        //lưu dữ liệu vào data
        $menu->fill($request->input());
        $menu->save();
        }
        catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }

        Session::flash('success', 'Cập nhật thành công Danh mục');
        return redirect('/admin/menus/list');
    }
    }
