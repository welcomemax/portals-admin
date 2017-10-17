import 'angular';
import 'angular-route';

import './../stylus/app.styl';

import './layouts/table.js';
import './layouts/detail.js';

let portals = angular.module('portals', [
    'ngRoute',
    'portals.table'
]);

portals.config(['$locationProvider', '$routeProvider', function($locationProvider, $routeProvider) {
    $locationProvider.hashPrefix('!');

    $routeProvider.otherwise({redirectTo: '/'});
}]);