mainAppControllers.controller('LoginController', ['$scope', '$http','$location', function ($scope, $http, $location) {

$scope.login = function(){
$scope.data = {};
$scope.data.email= $scope.email;
$scope.data.password=$scope.pass; 
$scope.data.remember=$scope.remember; 
        $http({
            method: 'POST',
            url: '/laravelAPI/public/api/login',
            headers: {'Content-Type': 'application/json','Accept':'application/json'},
            data:($scope.data),
        })
.then(function successCallback(response) {
       var data =response.data.data;
	$scope.save_token(data.token);
        $location.path( "/dashboard" );

}, function errorCallback(response) {
	var data =response.data.message;
$("#alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#alert").slideUp(500);
});

                     });


}

  $scope.save_token = function(value) {
var now = new Date();
var time = now.getTime();
var rem = $scope.remember;
if(rem){
time += 3600 * 24000; //24 hour
}else{
time += 3600 * 1000; //1 hour
}
now.setTime(time);
document.cookie = 
'token=' + value + 
'; expires=' + now.toUTCString() + 
'; path=/';
  }
}]);