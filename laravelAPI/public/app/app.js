var mainApp = angular.module('listApp', [
  'ngRoute',
  'mainAppControllers'
]);

mainApp.config(['$routeProvider', function($routeProvider) {
    
    $routeProvider.
    when('/login', {
        templateUrl: 'template/login.html',
        controller: 'LoginController'
    }).
    when('/signup', {
        templateUrl: 'template/signup.html',
        controller: 'SignupController'
    }).

    when('/dashboard', {
        templateUrl: 'template/index.html',
        controller: 'MainController'
    }).
    when('/student', {
        templateUrl: 'template/student.html',
        controller: 'StudentController'
    }).

    when('/', {
        templateUrl: 'template/login.html',
        controller: 'LoginController'
    }).
    otherwise({
        redirectTo: '/'
    });

}]);

