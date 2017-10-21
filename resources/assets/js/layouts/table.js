import './../../stylus/layouts/table.styl';

import tableTile from './../components/tile.js'

import platformTile from './../components/tiles/platform.js'
import productTile from './../components/tiles/product.js'
import portalTile from './../components/tiles/portal.js'

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

//
// table.filter('platform', function() {
//     return function(input) {
//         let out = [];
//         for (let i = 0; i < input.length; i++) {
//             if(input[i].platform_id ){
//                 out.push(input[i]);
//             }
//         }
//         return out;
//     }
// });

table.directive('tableTile', tableTile);

table.directive('platformTile', platformTile);
table.directive('productTile', productTile);
table.directive('portalTile', portalTile);

