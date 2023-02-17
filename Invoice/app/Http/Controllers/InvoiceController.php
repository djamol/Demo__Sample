<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Item;

use View;
class InvoiceController extends Controller
{
    public function index(Request $request)
    {

        $invoice=Invoice::when($request->has("id"),function($q)use($request){
            return $q->where("id","like","%".$request->get("id")."%");
        })->paginate(5);
        if($request->ajax()){
            return view('invoice.invoice-pagination ',['invoice'=>$invoice]); 
        } 
        return view('invoice.invoice ',['invoice'=>$invoice]);
    }
    public function invoiceView($id){
      $data = Invoice::find($id); 
      $vendor_other = json_decode($data->vendor_other_details,true);
      $customer_other = json_decode($data->customer_other_details,true);
      if($data->item!=null){
      $item = json_decode($data->item,true);
       }else{$item=null;}
        return view('invoice.print',compact('data','vendor_other','customer_other','item'));

          }
    public function get(Request $request){
    	  ## Read value
     $draw = $request->get('draw');
     $start = $request->get("start");
     $rowperpage = $request->get("length"); // Rows display per page

     $columnIndex_arr = $request->get('order');
     $columnName_arr = $request->get('columns');
     $order_arr = $request->get('order');
     $search_arr = $request->get('search',null);

    // $columnIndex = $columnIndex_arr[0]['column']; // Column index
    // $columnName = $columnName_arr[$columnIndex]['data']; // Column name
     //$columnSortOrder = $order_arr[0]['dir']; // asc or desc
     if($search_arr!=null){
     $searchValue = $search_arr['value']; // Search value
     }

     // Total records
     $totalRecords = Invoice::select('count(*) as allcount')->count();
     $totalRecordswithFilter = Invoice::select('count(*) as allcount')->where('customer', 'like', '%' .$searchValue . '%')->orWhere('vendor', 'like', '%' .$searchValue . '%')->count();

     // Fetch records
     $records = Invoice:: //orderBy($columnName,$columnSortOrder)->
       where('invoices.vendor', 'like', '%' .$searchValue . '%')
       -> orWhere('invoices.customer', 'like', '%' .$searchValue . '%')
       ->select('invoices.*')
       ->skip($start)
       ->take($rowperpage)
       ->get();

     $data_arr = array();
  foreach ($records as $key => $value) {
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$value["id"].'" data-column="vendor">' . $value['vendor'] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$value["id"].'" data-column="customer">' . $value["customer"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$value["id"].'" data-column="item_count">' . $value["item_count"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$value["id"].'" data-column="total_bill">' . $value["total_bill"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-primary btn-xs edit"  id="'.$value["id"].'">Edit Info</button> &nbsp;<button type="button" name="delete" class="btn btn-primary btn-xs item_edit"  id="'.$value["id"].'">Edit Items</button> &nbsp;
<a href="/print/'.$value["id"].'" class="btn btn-primary btn-xs">Print</button>
 ';
 $data_arr[] = $sub_array;
}


     $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordswithFilter,
        "aaData" => $data_arr
     );
return $response;
    }
    public function edit(Request $request){
     $record = Invoice:: //orderBy($columnName,$columnSortOrder)->
       where('invoices.id', $request->get('id','none'))
       ->get()->first();

        return response()->json(['data'=>$record,'status'=>'Successfully fetch']);
        		}

public function saveItems(Request $request){
  $array=array();
  $all_total=0;
  if($request->get('id',null) !=null){
    foreach ($request->items as $key => $value) {
      if($value['qty']>0 && $value['qty']!=null){
        $array1=array();
      $item= Item::find($value['id']); 
      $all_total +=$item->price*$value['qty'];
      array_push($array,['id'=>$item->id,'name'=>$item->name,'desc'=>$item->desc,'price'=>$item->price,'qty'=>$value['qty'],'total'=>$item->price*$value['qty']]);
      }
    Invoice::where('id',$request->get('id',null) )->update(['item'=>json_encode($array),'item_count'=>count($array),'total_bill'=>$all_total]);
    }

   }
  }
   public function save(Request $request){
   	$box = $request->all();        
   $vendor_other_details=['address'=>$request->get('vendor2',null),'city'=>$request->get('vendor3',null),'zip'=>$request->get('vendor4',null),'phone'=>$request->get('vendor5',null),'email'=>$request->get('vendor6',null)];
   $customer_other_details=['address'=>$request->get('cust2',null),'city'=>$request->get('cust3',null),'zip'=>$request->get('cust4',null),'phone'=>$request->get('cust5',null),'email'=>$request->get('cust6',null)];

   if($request->get('id',null) !=null && $request->get('id',null) > 0){
   	Invoice::where('id',$request->get('id',null) )->update(['vendor'=>$request->get('vendor1',null),'vendor_other_details'=>json_encode($vendor_other_details),'customer_other_details'=>json_encode($customer_other_details),'customer'=>$request->get('cust1',null)]);

   }else{
   	$data = new Invoice();
   $data->vendor= $request->get('vendor1',null);
    $data->vendor_other_details=json_encode($vendor_other_details);
    $data->customer_other_details=json_encode($customer_other_details);
   $data->customer= $request->get('cust1',null);
     $data->save();
 }

        return response()->json(['data'=>'data','status'=>'Successfully fetch']);
        		}
}
