<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use DB;
 
class IP extends Model
{
    protected $table = 'router_details';

    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'hostname','loopback', 'mac_address'
    ];

}


