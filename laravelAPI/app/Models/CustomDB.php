<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use DB;
 
class CustomDB extends Model
{
        public static function getAll(Request $request){
        $data=  DB::select("SELECT `sapid`, `hostname`, `loopback` FROM `router_details`");
dd($data);
        }
}


