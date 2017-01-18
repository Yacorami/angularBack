var myApp = angular.module('myApp', ['ui.select','datatables','ngResource','ngDialog']);
myApp.config(['$httpProvider', function($httpProvider) {
    $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
}]);


