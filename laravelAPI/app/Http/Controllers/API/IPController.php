<?php
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\IPResource;
use App\Models\IP;
use Validator;
  
class IPController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $router = IP::all();
   
        return $this->sendResponse(IPResource::collection($router), 'IP retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if(isset($input['action'])){
        if($input['action']=='delete'){
         return   self::delete($request);
        }elseif($input['action']=='update'){
         return   self::update($request);
        }
        }  
        $validator = Validator::make($input, [
            'hostname' => 'required',
            'mac_address' => 'required',
            'loopback' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $router = IP::create($input);
  
        return $this->sendResponse(new IPResource($router), 'Router created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $router = IP::find($id);
  
        if (is_null($router)) {
            return $this->sendError('Router not found.');
        }
  
        return $this->sendResponse(new IPResource($router), 'Router retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'mac_address' => 'required',
            'hostname' => 'required',
            'sapid' => 'required',
            'loopback' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        IP::where('sapid', (int) $input['sapid'])->update([
            'mac_address'=>$input['mac_address'],
            'hostname'=>$input['hostname'],
            'loopback'=>$input['loopback']
        ]
        );
        
    return response(["success"=>true,"message"=>"Router updated successfully","data"=>null], 200)->header('Access-Control-Allow-Origin', '*')->header('Content-Type', 'application/json');

    }


    public function delete(Request $request)
    {
      $input = $request->all();
        $validator = Validator::make($input, [
            'sapid' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
       $ip= IP::where('sapid', (int) $input['sapid'])->delete();
        
    return response(["success"=>true,"message"=>"Router delete successfully","data"=>null], 200)->header('Access-Control-Allow-Origin', '*')->header('Content-Type', 'application/json');

    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(IP $ip)
    {
        $ip->delete();
  
        return $this->sendResponse([], 'Router deleted successfully.');
    }
}


