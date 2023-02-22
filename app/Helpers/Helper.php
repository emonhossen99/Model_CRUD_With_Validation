<?php

use Illuminate\Support\Facades\DB;

 if (!function_exists('lowercase')) {
    function lowercase($data){
        $get = strtolower($data);
        return $get;
     }
 }
 if (!function_exists('product_by_id')) {
    function product_by_id($id){
        $student = DB::table('products')->find($id);
        return $student;
     }
 }



?>
