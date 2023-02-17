var items=[];
var options_current=0;
function addOption(ele){
$.each(items, function(index, value) {
$('#items_'+ele).append($('<option>', {
    value: value['id'],
    text: value['name']+"(Rs."+value['price']+")"
}));

});


}
function newItem(){
options_current++;
console.log('opt',options_current);
  $('.items_div').append('<div class="form-group form-inline "><label >Product Name:</label><select id="items_'+options_current+'"  class="form-select select_form"></select><label >Qty:</label><input type="number" class="form-control qty_form" name="qty_'+options_current+'" ></div>');
setTimeout(function () {
addOption(options_current);
  }, 1000);
}

  function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
    }


function items_save(ele){

var items=[];$("select[id^='items_']").each(function() {
   var item=($('#'+this.id+" option:selected").val());items.push({'id':item,'qty':$('input[name=qty_'+this.id.replace('items_','')+']').val()});
}); console.log(items);
$.ajax({
             type: "Post",
                      headers: {'X-CSRF-TOKEN':csrfToken},

             url: "save/invoice/items",
             data:  {'id':$('input[name=item_id]').val(),'items':items},
             success: function(msg) {
                alert("invoice Save");
      $('#user_data').DataTable().destroy();
      fetch_data();             }
          });
}

  fetch_data();
  function fetch_data()
  {
 $.get("get/item", function(data, status){
items=data.data;
console.log(data);
  });
}
 $(document).ready(function(){


function addnew(){
	console.log("addnew","test");
}



function editInvoice(item){
	console.log("edit",item);
}
$("#form1").submit(function() {
console.log("submit");
$.ajax({
             type: "post",
         headers: {'X-CSRF-TOKEN':csrfToken},
             url: "save/invoice",
             data:  $("#form1").serialize(),
             success: function(msg) {
                alert("invoice Save");
      $('#user_data').DataTable().destroy();
      fetch_data();             }
          });

});





  $(document).on('click', '.item_edit', function(){
      $('.items_div').html('');
         var id = $(this).attr("id");
         $('input[name=item_id]').val(id);
      
       $('#item_editor').modal('show');

});
  $(document).on('click', '.edit', function(){
   var id = $(this).attr("id");
    if(id==0){
           $("input[name='id']").val(0);
       $('#invoice_editor').modal('show');

    }else{
    $.ajax({
     url:"edit/invoice",
     method:"GET",
     data:{id:id},
     success:function(data){
       console.log('o',data.data);
       var input =data.data;
          $("input[name='vendor1']").val(input.vendor);
          $("input[name='cust1']").val(input.customer);
           $("input[name='id']").val(input.id);
          if ( input.vendor_other_details) {
         var vOther= JSON.parse(input.vendor_other_details);
         console.log("Vother",vOther);
                  if (typeof vOther['address'] !== 'undefined') {
          $("input[name='vendor2']").val(vOther['address']);
        }
                   if (typeof vOther['city'] !== 'undefined') {

          $("input[name='vendor3']").val(vOther['city']);
        }
         if (typeof vOther['zip'] !== 'undefined') {
          $("input[name='vendor4']").val(vOther['zip']);
        }
         if (typeof vOther['phone'] !== 'undefined') {
          $("input[name='vendor5']").val(vOther['phone']);
        }
         if (typeof vOther['email'] !== 'undefined') {
          $("input[name='vendor6']").val(vOther['email']);
        }
        }
          if ( input.customer_other_details) {
         var cOther= JSON.parse(input.customer_other_details);
         console.log("Cother",cOther);
         if (typeof cOther['address'] !== 'undefined') {
          $("input[name='cust2']").val(cOther['address']);
        }
         if (typeof cOther['city'] !== 'undefined') {
         }
          $("input[name='cust3']").val(cOther['city']);
         if (typeof cOther['zip'] !== 'undefined') {
         }
          $("input[name='cust4']").val(cOther['zip']);
         if (typeof cOther['phone'] !== 'undefined') {
          $("input[name='cust5']").val(cOther['phone']);
        }
         if (typeof cOther['email'] !== 'undefined') {
          $("input[name='cust6']").val(cOther['email']);
          }
        }
       $('#invoice_editor').modal('show');

     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });