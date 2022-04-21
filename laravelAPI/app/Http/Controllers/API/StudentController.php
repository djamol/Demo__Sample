<?php
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Validator;
  
class StudentController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $router = Student::all();
   
        return $this->sendResponse(StudentResource::collection($router), 'Student retrieved successfully.');
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
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'country' => 'required',
            'city' => 'required',
            'post_title' => 'required',
             'post_body' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $router = Student::create($input);
  
        return $this->sendResponse(new StudentResource($router), 'Router created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $router = Student::find($id);
  
        if (is_null($router)) {
            return $this->sendError('Router not found.');
        }
  
        return $this->sendResponse(new StudentResource($router), 'Router retrieved successfully.');
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
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'country' => 'required',
            'city' => 'required',
            'post_title' => 'required',
             'post_body' => 'required'
        ]);
      
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        Student::where('studid', (int) $input['studid'])->update([
            'name'=>$input['name'],
            'email'=>$input['email'],
            'status'=>$input['status'],
            'address1'=>$input['address1'],
            'address2'=>$input['address2'],
            'city'=>$input['city'],
            'country'=>$input['country'],
            'post_title'=>$input['post_title'],
            'post_body'=>$input['post_body'],

            'gender'=>$input['gender']
        ]
        );
        
    return response(["success"=>true,"message"=>"Router updated successfully","data"=>null], 200)->header('Access-Control-Allow-Origin', '*')->header('Content-Type', 'application/json');

    }


    public function delete(Request $request)
    {
      $input = $request->all();
        $validator = Validator::make($input, [
            'studid' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        Student::where('studid', (int) $input['studid'])->delete();
        
    return response(["success"=>true,"message"=>"Router delete successfully","data"=>null], 200)->header('Access-Control-Allow-Origin', '*')->header('Content-Type', 'application/json');

    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $Student)
    {
        $Student->delete();
  
        return $this->sendResponse([], 'Router deleted successfully.');
    }
}


