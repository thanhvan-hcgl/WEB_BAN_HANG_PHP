<?php


namespace App\Http\Services;


class UploadService
{
    public function store($request)
    {
        if ($request->hasFile('file')) {
            try {
                //set đường dẫn cho ảnh
                $name = $request->file('file')->getClientOriginalName();
                $pathFull = 'uploads/' . date("Y/m/d");

                $request->file('file')->storeAs(
                    'public/' . $pathFull, $name
                );

                return '/storage/' . $pathFull . '/' . $name;
            } catch (\Exception $error) {
                return false;
            }
        }
    }

    }
    
