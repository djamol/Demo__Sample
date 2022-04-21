<!DOCTYPE html> 
<html lang="en" id="listApp" ng-app="listApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Management</title>

        <link href="/laravelAPI/public/assets/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="/laravelAPI/public/assets/jquery.min.js"></script>
  <script src="/laravelAPI/public/assets/bootstrap.min.js"></script>
  <script src="/laravelAPI/public/assets/angular.min.js"></script>
  <script src="/laravelAPI/public/assets/angular-route.min.js?"></script>
    
        <script src="/laravelAPI/public/app/app.js"></script>
        <script src="/laravelAPI/public/app/controller/mainController.js"></script>
        <script src="/laravelAPI/public/app/controller/LoginController.js"></script>
        <script src="/laravelAPI/public/app/controller/SignupController.js"></script>
        <script ng-if="current_page=='student'"src="/laravelAPI/public/app/controller/studentController.js"></script>

            
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="main_title">Router Management Tool</h1>
                </div>
            </div>
</div>

            <div ng-view></div>
       
<script>
window.getCookie = function(name) {
  var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
  if (match) return match[2];
}
function delCookie(name) {
  document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
</script>
    </body>
</html>
