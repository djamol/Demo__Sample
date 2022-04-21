var mainAppControllers = angular.module('mainAppControllers', []);
var getDataHolder,deleteItem,editItem;

mainAppControllers.controller('MainController', ['$scope', '$http','$location', function ($scope, $http,$location) {
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
            url: '/laravelAPI/public/api/router',
            headers: {'Content-Type': 'application/json','Accept':'application/json','Authorization':'Bearer '+$scope.token},
            data:(data),
        })
.then(function successCallback(response) {
        $scope.data_list =response.data.data;  
	console.log($scope.data_list);

	var dataTable = $('#user_data').DataTable({
//    	"processing" : true,
 //   	"serverSide" : true,
 retrieve: true,
   	"order" : [],
	"ordering": true,
        "data": $scope.data_list,
        "searching": true,
	"columns": [
          {'data':'sapid'},
          {'data':'hostname'},
          {'data':'loopback'},
          {'data':'mac_address'},
          {
            data: "action",
            render:function (data, type, row) {
             return `<ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" onClick="editItem(`+row.sapid+`,'`+row.hostname+`','`+row.loopback+`','`+row.mac_address+`')" title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" onClick="deleteItem(`+row.sapid+`)" title="Delete"><i class="fa fa-trash"></i></button>
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
$scope.editData =function(id,hostname,loopback,mac_address){
$scope.edit.sapid=id;
$("#edit_sapid").val(id);
$scope.edit.hostname=hostname;
$("#edit_hostname").val(hostname);
$("#edit_loopback").val(loopback);
$scope.edit.loopback=loopback;
$("#edit_mac_address").val(mac_address);
$scope.edit.mac_address=mac_address;
console.log("os",$scope.edit);
$('#editor').modal('show');
}
$scope.editor_data=function(){
  $scope.edit.hostname=$("#edit_hostname").val();
$scope.edit.loopback=$("#edit_loopback").val();
$scope.edit.mac_address=$("#edit_mac_address").val();
$scope.edit.action="update";
        $http({
            method: 'POST',
            url: '/laravelAPI/public/api/router',
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
var data = {sapid:id, action:"delete"};
        $http({
            method: 'POST',
            url: '/laravelAPI/public/api/router',
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
var hostname = $('#data2').text();
   var mac_address = $('#data4').text();
   var loopback = $('#data3').text();
   console.log("test",hostname);  
   if(hostname != '' && mac_address != '' )
   {
        var data = {hostname:hostname, mac_address:mac_address,loopback:loopback};
        $http({
            method: 'POST',
            url: '/laravelAPI/public/api/router',
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


