<?php
  
namespace App\Http\Resources;
   
use Illuminate\Http\Resources\Json\JsonResource;
  
class IPResource extends JsonResource
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
            'sapid' => $this->sapid,
            'hostname' => $this->hostname,
            'loopback' => $this->loopback, 
            'mac_address' => $this->mac_address,
           // 'created_at' => $this->created_at->format('d/m/Y'),
           // 'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}


