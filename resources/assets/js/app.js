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


portals.controller('portalsController', ['$scope', 'fetcher', 'prepare', function($scope, fetcher, prepare) {

    fetcher().then(function(response) {
        prepare(response).then(function(result) {
            $scope.platforms = result.platforms;
            $scope.products = result.products;
            $scope.portals = result.portals;
            $scope.tags = result.tags;

            console.log(result);
        });
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

portals.factory('prepare', ['$q', function($q) {
    return function(rawData) {
        let deferred = $q.defer();

        let data = {
            platforms: rawData[0].data,
            products: rawData[1].data,
            portals: rawData[2].data,
            tags: rawData[3].data
        };

        console.log(data.tags);
        data.portals.map(function (portal) {
            portal.status = data.tags[portal.status];
            portal.status_text = data.tags[portal.status_text];
            portal.status_images = data.tags[portal.status_images];
            portal.platform = data.platforms[portal.platform_id];
            portal.product = data.products[portal.product_id];
        });

        deferred.resolve(data);

        return deferred.promise;
    };
}]);