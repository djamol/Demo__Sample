<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Invoice</title>
 

    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/font-awesome.css">

<script src="/public/js/jquery-1.11.3.min.js"></script>
    <script src="/public/js/mainController.js"></script>
      <script src="/public/js/jquery.dataTables.min.js"></script>
  <script src="/public/js/dataTables.bootstrap.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">.select_form{height: 44px !important;min-width: 357px;} .qty_form{max-width:54px;}</style>
    <script type="text/javascript">
    var baseUrl = "{{ url('/') }}/";
    var csrfToken = "{{ csrf_token() }}";
  </script>

</head>
<body>
  <br/>
<div class="row">
    <div class="col-sm-8"></div><div class="col-sm-4">
<button type="button" name="insert" class="btn btn-primary btn-xs edit" id="0">New Invoice</button>
    </div></div>
    <br/>
    <br/>
    <br/>

<table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Vendor</th>
       <th>Customer</th>
       <th>Items</th>
       <th>Total Bill</th>
       <th></th>
      </tr>
     </thead>
    </table>
    <script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();
  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"get/invoice",
     type:"GET"
    }
   });
  }
});
    </script>
<div class="modal fade" id="invoice_editor" tabindex="-1" role="dialog" aria-labelledby="invoice_editor" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="invoice_editor">Edit Invoice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  id="form1" style="
    height: 400px;
    overflow-y: scroll;
">
    <input type="hidden" class="form-control" name="id" readonly="">

<div class="form-group form-inline">
    <label >Vendor Name:</label>
    <input type="text" class="form-control" name="vendor1" required="">
  </div>
<div class="form-group form-inline">
    <label >Vendor Street Address:</label>
    <input type="text" class="form-control" name="vendor2" >
  </div>
<div class="form-group form-inline">
    <label >Vendor City:</label>
    <input type="text" class="form-control" name="vendor3" >
  </div>
<div class="form-group form-inline">
    <label >Vendor Zip Code:</label>
    <input type="number" class="form-control" name="vendor4" >
  </div>
<div class="form-group form-inline">
    <label >Vendor Phone:</label>
    <input type="tel" class="form-control" name="vendor5" >
  </div>
<div class="form-group form-inline">
    <label >Vendor Email:</label>
    <input type="email" class="form-control" name="vendor6" >
  </div>
  <div class="form-group form-inline">
    <label >Ship To Name(Customer):</label>
    <input type="text" class="form-control" name="cust1" required="">
  </div>
<div class="form-group form-inline">
    <label >Customer Street Address:</label>
    <input type="text" class="form-control" name="cust2" >
  </div>
<div class="form-group form-inline">
    <label >Customer City:</label>
    <input type="text" class="form-control" name="cust3" >
  </div>
<div class="form-group form-inline">
    <label >Customer Zip Code:</label>
    <input type="number" class="form-control" name="cust4" >
  </div>
<div class="form-group form-inline">
    <label >Customer Phone:</label>
    <input type="tel" class="form-control" name="cust5" >
  </div>
<div class="form-group form-inline">
    <label >Customer Email:</label>
    <input type="email" class="form-control" name="cust6" >
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="$('#form1').submit();" class="btn btn-primary">Save</button>
</form>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="item_editor" tabindex="-1" role="dialog" aria-labelledby="item_editor" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="item_editor">Product Management <button onclick="newItem()">Add Product</button></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  id="form2" style="
    height: 400px;
    overflow-y: scroll;
">
    <input type="hidden" class="form-control" name="item_id" readonly="">
<div class="items_div">
<div class="form-group form-inline ">
    <label >Item Name:</label>
    <select id="items_1"  class="form-select select_form">
  <option value="" selected>Select Item</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

    <label >Qty:</label>
    <input type="number" class="form-control qty_form" name="qty[]" >
  </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="items_save()" class="btn btn-primary">Save</button>
</form>
      </div>
    </div>
  </div>
</div>


  </body>
  </html>