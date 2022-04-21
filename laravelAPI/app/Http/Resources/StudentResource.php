<?php
  
namespace App\Http\Resources;
   
use Illuminate\Http\Resources\Json\JsonResource;
  
class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'studid' => $this->studid,
            'name' => $this->name,
            'email' => $this->email, 
            'gender' => $this->gender,
            'status' => $this->status,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'city' => $this->city,
            'country' => $this->country,
            'post_title' => $this->post_title,
            'post_body' => $this->post_body,

           // 'created_at' => $this->created_at->format('d/m/Y'),
           // 'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}


