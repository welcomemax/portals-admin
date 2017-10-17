import './../../stylus/layouts/table.styl';

import tableTile from './../components/tile.js'

let table = angular.module('portals.table', ['ngRoute']);

table.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            controller: 'tableController',
            templateUrl: '/templates/table.html'
        })
});

table.controller('tableController', function($scope, $http) {

    // console.log('tableController scope')
    // console.log($scope)

});

table.directive('tableTile', tableTile)

