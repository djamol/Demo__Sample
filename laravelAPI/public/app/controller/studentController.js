var getDataHolder,deleteItem,editItem;
 $("#main_title").html("Student Management");
mainAppControllers.controller('StudentController', ['$scope', '$http','$location', function ($scope, $http,$location) {
$scope.data_list= []; 
$scope.test= "controller";
$scope.token = getCookie("token");
if(!$scope.token){
   $location.path( "/" );
}
$scope.getData =function(){
var data = {
                data_ui : "fetch"
        };
        $http({
            method: 'GET',
            url: '/laravelAPI/public/api/student',
            headers: {'Content-Type': 'application/json','Accept':'application/json','Authorization':'Bearer '+$scope.token},
            data:(data),
        })
.then(function successCallback(response) {
        $scope.data_list =response.data.data;  
  console.log($scope.data_list);

  var dataTable = $('#user_data').DataTable({
//      "processing" : true,
 //     "serverSide" : true,
 retrieve: true,
    "order" : [],
  "ordering": true,
        "data": $scope.data_list,
        "searching": true,
  "columns": [
          {'data':'studid'},
          {'data':'name'},
          {'data':'email'},
          {'data':'gender'},
          {'data':'status'},
          {'data':'address1'},
          {'data':'address2'},
          {'data':'city'},
          {'data':'country'},
          {'data':'post_title'},
          {'data':'post_body'},
          {
            data: "action",
            render:function (data, type, row) {
             return `<ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" onClick="editItem(`+row.studid+`,'`+row.name+`','`+row.email+`','`+row.gender+`','`+row.status+`','`+row.address1+`','`+row.address2+`','`+row.city+`','`+row.country+`','`+row.post_title+`','`+row.post_body+`')" title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" onClick="deleteItem(`+row.studid+`)" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>`;        
        } }
 
        ]
        
    }); 

}, function errorCallback(response) {
                     });
}
$scope.getData();


getDataHolder = $scope.getData;
$scope.edit={};
$scope.editData =function(id,name,email,gender,val1,val2,val3,val4,val5,val6,val7){
$scope.edit.studid=id;
$("#edit_studid").val(id);
$scope.edit.name=name;
$("#edit_name").val(name);
$("#edit_email").val(email);
$scope.edit.email=email;
$("#edit_gender").val(gender);
$scope.edit.gender=gender;
$scope.edit.status=$("#edit_status").val(val1);
$scope.edit.address1=$("#edit_address1").val(val2);
$scope.edit.address2=$("#edit_address2").val(val3);
$scope.edit.city=$("#edit_city").val(val4);
$scope.edit.country=$("#edit_country").val(val5);
$scope.edit.post_body=$("#edit_post_body").val(val6);
$scope.edit.post_title=$("#edit_post_title").val(val7);
$("#edit_status").val(val1);
$("#edit_address1").val(val2);
$("#edit_address2").val(val3);
$("#edit_city").val(val4);
$("#edit_country").val(val5);
$("#edit_post_body").val(val6);
$("#edit_post_title").val(val7);

$('#editor').modal('show');
}
$scope.editor_data=function(){
  $scope.edit.name=$("#edit_name").val();
$scope.edit.email=$("#edit_email").val();
$scope.edit.gender=$("#edit_gender").val();
$scope.edit.status=$("#edit_status").val();
$scope.edit.address1=$("#edit_address1").val();
$scope.edit.address2=$("#edit_address2").val();
$scope.edit.city=$("#edit_city").val();
$scope.edit.country=$("#edit_country").val();
$scope.edit.post_body=$("#edit_post_body").val();
$scope.edit.post_title=$("#edit_post_title").val();
$scope.edit.action="update";
        $http({
            method: 'POST',
            url: '/laravelAPI/public/api/student',
            headers: {'Content-Type': 'application/json','Accept':'application/json','Authorization':'Bearer '+$scope.token},
            data:($scope.edit),
        })
        .then(function successCallback(response) {
             $('#alert_message').html('<div class="alert alert-success">'+response.data.message+'</div>');
            $('#user_data').DataTable().destroy();
            $("#alert_message").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert_message").slideUp(500);});
            $scope.getData();
            $('#editor').modal('hide');
        }, function errorCallback(response) {
            $("#alert").html("Try Again");
            $("#alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert").slideUp(500);});
            $('#editor').modal('hide');

                             });
}

$scope.delData =function(id){
var data = {studid:id, action:"delete"};
        $http({
            method: 'POST',
            url: '/laravelAPI/public/api/student',
            headers: {'Content-Type': 'application/json','Accept':'application/json','Authorization':'Bearer '+$scope.token},
            data:(data),
        })
        .then(function successCallback(response) {
             $('#alert_message').html('<div class="alert alert-success">'+response.data.message+'</div>');
            $('#user_data').DataTable().destroy();
            $("#alert_message").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert_message").slideUp(500);});
$scope.getData();

        }, function errorCallback(response) {
            $("#alert").html("Try Again");
            $("#alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert").slideUp(500);});

                             });
}
deleteItem  = $scope.delData;
editItem  = $scope.editData;


$scope.insert_data =function(){
   console.log("test","sdfsdfasd");  
var name = $('#data2').text();
   var gender = $('#data4').text();
   var email = $('#data3').text();
   var status = $('#data5').text();
   var address1 = $('#data6').text();
   var address2 = $('#data7').text();
   var city = $('#data8').text();
   var country = $('#data9').text();
   var post_title = $('#data10').text();
   var post_body = $('#data11').text();

   console.log("test",name);  
   if(name != '' && gender != '' )
   {
        var data = {name:name, gender:gender,email:email,gender:gender,status:status,address2:address2,address1:address1,city:city,country:country,post_title:post_title,post_body:post_body};
        $http({
            method: 'POST',
            url: '/laravelAPI/public/api/student',
            headers: {'Content-Type': 'application/json','Accept':'application/json'},
            data:(data),
        })
        .then(function successCallback(response) {
             $('#alert_message').html('<div class="alert alert-success">'+response.data+'</div>');
            $('#user_data').DataTable().destroy();
            $("#alert_message").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert_message").slideUp(500);});


        }, function errorCallback(response) {
            $("#alert").html("Try Again");
            $("#alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert").slideUp(500);});

                             });
      }else{
            alert("Host and Mac Address Fields is required");
      }
}
$scope.logout = function(){
  delCookie("token");
   $location.path( "/" );

}
}]);


