mainAppControllers.controller('SignupController', ['$scope', '$http','$location', function ($scope, $http,$location) {


$scope.Signup =function()
{
  var valid = $scope.validation();
  var EMAIL_REGEXP = /^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
  if(valid){
     if(!EMAIL_REGEXP.test($scope.email)){
            $("#alert").html("Please Enter Valid Email ID");
            $("#alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert").slideUp(500);});
     }else{

        var data = {
                name : $scope.name,
                email : $scope.email,
                password : $scope.pass
        };
        $http({
            method: 'POST',
            url: '/laravelAPI/public/api/register',
            headers: {'Content-Type': 'application/json','Accept':'application/json'},
            data:(data),
        })
        .then(function successCallback(response) {
            $("#alert").html("User register successfully");
            $("#alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert").slideUp(500);});
            setTimeout(function() {
                           $location.path( "/" );
            }, 3000);

        }, function errorCallback(response) {
          console.log(response);
          var msg = response.data.message;
          console.log(msg);
            $("#alert").html("Already Exist User");
            $("#alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert").slideUp(500);});

                             });

     }
  }else{
    $("#alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#alert").slideUp(500);});

  }
}
$scope.validation = function(){

    var name = $scope.name;
    var email = $scope.email;
    var pass = $scope.pass;
    var repeatpass = $scope.repeatpass;
    var terms = $scope.terms;
          console.log("tests",terms);

        if (name==null || name=="")
        {
            $("#alert").html("Please Enter Your Full Name");
            return false;
        }else if (email==null || email=="")
        {
            $("#alert").html("Please Enter Your Email Address");
            return false;
        }else if (pass==null || pass=="")
        {
            $("#alert").html("Please Enter Password");
            return false;
        }else if (repeatpass==null || repeatpass=="")
        {
            $("#alert").html("Please Enter Repeat Password");
            return false;
        }else if (repeatpass!=pass)
        {
            $("#alert").html("Please Enter Repeat Password not match ");
            return false;
        }else if (terms==null || terms==false)
        {
            $("#alert").html("Accept Terms of service");
            return false;
        }
        return true;

    }


}]);
