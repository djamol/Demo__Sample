<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use DB;
 
class Student extends Model
{
    protected $table = 'student';

    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name','email', 'gender', 'status', 'address1', 'address2', 'city', 'country', 'post_title', 'post_body'
    ];

}


