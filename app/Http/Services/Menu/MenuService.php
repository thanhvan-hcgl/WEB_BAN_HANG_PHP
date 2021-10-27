<?php


namespace App\Http\Services\Menu;


use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuService
{
    public function show()
    {
        return Menu::where('active', 1)->orderByDesc('id','desc')->take(3)->get();
    }
}