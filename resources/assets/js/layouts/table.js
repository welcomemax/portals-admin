import './../../stylus/layouts/table.styl';

let table = angular.module('portals.table', ['ngRoute']);

table.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            controller: 'tableController',
            templateUrl: '/templates/table.html'
        })
});

table.controller('tableController', function($scope, $http) {
    $http.get('/api/portals/').then(function(response) {
        $scope.portals = response;

        console.log($scope.portals)
    });
});