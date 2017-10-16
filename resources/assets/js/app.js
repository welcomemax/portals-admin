
import angular from 'angular';

import tableTemplate from '../'

const app = angular.module('portals', ['ngRoute'])
    .constant('API_URL', '/api/');

app.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            controller: 'tableController',
            templateUrl: '../templates/list.html'
        })
        .when('/edit/:itemId', {
            controller: 'detailController',
            templateUrl: '../templates/detail.html'
        })
        .when('/new', {
            controller: 'detailController',
            templateUrl: '../templates/detail.html'
        })
        .otherwise({
            redirectTo: '/'
        });
});


app.controller('tableController', function($scope, $http) {
    $http.get(API_URL + 'items').then(function(response) {


    });
});