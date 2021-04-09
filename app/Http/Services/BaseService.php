<?php


namespace App\Http\Services;


class BaseService
{
    function updateLoadFile($request, $key, $nameFolder)
    {
        if ($request->file($key)!=null){
            return $request->file($key)->store($nameFolder, 'public');
        }
    }
}
