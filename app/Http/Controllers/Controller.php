<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function file_upload($file,$follder){
            $file = $file;
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move($follder, $filename);
            return $filename;
    }


    protected function file_updated($file,$follder,$old_file){
        file_exists($follder.$old_file) ? unlink($follder.$old_file) : false;
            $file = $file;
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move($follder, $filename);
            return $filename;
    }

    protected function file_delete($follder,$old_file){
       return file_exists($follder .$old_file) ? unlink($follder.$old_file) : false;
    }
}
