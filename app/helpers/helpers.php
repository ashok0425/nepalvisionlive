<?php
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
 function __getAdmin(){
return Auth::guard('admin')->user();
}


function __getVendor(){
    return Auth::guard('vendor')->user();
    }



function __getPriceunit(){
return 'Rs';
}

function ___getPriceafterVat($total,$vat,$shipping){
$vat_amount=($vat*$total)/100;
$totalsum=$vat_amount+$total+$shipping;
return $totalsum;
}


function getimageUrl($path){

    if (env('APP_ENV')=='local') {
      return  asset($path);
    }else{
      return  asset('public/'.$path);
       
    }
}