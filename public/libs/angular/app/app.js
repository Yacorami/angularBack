const URL_BASE='http://localhost:8383/instrubase/public';

var instruApp = angular.module('instruApp', ['datatables','ui.select','ngResource','ngDialog'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

