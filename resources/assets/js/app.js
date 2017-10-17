import 'angular';
import 'angular-route';

import './../stylus/app.styl';

import './layouts/table.js';
import './layouts/detail.js';

let portals = angular.module('portals', [
    'ngRoute',
    'portals.table',
    'portals.detail'
]);

portals.config(['$locationProvider', '$routeProvider', function($locationProvider, $routeProvider) {
    $locationProvider.hashPrefix('!');

    $routeProvider.otherwise({redirectTo: '/'});
}]);


portals.controller('portalsController', ['$scope', 'fetcher', function($scope, fetcher) {

    fetcher().then(function(response) {
        $scope.platforms = response[0].data;
        $scope.products = response[1].data;
        $scope.portals = response[2].data;
        $scope.tags = response[3].data;
    });

}]);

portals.factory('fetcher', ['$http', '$q', function($http, $q) {
    return function() {
        return $q.all([
            $http.get('/api/platforms/'),
            $http.get('/api/products/'),
            $http.get('/api/portals/'),
            $http.get('/api/tags/')
        ]);
    };
}]);
