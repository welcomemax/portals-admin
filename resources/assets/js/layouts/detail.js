import './../../stylus/layouts/detail.styl';

let detail = angular.module('portals.detail', ['ngRoute']);

detail.config(function($routeProvider) {
    $routeProvider
        .when('/edit/:itemId', {
            controller: 'detailController',
            templateUrl: '/templates/detail.html'
        })
        .when('/new', {
            controller: 'detailController',
            templateUrl: '/templates/detail.html'
        })
});

detail.controller('detailController', function($scope, $http) {

});